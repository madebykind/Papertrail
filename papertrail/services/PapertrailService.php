<?php
namespace Craft;

/**
 * Papertrail: PapertrailService
 *
 * @author    Michael Rog <michael@michaelrog.com>
 * @copyright Copyright (c) 2016, Michael Rog
 * @see       http://topshelfcraft.com
 * @package   craft.plugins.papertrail
 * @since     1.0
 */
class PapertrailService extends BaseApplicationComponent
{


	/**
	 * @param string $msg
	 * @param string $level
	 * @param string $component
	 * @param string $system
	 *
	 * @return bool|int The number of bytes sent, or FALSE if there was an error.
	 */
	public function log($msg = '', $level = LogLevel::Info, $component = null, $system = null)
	{
		return PapertrailHelper::log($msg, $level, $component, $system);
	}


}