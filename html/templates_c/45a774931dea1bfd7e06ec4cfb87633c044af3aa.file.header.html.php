<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 15:39:22
         compiled from "templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:992680620542932ac0f6f90-41132718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '45a774931dea1bfd7e06ec4cfb87633c044af3aa' => 
    array (
      0 => 'templates/header.html',
      1 => 1412149158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '992680620542932ac0f6f90-41132718',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542932ac0faac3_05765438',
  'variables' => 
  array (
    'src_value' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542932ac0faac3_05765438')) {function content_542932ac0faac3_05765438($_smarty_tpl) {?><!-- ●header START● -->
<div>
  <!-- ●logo+search START● -->
  <div id="area_face">
    <!-- logo -->
    <div id="area_logo">
      <a href="/">
        <img src="/img/site/common/logo_reij.jpg" alt="Real estate investment JAPAN">
      </a>
    </div>

    <!-- search form -->
    <div class="srh_form">
      <!-- pro -->
      <div class="okiniiri">
        <a href="list.php?key=Shinjuku&src=key">Shinjyuku</a>
        <a href="list.php?key=Ueno&src=key">Ueno</a>
        <a href="list.php?key=Akasaka&src=key">Akasaka</a>
        <a href="search.php">...Advanced search</a>
      </div>
      <div class="form_group">
        <form id="search_head" name="search_head" action="list.php" method="get">
          <input type="text" class="form_control srh_field" name="key" placeholder="Enter a land name" id="src_name" value="<?php echo $_smarty_tpl->tpl_vars['src_value']->value['key'];?>
"/>
          <p class="btn_srh">
            <a href="javascript:void(0)" onclick="document.search_head.submit();return false;">Search</a>
          </p>
          <input type=hidden name="src" value="key">
        </form>
      </div>
      <div class="clearfloat"></div>
      <label class="ico_loupe" for="srh_name"></label>
    </div>

    <div class="contact_face">
      <p class="tel">03-XXXX-XXXX</p>
      <p class="btn_header_contact"><a href="contact.php">mailでのお問い合わせ</a></p>
      <label class="ico_tel"></label>
      <label class="ico_mail"></label>
    </div>
    <div class="clearfloat"></div>
  </div>
  <!-- ●logo+search END● -->

  <!-- ●global navi START● -->
  <div id="area_global_navi">
    <ul>
      <li class="layout_global_navi_li1"><a href="#">blog</a></li>
      <li class="layout_global_navi_li2"><a href="column/">column</a></li>
      <li class="layout_global_navi_li3"><a href="#">news</a></li>
      <li class="layout_global_navi_li4"><a href="#">info</a></li>
      <li class="layout_global_navi_li5"><a href="contact.php">contact</a></li>
    </ul>
    <div class="clearfloat"></div>
  </div>
  <!-- ●global navi END● -->

  <!-- ●breadcrumbs START -->
  <div id="area_pan">
    <div class="layout_pan">
      <a href="/">Home</a> > <a href="/">投資用マンション</a> > ~7 million yen
    </div>
  </div>
  <!-- ●breadcrumbs END -->
</div>
<!-- ●header END● --><?php }} ?>
