<?php
// wcf imports
require_once(WCF_DIR.'lib/system/event/EventListener.class.php');

/**
 * Add StatsInfo
 * 
 * @svn			$Id: WSIFStatsInfoListener.class.php 1541 2010-08-20 16:12:51Z TobiasH87 $
 * @package		com.woltlab.community.mfcfb.statsinfo
 * @license		Exclusive
 */
class WSIFStatsInfoListener implements EventListener
{
	/**
	 * @see		EventListener::execute()
	 */
	public function execute($eventObj, $className, $eventName)
	{
		//requirements for StatsInfo
		if (INDEX_STATSINFO_ENABLE && WCF::getUser()->getPermission('user.filebase.canViewStatsInfo')) {
		WCF::getTPL()->append('additionalBoxes', WCF::getTPL()->fetch('statsInfo'));
		}
	}        
}
?>