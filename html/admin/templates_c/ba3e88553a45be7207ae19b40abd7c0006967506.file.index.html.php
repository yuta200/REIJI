<?php /* Smarty version Smarty-3.1.19, created on 2014-08-17 15:50:35
         compiled from "../templates/admin/index.html" */ ?>
<?php /*%%SmartyHeaderCode:109356152153f05ecb65b5c3-37494875%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba3e88553a45be7207ae19b40abd7c0006967506' => 
    array (
      0 => '../templates/admin/index.html',
      1 => 1407092652,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109356152153f05ecb65b5c3-37494875',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_53f05ecb69d561_58213686',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53f05ecb69d561_58213686')) {function content_53f05ecb69d561_58213686($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<meta name="robots" content="noindex,noarchive">
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
      <a href=".">
        <img src="/img/site/common/logo_jpfs_admin.jpg" alt="jpfs">
      </a>
    </div>
  </div>
  <!-- ●logo+search END● -->
</div>
<!-- ●header END● -->

<!-- ●main contents(left side navi+right contents) START● -->
<div id="area_admin_main">
  <p class="tit_admin">admin page</p>
  <form action="cgi-bin/abc.cgi" method="post" class="form_class">
    Property ID search：
    <input type="text" name="srh_admin_id" placeholder="Enter Property ID" />
    <input type="submit" value="search">
  </form>

  <form action="upload.php" method="post" enctype="multipart/form-data">
    CSV UPLOAD：
    <input type="file" name="upfile" />
    <input type="submit" value="UPLOAD" />
  </form>
</div>
<!-- ●main contents(left side navi+right contents) START● -->
</body>
</html>
<?php }} ?>
