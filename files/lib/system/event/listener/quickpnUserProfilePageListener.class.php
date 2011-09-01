<?php
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');
require_once(WCF_DIR.'lib/form/MessageForm.class.php');

class quickpnUserProfilePageListener implements EventListener {

    public $permissionType = 'message';
    public $parseURL = 0;
	public $enableSmilies = 0;
	public $enableBBCodes = 0;
	public $showSignature = 0;
 
	public function execute($eventObj, $className, $eventName){

        $user = $eventObj->user;

			if (WCF::getUser()->userID) {
				$this->parseURL = WCF::getUser()->{$this->permissionType.'ParseURL'};
				$this->enableSmilies = WCF::getUser()->{$this->permissionType.'EnableSmilies'};
				$this->enableBBCodes = WCF::getUser()->{$this->permissionType.'EnableBBCodes'};
				$this->showSignature = WCF::getUser()->{$this->permissionType.'ShowSignature'};
}
                else {
				$this->parseURL = MESSAGE_FORM_DEFAULT_PARSE_URL;
				$this->enableSmilies = MESSAGE_FORM_DEFAULT_ENABLE_SMILIES;
				$this->enableBBCodes = MESSAGE_FORM_DEFAULT_ENABLE_BBCODES;
				$this->showSignature = 0;
}
        
        WCF::getTPL()->assign(array(
					'recipient' => $eventObj->user,
                    'parseURL' => $this->parseURL,
                    'enableSmilies' => $this->enableSmilies,
                    'enableBBCodes' => $this->enableBBCodes,
                    'showSignature' => $this->showSignature
				));
        WCF::getTPL()->append('additionalContents3', WCF::getTPL()->fetch('quickPn'));
    }
}
?>
