<?php /* Smarty version Smarty-3.1.19, created on 2014-10-02 20:22:28
         compiled from "templates/contact/index.html" */ ?>
<?php /*%%SmartyHeaderCode:86483465654293339b81848-59575697%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '049c4157e06002d3db88c0208cbd40a1691ad51f' => 
    array (
      0 => 'templates/contact/index.html',
      1 => 1412252545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86483465654293339b81848-59575697',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54293339bad634_51101474',
  'variables' => 
  array (
    'id' => 0,
    'id_msg' => 0,
    'name' => 0,
    'name_msg' => 0,
    'email' => 0,
    'email_msg' => 0,
    'tel' => 0,
    'address1' => 0,
    'address2' => 0,
    'message_msg' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54293339bad634_51101474')) {function content_54293339bad634_51101474($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<link rel="shortcut icon" href="../img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="../css/reset.css">
<link rel="stylesheet" media="all" href="../css/common.css">
<link rel="stylesheet" media="all" href="../css/contact.css">
<!--[if lt IE 9]>
  <script src="../js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="../js/jquery-2.0.3.min.js"></script>
<![endif]-->
<script src="../js/modernizr.custom.min.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/jquery.common.js"></script>
<script src="../js/jquery.contact.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body onload="initialize()">
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- ●main contents START● -->
<div id="area_main">
  <div class="area_contact">
    <div class="ico_triangle"></div>
    <div class="tit_contact">
      Contact us
    </div>
    <br class="clearfloat">
  </div>

  <!-- 詳細検索 srh下のindex.htmlと纏める -->
  <div id="detail">
      <div>
        <table class="tel_table">
          <tr>
            <td class="area_contact_tel1">
              <span class="gold">Call, fax or email us<br>
              We’re happy to hear from you.</span><br><br>

              <span class="big">Real estate investment JAPAN, Singapore Headquarters</span><br>
              <span class="green">Tel:</span> +65 XXXX XXXX<br>
              <span class="green">Fax:</span> +65 XXXX XXXX<br>
              <span class="green">Email:</span> <a href="mailto:XXXX@XXXX.jp">XXXX@XXXX.jp</a><br>
              <span class="green">Office Hours:</span> 10:00 AM - 19:00 PM PST<br>
              <span class="green">Closed:</span> Wednesday<br><br>

              <span class="big">Real estate investment JAPAN, Japan Headquarters</span><br>
              <span class="green">Tel:</span> +65 XXXX XXXX<br>
              <span class="green">Fax:</span> +65 XXXX XXXX<br>
              <span class="green">Email:</span> <a href="mailto:XXXX@XXXX.jp">info@concierent.jp</a><br>
              <span class="green">Office Hours:</span> 10:00 AM - 19:00 PM PST
              <span class="green">Closed:</span> Wednesday<br>
            </td>
          </tr>
        </table>

        <form name="form1" action="contact.php" method="post">
        <table class="mail_table">
        <tr>
            <td class="area_contact_list1">Property ID</td>
            <td class="area_contact_list2">
              <input type="text" name="id" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" size="30" maxlength="30" class="area_contact_list_text1"><br>
              <?php if ($_smarty_tpl->tpl_vars['id_msg']->value!='') {?><font color="#d80000"><?php echo $_smarty_tpl->tpl_vars['id_msg']->value;?>
</font><?php }?><br>
              <span class="size13 gold">This is the unique property number which is written on the detail pages. Please fill in the property ID if you have any questions on specific properties.</span>
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Name <span class="need">*</span></td>
            <td class="area_contact_list2">
              <input type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" size="50" maxlength="50" class="area_contact_list_text2"><br>
              <?php if ($_smarty_tpl->tpl_vars['name_msg']->value!='') {?><font color="#d80000"><?php echo $_smarty_tpl->tpl_vars['name_msg']->value;?>
</font><?php }?>
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Email <span class="need">*</span></td>
            <td class="area_contact_list2">
              <input type="text" name="email" value="<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
" size="50" maxlength="50" class="area_contact_list_text3"><br>
              <?php if ($_smarty_tpl->tpl_vars['email_msg']->value!='') {?><font color="#d80000"><?php echo $_smarty_tpl->tpl_vars['email_msg']->value;?>
</font><?php }?><br>
              <span class="size13 gold">If you're using a Yahoo!, Gmail, or another free-service, our emails may be moved to trash bin or deleted. Please confirm your email settings.</span>
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Tel</td>
            <td class="area_contact_list2">
              <input type="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['tel']->value;?>
" size="50" maxlength="50" class="area_contact_list_text3">
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Preferred method of contact</td>
            <td class="area_contact_list2">
              <label class="radio_label_default1"><input type="radio" name="contact" value="0" class="radio_input">No preference</label>
              <label class="radio_label1"><input type="radio" name="contact" value="1" class="radio_input">Tel</label>
              <label class="radio_label1"><input type="radio" name="contact" value="2" class="radio_input">Email</label>
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Address</td>
            <td class="area_contact_list2">
              <input type="text" name="address1" value="<?php echo $_smarty_tpl->tpl_vars['address1']->value;?>
" size="50" maxlength="50" class="area_contact_list_text3"><br>
              <input type="text" name="address2" value="<?php echo $_smarty_tpl->tpl_vars['address2']->value;?>
" size="50" maxlength="50" class="area_contact_list_text4">
            </td>
          </tr>
          <tr>
            <td class="area_contact_list1">Message <span class="need">*</span></td>
            <td class="area_contact_list2">
              <textarea name="message" value="<?php echo $_smarty_tpl->tpl_vars['message_msg']->value;?>
" class="area_contact_list_textarea"></textarea><br>
              <?php if ($_smarty_tpl->tpl_vars['message_msg']->value!='') {?><font color="#d80000"><?php echo $_smarty_tpl->tpl_vars['message_msg']->value;?>
</font><?php }?>
            </td>
          </tr>
          <tr>
            <td colspan="2"><p class="red">※Fields marked with an asterisk * are required</p></td>
          </tr>
          <tr>
            <td colspan="2">
              <p class="btn_contact_next"><a href="send.php">Send</a></p>
            </td>
          </tr>
        </table>
        </form>
        <div class="clearfloat"></div>
      </div>
    </div>



</div>
<!-- ●main contents END● -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
