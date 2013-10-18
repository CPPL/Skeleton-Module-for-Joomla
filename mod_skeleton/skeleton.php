<?php
/**
 * @package     Skeleton
 * @subpackage  mod_skeleton
 * @copyright   Copyright © 2013 My Name or My Company. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

// Include the weblinks functions only once
require_once dirname(__FILE__) . '/helper.php';

$fileList = modSkeletonHelper::getList($params);

if (!count($fileList))
{
	return;
}

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require JModuleHelper::getLayoutPath('mod_skeleton', $params->get('layout', 'default'));
