<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');
require_once(WCF_DIR.'lib/form/MessageForm.class.php');

/**
 * Includes the Quick-PM Template
 *
 * @author Tim Düsterhus, Martin Schwendowius
 * @copyright 2008-2011 wbbaddons.de
 * @package de.wbbaddons.wcf.quick-pm
 * @license LGPL - Lesser General Public License <http://www.gnu.org/licenses/lgpl.html>
 */
class QuickPMUserPageListener implements EventListener {
	/**
	 * The permission-type for PMs
	 *
	 * @var	sting
	 */
	const PERMISSION_TYPE = 'message';

	/**
	 * @see EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName){
		if (!WCF::getUser()->userID || !WCF::getUser()->getPermission('user.pm.canUseQuickPm') || !WCF::getUser()->getPermission('user.pm.canUsePm') || !$eventObj->frame->user->getPermission('user.pm.canUsePm') || !$eventObj->frame->user->acceptPm || !QUICK_PM_ACTIVE) return;
		if ($eventObj->frame->user->onlyBuddyCanPm && !$eventObj->frame->user->buddy && $eventObj->frame->user->userID != WCF::getUser()->userID && !WCF::getUser()->getPermission('user.profile.blacklist.canNotBeIgnored')) return;

		WCF::getTPL()->assign(array(
			'recipient' => $eventObj->frame->user->username,
			'parseURL' => WCF::getUser()->{self::PERMISSION_TYPE.'ParseURL'},
			'enableSmilies' => WCF::getUser()->{self::PERMISSION_TYPE.'EnableSmilies'},
			'enableBBCodes' => WCF::getUser()->{self::PERMISSION_TYPE.'EnableBBCodes'},
			'showSignature' => WCF::getUser()->{self::PERMISSION_TYPE.'ShowSignature'}
		));

		WCF::getTPL()->append('additionalContent2', WCF::getTPL()->fetch('quickPm'));
	}
}