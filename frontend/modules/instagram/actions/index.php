<?php

/**
 * This is the overview-action
 *
 * @author Glenn Coppens <glenn.coppens@gmail.com>
 */
class FrontendInstagramIndex extends FrontendBaseBlock
{

	/**
	* Instagram Url/feed Property 
	* 
	* @var	array
	*/
	private $photos = array();

	/**
	 * Execute the extra
	 */
	public function execute()
	{
		parent::execute();
		$this->loadTemplate();
		$this->getData();
		$this->parse();
	}

	/**
	 * Load the data, don't forget to validate the incoming data
	 */
	private function getData()
	{
		
		require_once 'external/autoloader.php';

		// Get url
		$this->instagramFeed = FrontendModel::getModuleSetting('instagram', 'instagram_url_' . FRONTEND_LANGUAGE);
		$this->photo = false;
		
		// Prepare feed
		$feed = new SimplePie();
		$feed->set_feed_url($this->instagramFeed);
		$feed->handle_content_type();
		$feed->set_cache_location(FRONTEND_CACHE_PATH . '/compiled_templates');
		$feed->set_cache_duration(60*60*12);

		// Initialize
		$feed->init();
		$items = $feed->get_items();

		// Loop through items
		foreach ($items as $item) {
			$this->photos[]['image'] = $item->get_description();
		}		
	}

	/**
	 * Parse the data into the template
	 */
	private function parse()
	{
		$this->tpl->assign('instagramPhotos', $this->photos);
	}
}
