<?php
/**
 * @package     Skeleton
 * @subpackage  mod_skeleton
 * @copyright   Copyright © YYYY My Name or My Company. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<div class="skeletons_module<?php echo $moduleclass_sfx; ?>">
<?php
	$descText = $params->get('description', '');

	if ($params->get('show_description', 0) && $descText != '')
	{
		echo '<div id="skeletons_module_desc">' . $descText . '</div>';
	}
?>
</div>
