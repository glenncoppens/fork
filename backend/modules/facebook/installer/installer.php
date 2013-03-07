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
 * @author Glenn Coppens <glenn.coppens@gmail.com>
 */
class FacebookInstaller extends ModuleInstaller
{


	/**
	 * Install the module
	 */
	public function install()
	{

		// add 'blog' as a module
		$this->addModule('facebook');

		// general settings
		$this->setSetting('facebook', 'app_id', '');
		$this->setSetting('facebook', 'app_secret', '');

		// module rights
		$this->setModuleRights(1, 'facebook');

		// action rights
		$this->setActionRights(1, 'facebook', 'settings');


		// settings navigation
		$navigationSettingsId = $this->setNavigation(null, 'Settings');
		$navigationModulesId = $this->setNavigation($navigationSettingsId, 'Modules');
		$this->setNavigation($navigationModulesId, 'Facebook', 'facebook/settings');

		// add extra's
		$facebookId = $this->insertExtra('facebook', 'block', 'Facebook', null, null, 'N', 1000);
		$this->insertExtra('facebook', 'widget', 'FbAuthentication', 'fb_authentication', null, 'N', 1001);
	}
}
