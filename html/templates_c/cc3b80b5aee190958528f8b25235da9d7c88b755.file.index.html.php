<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 22:09:03
         compiled from "../templates/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:30005138654294e57343bc9-19261571%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cc3b80b5aee190958528f8b25235da9d7c88b755' => 
    array (
      0 => '../templates/admin/index.html',
      1 => 1411999737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30005138654294e57343bc9-19261571',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54294e5737b195_31879503',
  'variables' => 
  array (
    'err_msg_property_id' => 0,
    'srh_property_id' => 0,
    'err_msg_distinction_id' => 0,
    'srh_distinction_id' => 0,
    'upload_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54294e5737b195_31879503')) {function content_54294e5737b195_31879503($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<meta name="robots" content="noindex,follow">
<link rel="shortcut icon" href="../img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="../css/reset.css">
<link rel="stylesheet" media="all" href="../css/common.css">
<link rel="stylesheet" media="all" href="../css/admin.css">
<!--[if lt IE 9]>
  <script src="../js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="../js/jquery-2.0.3.min.js"></script>
<![endif]-->
<script src="../js/modernizr.custom.min.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/jquery.common.js"></script>
<script src="../js/jquery.admin.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<!-- ●header START● -->
<div>
  <!-- ●logo+search START● -->
  <div id="area_face">
    <!-- logo -->
    <div id="area_logo">
      <a href="/">
        <img src="/img/site/common/logo_reij_admin.jpg" alt="jpfs">
      </a>
    </div>
  </div>
  <!-- ●logo+search END● -->
</div>
<!-- ●header END● -->

<!-- ●main contents(left side navi+right contents) START● -->
<div id="area_admin_main">
  <p class="tit_admin">admin page</p>
  <?php if (isset($_smarty_tpl->tpl_vars['err_msg_property_id']->value)) {?><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_msg_property_id']->value;?>
</span><?php }?> 
  <form action="." method="post" class="form_class">
    物件種別ID search：
    <input type="text" name="srh_property_id" size="20" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['srh_property_id']->value;?>
" placeholder="Enter Distinction ID" />
    <input type="hidden" name="srh_flg" value="1">
    <input type="submit" value="search"><br>
    <span class="orange size13">※数字入力のみ</span>
  </form>
  <hr>

  <?php if (isset($_smarty_tpl->tpl_vars['err_msg_distinction_id']->value)) {?><span class="red"><?php echo $_smarty_tpl->tpl_vars['err_msg_distinction_id']->value;?>
</span><?php }?> 
  <form action="." method="post" class="form_class">
    K種別ID search：
    <input type="text" name="srh_distinction_id" size="20" maxlength="20" value="<?php echo $_smarty_tpl->tpl_vars['srh_distinction_id']->value;?>
" placeholder="Enter Distinction ID" />
    <input type="hidden" name="srh_flg" value="2">
    <input type="submit" value="search"><br>
    <span class="orange size13">※英数字入力のみ</span>
  </form>
  <hr>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    CSV UPLOAD：
    <input type="file" name="upfile" />
    <input type="submit" value="UPLOAD" />
  </form>
  <?php echo $_smarty_tpl->tpl_vars['upload_msg']->value;?>

</div>
<!-- ●main contents(left side navi+right contents) START● -->
</body>
</html>
<?php }} ?>
