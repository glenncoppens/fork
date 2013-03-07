<?php

/**
 * This widget will show the facebook login
 *
 * @author Glenn Coppens <glenn.coppens@gmail.com>
 */
class FrontendFacebookWidgetFbauthentication extends FrontendBaseWidget
{

	private $appId;
	private $appSecret;
	
	/**
	 * User ID
	 */
	private $user;


	/**
	 * facebook
	 */
	private $facebook;

	/**
	 * Userprofile
	 */
	private $user_profile = array();

	/**
	 * Logged into facebook?
	 * @var bool
	 */
	private $logged_in = false;

	private $loginUrl;
	private $logoutUrl;

	
	/**
	 * Execute the extra
	 */
	public function execute()
	{
		parent::execute();
		$this->loadTemplate();
		$this->facebookAuthentication();
		$this->parse();
	}

	/*
	 * Check if a user has been logged in
	 */
	private function facebookAuthentication() {		

		require_once 'external/facebookSDK.php';
		$this->appId = '421177611289666';
		$this->appSecret = 'ce2e2b0f118f66d1d404d68038469379';

		$this->facebook = new FacebookSDK(array(
		  'appId'  => $this->appId,
		  'secret' => $this->appSecret,
		  'cookie' => true,
		));

		// http://thinkdiff.net/facebook/php-sdk-3-0-graph-api-base-facebook-connect-tutorial/

		// 1. check if user is logged in (getUser())
		//		--> yes: create logout url 
		//		--> no:	 create login url (scope, redirect_uri)
		//		--> parse url to the template (create some crazy css)

		// 2. get user information via graph api

		$this->user = $this->facebook->getUser();
		$access_token = $this->facebook->getAccessToken();
		//Spoon::dump($access_token);

		if ($this->user) {
			// user is logged in
			$this->logged_in = true;
			$this->logoutUrl = $this->facebook->getLogoutUrl(array('next' => 'http://figure8.lcl') );
			$this->facebook->setAccessToken($access_token);
			//Spoon::dump($this->facebook);
			try {
				$this->user_profile = $this->facebook->api('/me');	
			} catch(FacebookApiException $e) {
				$this->user = null;
			}
			
			//Spoon::dump($this->user_profile);
		}
		else {
			// user is not logged in
			// create login url with right permissions

			$this->loginUrl = $this->facebook->getLoginUrl(array(
				'scope' => 'email,offline_access,publish_stream,user_birthday,user_location,user_work_history,user_about_me,user_hometown',
				//'redirect_uri' => $this->getCurrentUrl(), // if empty redirect to originating page
			));

			$this->user = null;

		}

	}

	public function getLoginUrl() {
		// create session for state
		$state = md5(uniqid(rand(), TRUE)); 	// CSRF protection
		SpoonSession::set('figure8_fbstate', $state);

		return 'www.facebook.com/dialog/oauth?'
				. 'client_id=' . $this->getAppId()
				. '&redirect_uri=' . $this->getCurrentUrl()
				. '&state=' . $state
				. '&scope=offline_access';
	}


	/**
	 * Parse
	 */
	private function parse()
	{
		// login variable
		$this->tpl->assign('widgetFacebookLoggedin', $this->logged_in);
		
		
		// if logged in, parse url's & profile
		if ($this->logged_in){

			$this->tpl->assign('widgetFacebookLogoutUrl', $this->logoutUrl);
			$this->tpl->assign('widgetFacebookProfile', $this->user_profile);
		}
		else {

			$this->tpl->assign('widgetFacebookLoginUrl', $this->loginUrl);
		}
		
	}	

	/**
	 * Get a access token
	 *
	 * @return	string
	 * @param	string $code
	 * @param	string $redirectUrl
	 */
	public function getAccessToken($code, $redirectUrl)
	{
		// build parameters
		$parameters['code'] = (string) $code;
		$parameters['redirect_uri'] = (string) $redirectUrl;
		$parameters['client_id'] = $this->getApplicationId();
		$parameters['client_secret'] = $this->getApplicationSecret();

		// make the call
		$response = $this->doCall('oauth/access_token', $parameters, 'GET', null, true);

		// explode
		$chunks = explode('access_token=', $response);

		// validate
		if(!isset($chunks[1]))
		{
			// we expect JSON so decode it
			$json = @json_decode($response, true);

			// validate json
			if($json === false) throw new FacebookException('Invalid JSON-response');

			// is error?
			if(isset($json['error']))
			{
				// init var
				$type = (isset($json['error']['type'])) ? $json['error']['type'] : '';
				$message = (isset($json['error']['message'])) ? $json['error']['message'] : '';

				// build real message
				if($type != '') $message = trim($type . ': ' . $message);

				// throw error
				throw new FacebookException($message);
			}

			// fallback
			throw new FacebookException('Invalid JSON-response.');
		}

		// store the token for our use
		$this->setToken($chunks[1]);

		// return
		return $chunks[1];
	}


	/**
	 * Get the application Id
  	 * @return string
  	 */
	private function getAppId() {
		return $this->appId;
	}

	/**
	 * Get the application secret
  	 * @return string
  	 */
	private function getAppSecret() {
		return $this->appSecret;
	}

	/**
	 * Function to get the current url.
  	 * @return string
  	 */
	private function getCurrentUrl(){
		// find out the domain:
		$domain = $_SERVER['HTTP_HOST'];

		// find out request string
		$url = "http://" . $domain . $_SERVER['REQUEST_URI'];

		return $url;
	}	
}
