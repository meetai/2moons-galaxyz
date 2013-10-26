<?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:45
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_intro.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97035854352680b852f4968-58637146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f6c5f6090486d58daf3d0a4e1cbb1e9826b38f1' => 
    array (
      0 => '/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_intro.tpl',
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
  'nocache_hash' => '97035854352680b852f4968-58637146',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LNG' => 0,
    'Selector' => 0,
    'lang' => 0,
    'canUpgrade' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52680b85569ca9_99381529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680b85569ca9_99381529')) {function content_52680b85569ca9_99381529($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include '/usr/htdocs/2moons-galaxyz.ll/wwwroot/includes/libs/Smarty/plugins/function.html_options.php';
?><?php /*  Call merged included template "ins_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '97035854352680b852f4968-58637146');
content_52680b85385329_40634289($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_header.tpl" */?>
<tr>
	<td colspan="2">
		<div id="lang" align="right"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['intro_lang'];?>
:&nbsp;<select id="lang" name="lang" onchange="document.location = '?lang='+$(this).val();"><?php echo smarty_function_html_options(array('options'=>$_smarty_tpl->tpl_vars['Selector']->value,'selected'=>$_smarty_tpl->tpl_vars['lang']->value),$_smarty_tpl);?>
</select></div>
		<div id="main" align="left">
			<h2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['intro_welcome'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['intro_text'];?>
</p>
		</div><br><a href="index.php?mode=install&step=1"><button style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['continue'];?>
</button></a>
	</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['canUpgrade']->value){?>
<tr>
	<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['menu_upgrade'];?>
</th>
</tr>
<tr>
	<td colspan="2">
		<div id="main" align="left">
			<h2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['intro_upgrade_head'];?>
</h2>
			<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['intro_upgrade_text'];?>
</p>
		</div><br><a href="index.php?mode=upgrade"><button style="cursor: pointer;"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['continueUpgrade'];?>
</button></a>
	</td>
</tr>
<?php }?>
<?php /*  Call merged included template "ins_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '97035854352680b852f4968-58637146');
content_52680b8555ed84_66377000($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:45
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52680b85385329_40634289')) {function content_52680b85385329_40634289($_smarty_tpl) {?><!DOCTYPE html>

<!--[if lt IE 7 ]> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
" class="no-js"> <!--<![endif]-->
<head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
	<meta name="generator" content="2Moons">
	<!-- 
		This website is powered by 2Moons
		2Moons is a free Space Browsergame initially created by Jan Kröpke and licensed under GNU/GPL.
		2Moons is copyright 2009-2012 of Jan Kröpke. Extensions are copyright of their respective owners.
		Information and contribution at http://2moons.cc/
	-->
	<?php if (!empty($_smarty_tpl->tpl_vars['goto']->value)){?>
	<meta http-equiv="refresh" content="<?php echo $_smarty_tpl->tpl_vars['gotoinsec']->value;?>
;URL=<?php echo $_smarty_tpl->tpl_vars['goto']->value;?>
">
	<?php }?>
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
	<script type="text/javascript" src="../scripts/l18n/validationEngine/jquery.validationEngine-<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
.js"></script>
	<script type="text/javascript" src="../scripts/base/tooltip.js"></script>
	<script type="text/javascript" src="../scripts/game/base.js"></script>
	<?php echo '/*%%SmartyNocache:97035854352680b852f4968-58637146%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:97035854352680b852f4968-58637146%%*/';?>

	<script type="text/javascript" src="../scripts/game/<?php echo '/*%%SmartyNocache:97035854352680b852f4968-58637146%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:97035854352680b852f4968-58637146%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:97035854352680b852f4968-58637146%%*/<?php } ?>/*/%%SmartyNocache:97035854352680b852f4968-58637146%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:97035854352680b852f4968-58637146%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:97035854352680b852f4968-58637146%%*/';?>

	});
	</script>
</head>
<body id="step<?php echo (($tmp = @htmlspecialchars($_GET['step']))===null||$tmp==='' ? 'intro' : $tmp);?>
">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3"><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
</th>
</tr><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:45
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52680b8555ed84_66377000')) {function content_52680b8555ed84_66377000($_smarty_tpl) {?></table>
</body>
</html><?php }} ?>