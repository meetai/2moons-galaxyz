<?php /*%%SmartyHeaderCode:135081727952680b8db7b2b9-19454001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '797d56b510930a0621e7de791590d6db35b8dc3b' => 
    array (
      0 => '/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_req.tpl',
      1 => 1380523560,
      2 => 'file',
    ),
    '9622e3cafd2c29850241fed28d44dedadcdefd1d' => 
    array (
      0 => '/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_header.tpl',
      1 => 1380523560,
      2 => 'file',
    ),
    '71a383a2f7977c8ead5921498fe6487be273fd00' => 
    array (
      0 => '/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_footer.tpl',
      1 => 1380523560,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135081727952680b8db7b2b9-19454001',
  'variables' => 
  array (
    'LNG' => 0,
    'PHP' => 0,
    'global' => 0,
    'mysqli' => 0,
    'gdlib' => 0,
    'json' => 0,
    'iniset' => 0,
    'dir' => 0,
    'config' => 0,
    'done' => 0,
    'ftp' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52680b8dd99982_09815333',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680b8dd99982_09815333')) {function content_52680b8dd99982_09815333($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
	<title>Installation &bull; 2Moons</title>
	<meta name="generator" content="2Moons">
	<!-- 
		This website is powered by 2Moons
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/boilerplate.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/ingame/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/install/main.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/jquery.fancybox.css">
	<link rel="stylesheet" type="text/css" href="../styles/resource/css/base/validationEngine.jquery.css">
	<link rel="stylesheet" type="text/css" href="../styles/theme/gow/formate.css">
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<script type="text/javascript" src="../scripts/base/jquery.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.ui.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.cookie.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.fancybox.js"></script>
	<script type="text/javascript" src="../scripts/base/jquery.validationEngine.js"></script>
	<script type="text/javascript" src="../scripts/l18n/validationEngine/jquery.validationEngine-en.js"></script>
	<script type="text/javascript" src="../scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="../scripts/game/base.js"></script>
	<?php  $_smarty_tpl->tpl_vars['scriptname'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['scriptname']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['scripts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['scriptname']->key => $_smarty_tpl->tpl_vars['scriptname']->value){
$_smarty_tpl->tpl_vars['scriptname']->_loop = true;
?>
	<script type="text/javascript" src="../scripts/game/<?php echo $_smarty_tpl->tpl_vars['scriptname']->value;?>
.js"></script>
	<?php } ?>
	
	<script type="text/javascript">
	$(function() {
		<?php echo $_smarty_tpl->tpl_vars['execscript']->value;?>

	});
	</script>
</head>
<body id="step2">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3">Installation</th>
</tr><tr>
	<td class="left">
		<h2>System requirements</h2>
		<p>Before the installation proceed, GALAXYZ will be some tests to verify that your server supports the GALAXYZ, so ensure that the GALAXYZ can be installed. Its suggested that you read carefully the results, and do not proceed until all these be checked.</p>
		<table class="req border">
			<tr>
				<td class="transparent left"><p>Installed version of the scripting language &raquo;PHP&laquo;</p><p class="desc"><strong>Required</strong> — PHP is the language code base of GALAXYZ. This is the required PHP version 5.2.5 or higher so that all modules work correctly</p></td>
				<td class="transparent"><span class="yes">Yes, v5.3.10-1ubuntu2ppa6~lucid</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>register_globals disabled?</p><p class="desc">GALAXYZ will also work, if this configuration is installed on your server. However, it is recommended for security reasons, disable "register_globals" in PHP installation, if that is possible.</p></td>
				<td class="transparent"><span class="yes">Yes</span></th>
			</tr>
			<tr>
				<td class="transparent left"><p>Extension support &raquo;MySQLi&laquo;</p><p class="desc"><strong>Required</strong> — Need to have support for MySQLi in PHP. If no module of the database are shown as being available, you should contact your hosting provider (Domain Hoster) or review the documentation of PHP.</p></td>
				<td class="transparent"><span class="yes">Yes</span></th>
			</tr>
			<tr>
				<td class="transparent left"><p>Installed version of the GD PHP Script &raquo;gdlib&laquo;</p><p class="desc"><strong>Optional</strong> — Graphic processing library &raquo;gdlib&laquo; Is responsible for the generation of dynamic images. They work without some of the features of the software.</p></td>
				<td class="transparent"><span class="yes">Yes, v2.0.0</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Extension &raquo;JSON&laquo; avaliable?</p></td>
				<td class="transparent"><span class="yes">Yes</span></td>
			</tr>
			<tr>
				<td class="transparent left"><p>PHP function &raquo;ini_set&laquo; avaliable?</p></td>
				<td class="transparent"><span class="yes">Yes</span></td>
			</tr>
			<tr><td class="transparent left"><p>The folder &raquo;cache/&laquo; Is recordable?</p></td><td class="transparent"><span class="yes">Found</span><span class="yes"> - Recordable</span></td></tr><tr><td class="transparent left"><p>The folder &raquo;cache/templates/&laquo; Is recordable?</p></td><td class="transparent"><span class="yes">Found</span><span class="yes"> - Recordable</span></td></tr><tr><td class="transparent left"><p>The folder &raquo;includes/&laquo; Is recordable?</p></td><td class="transparent"><span class="yes">Found</span><span class="yes"> - Recordable</span></td></tr>
			<tr><td class="transparent left"><p>The file &raquo;includes/config.php&laquo; Is recordable?</p></td><td class="transparent"><span class="yes">Found</span><span class="yes"> - Recordable</span></td></tr>
			<tr class="noborder"><td colspan="2" class="transparent"><a href="index.php?mode=install&step=3"><button style="cursor: pointer;">Continue</button></a></td></tr>
		</table>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>