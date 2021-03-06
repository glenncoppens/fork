<?php

/*
 * This file is part of Fork CMS.
 *
 * For the full copyright and license information, please view the license
 * file that was distributed with this source code.
 */

/**
 * This is the settings-action, it will display a form to set general blog settings
 *
 * @author Glenn Coppens <glenn.coppens@gmail.com>
 */
class BackendInstagramSettings extends BackendBaseActionEdit
{
	/**
	 * Is the user a god user?
	 *
	 * @var bool
	 */
	protected $isGod = false;

	/**
	 * Execute the action
	 */
	public function execute()
	{
		parent::execute();
		$this->loadForm();
		$this->validateForm();
		$this->parse();
		$this->display();
	}

	/**
	 * Loads the settings form
	 */
	private function loadForm()
	{
		$this->isGod = BackendAuthentication::getUser()->isGod();

		$this->frm = new BackendForm('settings');

		// add instagram feed field
		$this->frm->addText('instagram_url', BackendModel::getModuleSetting($this->URL->getModule(), 'instagram_url_' . BL::getWorkingLanguage()));
	}

	/**
	 * Parse the form
	 */
	protected function parse()
	{
		parent::parse();

		// parse additional variables
		$this->tpl->assign('isGod', $this->isGod);
	}

	/**
	 * Validates the settings form
	 */
	private function validateForm()
	{
		if($this->frm->isSubmitted())
		{

			// validation
			$this->frm->getField('instagram_url')->isFilled(BL::err('FieldIsRequired'));
			$this->frm->getField('instagram_url')->isUrl(BL::err('InvalidURL'));


			if($this->frm->isCorrect())
			{
				// set our settings
				BackendModel::setModuleSetting($this->URL->getModule(), 'instagram_url_' . BL::getWorkingLanguage(), $this->frm->getField('instagram_url')->getValue());

				// trigger event
				BackendModel::triggerEvent($this->getModule(), 'after_saved_settings');

				// redirect to the settings page
				$this->redirect(BackendModel::createURLForAction('settings') . '&report=saved');
			}
		}
	}
}
