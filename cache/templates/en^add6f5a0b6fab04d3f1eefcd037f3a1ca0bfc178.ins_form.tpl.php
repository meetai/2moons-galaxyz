<?php /*%%SmartyHeaderCode:128264215752680bb9e8d146-45309043%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'add6f5a0b6fab04d3f1eefcd037f3a1ca0bfc178' => 
    array (
      0 => '/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_form.tpl',
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
  'nocache_hash' => '128264215752680bb9e8d146-45309043',
  'variables' => 
  array (
    'LNG' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52680bba2e2aa6_39288562',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680bba2e2aa6_39288562')) {function content_52680bba2e2aa6_39288562($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="step3">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3">Installation</th>
</tr><tr>
	<td class="left">
		<h2>Configure the installation database</h2>
		<p>Now that it has been determined that GALAXYZ can be installed on your server, s should provide some information. If you dont know how to run a link database, contact your hosting provider first or with the GALAXYZ forum for help and support. When you insert the data, checks were introduced properly</p>
		<form action="index.php?mode=install&step=4" method="post"> 
		<input type="hidden" name="post" value="1">
		<table class="req">
			<tr>
				<td class="transparent left"><p>Database server or DSN</p></td>
				<td class="transparent"><input type="text" name="host" value="localhost" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Database port</p></td>
				<td class="transparent"><input type="text" name="port" value="3306" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Database user</p></td>
				<td class="transparent"><input type="text" name="user" value="" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Database Password</p></td>
				<td class="transparent"><input type="password" name="passwort" value="" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Database name</p></td>
				<td class="transparent"><input type="text" name="dbname" value="" size="30"></td>
			</tr>
			<tr>
				<td class="transparent left"><p>Table prefix:</p></td>
				<td class="transparent"><input type="text" name="prefix" value="uni1_" size="30"></td>
			</tr>
			<tr class="noborder">
				<td colspan="2" class="transparent"><input type="submit" name="next" value="Continue"></td>
			</tr>
		</table>
		</form>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>