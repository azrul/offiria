<?php
/**
 * @version     1.0.0
 * @package     com_account
 * @copyright   Copyright (C) 2011. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// no direct access
defined('_JEXEC') or die;

?>
<div class="account-navbar">
<?php echo $this->showNavBar(); ?>
</div>


<?php 
	for ($x = 0; $x < count($this->row); $x++)
	{
		echo $this->row[$x]->getHTML();
	}
?>