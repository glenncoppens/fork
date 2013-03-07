<?php

/**
 * This widget will show the latest comments
 *
 * @author Glenn Coppens <glenn.coppens@gmail.com>
 */
class FrontendInstagramWidgetLatestphoto extends FrontendBaseWidget
{
	/**
	 * Execute the extra
	 */
	public function execute()
	{
		parent::execute();
		$this->loadTemplate();
		$this->loadLatestPhoto();
		$this->parse();
	}


	/**
	 * Load latest instagram picture (Simple Pie 1.3.1 used)
	 * 
	 */
	private function loadLatestPhoto() {

		require 'external/autoloader.php';

		// get url
		$this->instagramFeed = FrontendModel::getModuleSetting('instagram', 'instagram_url_' . FRONTEND_LANGUAGE);
		$this->photo = false;

		// Create new SimplePie
		$feed = new SimplePie();
 	
		// Prepare feed
		$feed->set_feed_url($this->instagramFeed);
		$feed->handle_content_type();
		$feed->set_cache_location(FRONTEND_CACHE_PATH . '/compiled_templates');
		$feed->set_cache_duration(60*60*12);

		// Initialize & get items
		$feed->init();
		$items = $feed->get_items();

		// Loop through items & create string array
		// used in the module template
		if (isset($items[0])){
			$item = $items[0];
			$this->photo = $item->get_description();
		}
	}


	/**
	 * Parse
	 */
	private function parse()
	{
		$this->tpl->assign('widgetInstagramLatestPhoto', $this->photo);
	}
}
