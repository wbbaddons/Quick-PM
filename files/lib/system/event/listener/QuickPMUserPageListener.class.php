<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');
require_once(WCF_DIR.'lib/form/MessageForm.class.php');

/**
 * Includes the Quick-PM Template
 *
 * @author Martin Schwendowius
 * @copyright 2008-2011 wbbaddons.de
 * @package de.wbbaddons.wcf.quick-pm
 * @license LGPL - Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 */
class QuickPMUserPageListener implements EventListener {
	const PERMISSION_TYPE = 'message';
	public $parseURL = 0;
	public $enableSmilies = 0;
	public $enableBBCodes = 0;
	public $showSignature = 0;

	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName){
		if (!WCF::getUser()->userID || !WCF::getUser->getPermission('user.pm.canUseQuickPm') || !WCF::getUser->getPermission('user.pm.canUsePm') || !QUICK_PM_ACTIVE) return;

		$this->parseURL = WCF::getUser()->{self::PERMISSION_TYPE.'ParseURL'};
		$this->enableSmilies = WCF::getUser()->{self::PERMISSION_TYPE.'EnableSmilies'};
		$this->enableBBCodes = WCF::getUser()->{self::PERMISSION_TYPE.'EnableBBCodes'};
		$this->showSignature = WCF::getUser()->{self::PERMISSION_TYPE.'ShowSignature'};

		//assign variables
		WCF::getTPL()->assign(array(
			'recipient' => $eventObj->frame->user->username,
			'parseURL' => $this->parseURL,
			'enableSmilies' => $this->enableSmilies,
			'enableBBCodes' => $this->enableBBCodes,
			'showSignature' => $this->showSignature
		));

		// Fetch template
		WCF::getTPL()->append('additionalContent3', WCF::getTPL()->fetch('quickPm'));
	}
}