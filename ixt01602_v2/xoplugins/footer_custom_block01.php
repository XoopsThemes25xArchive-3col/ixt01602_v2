<?php
/*
* Qualitative Themes for XOOPS
*
* @license       http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU General Public License (GPL)
* @project       IXThemes Project, http://ixthemes.org
* @theme_name    ixt01602
* @theme_demo    http://ixthemes.sourceforge.net/demo/x/index.php?xoops_theme_select=ixt01602
* @theme_author  Alexander Galochkin (algalochkin at users.sourceforge.net)
* @version       $Id: footer_custom_block01.php 1730 2009-12-08 14:28:41Z algalochkin $
*
* Thanks you, that you have left this header untouched!!!
*/
$block = array(
	'id'        => '1001',
	'title'     => 'Custom Footer',
	'content'   => '
	<div>
	Hello!
	<br/>
	Here the custom footer block 01.
	<blockquote>
	<p>
	&ldquo;IXThemes - Suit For Your Content&rdquo;
	<br />
	&ldquo;XOOPS - Powered by you!&rdquo;
	</p>
	</blockquote>
	</div>
	',
);
$this->assign('fblock', $block);
?>