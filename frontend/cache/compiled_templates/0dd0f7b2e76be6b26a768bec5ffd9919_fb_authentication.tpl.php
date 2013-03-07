<?php error_reporting(E_ALL | E_STRICT); ini_set('display_errors', 'On'); ?>



<?php
					if(isset($this->variables['widgetFacebookLoggedin']) && count($this->variables['widgetFacebookLoggedin']) != 0 && $this->variables['widgetFacebookLoggedin'] != '' && $this->variables['widgetFacebookLoggedin'] !== false)
					{
						?>
	<!--<a href="<?php if(array_key_exists('widgetFacebookLogoutUrl', (array) $this->variables)) { echo $this->variables['widgetFacebookLogoutUrl']; } else { ?>{$widgetFacebookLogoutUrl}<?php } ?>">Logout</a>-->
	<div>

		<p>Hi <?php if(isset($this->variables['widgetFacebookProfile']) && array_key_exists('name', (array) $this->variables['widgetFacebookProfile'])) { echo $this->variables['widgetFacebookProfile']['name']; } else { ?>{$widgetFacebookProfile.name}<?php } ?></p>
		<p><a href="<?php if(array_key_exists('widgetFacebookLogoutUrl', (array) $this->variables)) { echo $this->variables['widgetFacebookLogoutUrl']; } else { ?>{$widgetFacebookLogoutUrl}<?php } ?>">Logout</a></p>
	</div>
<?php } ?>

<?php if(!isset($this->variables['widgetFacebookLoggedin']) || count($this->variables['widgetFacebookLoggedin']) == 0 || $this->variables['widgetFacebookLoggedin'] == '' || $this->variables['widgetFacebookLoggedin'] === false): ?>
	
	<p><a href="<?php if(array_key_exists('widgetFacebookLoginUrl', (array) $this->variables)) { echo $this->variables['widgetFacebookLoginUrl']; } else { ?>{$widgetFacebookLoginUrl}<?php } ?>">Login</a></p>
<?php endif; ?>
