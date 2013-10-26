<?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:53
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_req.tpl" */ ?>
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
  'function' => 
  array (
  ),
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
  'unifunc' => 'content_52680b8dd29400_61698431',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680b8dd29400_61698431')) {function content_52680b8dd29400_61698431($_smarty_tpl) {?><?php /*  Call merged included template "ins_header.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '135081727952680b8db7b2b9-19454001');
content_52680b8db9d738_09458850($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_header.tpl" */?>
<tr>
	<td class="left">
		<h2><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_head'];?>
</h2>
		<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_desc'];?>
</p>
		<table class="req border">
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_php_need'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_php_need_desc'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['PHP']->value;?>
</td>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_global_need'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_global_desc'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['global']->value;?>
</th>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_mysqli_active'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_mysqli_desc'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['mysqli']->value;?>
</th>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_gd_need'];?>
</p><p class="desc"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_gd_desc'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['gdlib']->value;?>
</td>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_json_need'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['json']->value;?>
</td>
			</tr>
			<tr>
				<td class="transparent left"><p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['reg_iniset_need'];?>
</p></td>
				<td class="transparent"><?php echo $_smarty_tpl->tpl_vars['iniset']->value;?>
</td>
			</tr>
			<?php echo $_smarty_tpl->tpl_vars['dir']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['config']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['done']->value;?>

		</table>
	</td>
</tr>
<?php if ($_smarty_tpl->tpl_vars['ftp']->value!=0){?>
<tr>
	<td class="transparent" colspan="2"><p>&nbsp;</p></td>
</tr>
<tr>
	<th colspan="2"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_head'];?>
</th>
</tr>
<tr>
	<td>
		<form name="ftp" id="ftp" action="" onsubmit="return false;">
		<table class="req">
			<tr>
				<td class="transparent left" colspan="2">
					<p><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_desc'];?>
</p>
				</td>
			</tr>
			<tr>
				<td class="transparent left"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_host'];?>
:</td>
				<td class="transparent"><input type="text" name="host"></td>
			</tr>
			<tr>
				<td class="transparent left"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_username'];?>
:</td>
				<td class="transparent"><input type="text" name="user"></th>
			</tr>
			<tr>
				<td class="transparent left"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_password'];?>
:</td>
				<td class="transparent"><input type="password" name="pass"></td>
			</tr>
			<tr>
				<td class="transparent left"><?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_dir'];?>
:</td>
				<td class="transparent"><input type="text" name="path"></td>
			</tr>
			<tr class="noborder">
				<td class="transparent right" colspan="2"><input type="button" value="<?php echo $_smarty_tpl->tpl_vars['LNG']->value['req_ftp_send'];?>
" onclick="submitftp();"></td>
			</tr>
			</table>
		</form>
	</td>
</tr>
<?php }?>
<?php /*  Call merged included template "ins_footer.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate("ins_footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, null, array(), 0, '135081727952680b8db7b2b9-19454001');
content_52680b8dd21ff8_06989650($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); /*  End of included template "ins_footer.tpl" */?><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:53
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_header.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52680b8db9d738_09458850')) {function content_52680b8db9d738_09458850($_smarty_tpl) {?><!DOCTYPE html>

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
	<?php echo '/*%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/<?php  $_smarty_tpl->tpl_vars[\'scriptname\'] = new Smarty_Variable; $_smarty_tpl->tpl_vars[\'scriptname\']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars[\'scripts\']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, \'array\');}
foreach ($_from as $_smarty_tpl->tpl_vars[\'scriptname\']->key => $_smarty_tpl->tpl_vars[\'scriptname\']->value){
$_smarty_tpl->tpl_vars[\'scriptname\']->_loop = true;
?>/*/%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/';?>

	<script type="text/javascript" src="../scripts/game/<?php echo '/*%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/<?php echo $_smarty_tpl->tpl_vars[\'scriptname\']->value;?>
/*/%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/';?>
.js"></script>
	<?php echo '/*%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/<?php } ?>/*/%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/';?>

	
	<script type="text/javascript">
	$(function() {
		<?php echo '/*%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/<?php echo $_smarty_tpl->tpl_vars[\'execscript\']->value;?>
/*/%%SmartyNocache:135081727952680b8db7b2b9-19454001%%*/';?>

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
</tr><?php }} ?><?php /* Smarty version Smarty-3.1.13, created on 2013-10-23 19:46:53
         compiled from "/usr/htdocs/2moons-galaxyz.ll/wwwroot/styles/templates/install/ins_footer.tpl" */ ?>
<?php if ($_valid && !is_callable('content_52680b8dd21ff8_06989650')) {function content_52680b8dd21ff8_06989650($_smarty_tpl) {?></table>
</body>
</html><?php }} ?>