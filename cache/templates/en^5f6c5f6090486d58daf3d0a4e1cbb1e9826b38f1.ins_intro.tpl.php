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
  'variables' => 
  array (
    'LNG' => 0,
    'Selector' => 0,
    'lang' => 0,
    'canUpgrade' => 0,
  ),
  'has_nocache_code' => true,
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_52680b8559ad29_92856977',
  'cache_lifetime' => 3600,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52680b8559ad29_92856977')) {function content_52680b8559ad29_92856977($_smarty_tpl) {?><!DOCTYPE html>

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
<body id="stepintro">
<div id="tooltip" class="tip"></div>
<div><p>&nbsp;</p></div>
<table width="960">
<tr>
	<th colspan="3">Installation</th>
</tr><tr>
	<td colspan="2">
		<div id="lang" align="right">Language:&nbsp;<select id="lang" name="lang" onchange="document.location = '?lang='+$(this).val();"><option value="de">Deutsch</option>
<option value="en" selected="selected">English</option>
<option value="es">Spanish</option>
<option value="pl">Polish</option>
<option value="pt">Português</option>
<option value="ru">Русский</option>
</select></div>
		<div id="main" align="left">
			<h2>Hello user of GALAXYZ!</h2>
			<p>The GALAXYZ is one of the best projects of OGame.<br>The GALAXYZ is the newest and most stable of XNova currently developed. GALAXYZ is remarkable for its ease of stability, flexibility, dynamism, quality and utilization. we always expect to be better than your expectations.<br><br>The installation system will guide you through the installation or upgrading from a previous version to the latest one. Each question, a problem, please dont hesitate to ask our development and support in case of doubt!<br><br>The GALAXYZ is an Open Source project, licensed under the GNU GPL v3. For this to be verified, please click the link above where it refers to "lincense"<br><br>Before the installation can be started a small test to see if your plan/domain has all the requirements to support the GALAXYZ</p>
		</div><br><a href="index.php?mode=install&step=1"><button style="cursor: pointer;">Continue</button></a>
	</td>
</tr>
</table>
</body>
</html><?php }} ?>