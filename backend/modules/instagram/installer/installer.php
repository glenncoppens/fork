<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * Installer for the blog module
 *
 * @author Davy Hellemans <davy.hellemans@netlash.com>
 * @author Tijs Verkoyen <tijs@sumocoders.be>
 * @author Matthias Mullie <forkcms@mullie.eu>
 */
class InstagramInstaller extends ModuleInstaller
{


	/**
	 * Install the module
	 */
	public function install()
	{

		// add 'blog' as a module
		$this->addModule('instagram');

		// general settings
		$this->setSetting('instagram', 'feed_url', '');

		// module rights
		$this->setModuleRights(1, 'instagram');

		// action rights
		$this->setActionRights(1, 'instagram', 'settings');


		// settings navigation
		$navigationSettingsId = $this->setNavigation(null, 'Settings');
		$navigationModulesId = $this->setNavigation($navigationSettingsId, 'Modules');
		$this->setNavigation($navigationModulesId, 'Instagram', 'instagram/settings');

		// add extra's
		$instagramId = $this->insertExtra('instagram', 'block', 'Instagram', null, null, 'N', 1000);
		$this->insertExtra('instagram', 'widget', 'LatestPhoto', 'latest_photo', null, 'N', 1001);

	
	}

	
}
