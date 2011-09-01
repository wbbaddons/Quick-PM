<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');
require_once(WCF_DIR.'lib/form/MessageForm.class.php');

/**
 * Includes the Quick-PM Template
 *
 * @author Martin Schwendowius
 * @package de.wbbaddons.wcf.quick-pm
 */
class QuickPMUserProfilePageListener implements EventListener {
	const PERMISSION_TYPE = 'message';
	public $parseURL = 0;
	public $enableSmilies = 0;
	public $enableBBCodes = 0;
	public $showSignature = 0;

	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName){
		$user = $eventObj->user;

		if (WCF::getUser()->userID) {
			$this->parseURL = WCF::getUser()->{self::PERMISSION_TYPE.'ParseURL'};
			$this->enableSmilies = WCF::getUser()->{self::PERMISSION_TYPE.'EnableSmilies'};
			$this->enableBBCodes = WCF::getUser()->{self::PERMISSION_TYPE.'EnableBBCodes'};
			$this->showSignature = WCF::getUser()->{self::PERMISSION_TYPE.'ShowSignature'};
		}
		else {
			return;
		}

		WCF::getTPL()->assign(array(
			'recipient' => $eventObj->user,
			'parseURL' => $this->parseURL,
			'enableSmilies' => $this->enableSmilies,
			'enableBBCodes' => $this->enableBBCodes,
			'showSignature' => $this->showSignature
		));

		WCF::getTPL()->append('additionalContents3', WCF::getTPL()->fetch('quickPM'));
	}
}
?>