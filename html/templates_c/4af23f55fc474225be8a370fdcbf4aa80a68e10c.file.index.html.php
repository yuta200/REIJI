<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 20:07:32
         compiled from "templates/list/index.html" */ ?>
<?php /*%%SmartyHeaderCode:177893189554294b4c552538-24036613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4af23f55fc474225be8a370fdcbf4aa80a68e10c' => 
    array (
      0 => 'templates/list/index.html',
      1 => 1411992451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '177893189554294b4c552538-24036613',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54294b4c58f5f4_05008116',
  'variables' => 
  array (
    'start_num' => 0,
    'end_num' => 0,
    'total_count' => 0,
    'hidden' => 0,
    'value' => 0,
    'list' => 0,
    'foo' => 0,
    'pageNavi' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54294b4c58f5f4_05008116')) {function content_54294b4c58f5f4_05008116($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<link rel="shortcut icon" href="../img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="../css/reset.css">
<link rel="stylesheet" media="all" href="../css/common.css">
<link rel="stylesheet" media="all" href="../css/srh.css">
<link rel="stylesheet" media="all" href="../css/list.css">
<!--[if lt IE 9]>
  <script src="../js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="../js/jquery-2.0.3.min.js"></script>
<![endif]-->
<script src="../js/modernizr.custom.min.js"></script>
<script src="../js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="../js/jquery.common.js"></script>
<script src="../js/jquery.srh.js"></script>
<script src="../js/jquery.list.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
<meta http-equiv="Content-Script-Type" content="text/javascript">
<script language="JavaScript" type="text/javascript">

<!--
//＜クリックした時に実行される関数＞
//*** キーワード検索
function search_key(form){
document.form_key.key.value =form1.key.value;
document.form_key.submit();
}
//*** 路線検索
function search_railway(form){
var sr = form1.sr.value;
document.form_railway.sr.value = form1.sr.value;
document.form_railway.sl.value = form1["sl" + sr.toString()].value;
document.form_railway.submit();
}
//-->

</script>
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- ●main contents START● -->
<div id="area_main">
  <form method="get" action="list.php" id="test" name="test">
  
  <div id="area_srh_rslt">
    <p class="tit_srh_rslt1">
      <!-- 検索結果が1件の場合は "result","property"単数系を使用する。-->
      <span class="big orange size25"><?php echo $_smarty_tpl->tpl_vars['start_num']->value;?>
</span> - <span class="big orange size25"><?php echo $_smarty_tpl->tpl_vars['end_num']->value;?>
</span> of <span class="big orange size25"><?php echo $_smarty_tpl->tpl_vars['total_count']->value;?>
</span> results for properties
    </p>
    <p class="tit_srh_rslt2">
      Sort By
      <select name="sort" class="tit_srh_rslt2_select" onchange="submit(this.form)">
      <option value="1">Price (high to low)</option>
      <option value="2">Price (low to high)</option>
      <option value="3">Yield (high to low)</option>
      <option value="4">Yield (low to high)</option>
      <option value="5">Exclusive area (high to low)</option>
      <option value="6">Exclusive area (low to high)</option>
      <option value="7">総戸数 (high to low)</option>
      <option value="8">総戸数 (low to high)</option>
      <option value="9">Number of images (high to low)</option>
      <option value="10">Number of images (low to high)</option>
      <option value="11">Built (new to old)</option>
      <option value="12">Built (old to new)</option>
      </select>
    </p>
    <div class="clearfloat"></div>
  </div>
  <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['hidden']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['value']->value;?>

  <?php } ?>
  </form>

  <div id="area_list">
    <!-- 物件種別によって項目が変わるので、その都度変更する -->
    <table class="area_list_table">
      <tr>
        <td class="area_list_td">Number of images</td>
        <td class="area_list_td">Image</td>
        <td class="area_list_td">
          Category<br>
          Location / Nearest station
        </td>
        <td class="area_list_td">
          Price<br>
          Gross Yield
        </td>
        <td class="area_list_td">
          Built<br>
          Structure
        </td>
        <td class="area_list_td">
          Use district<br>
          Building coverage ratio/Floor space index
        </td>
        <td class="area_list_td">
          階数<br>
          総戸数
        </td>
      </tr>
      <?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['list']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value) {
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['foo']->value;?>

      <?php } ?>
    </table>
  </div>
  <div class="area_pager_next">
    <?php echo $_smarty_tpl->tpl_vars['pageNavi']->value;?>

  </div>

  <div class="area_srh_detail">
    <div class="ico_triangle"></div>
    <div class="tit_srh_detail">
      Advanced Search
    </div>
    <br class="clearfloat">
  </div>

  <!-- 詳細検索 srh下のindex.htmlと纏める -->
  <?php echo $_smarty_tpl->getSubTemplate ('search_detail.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

  </div>
</div>
<!-- ●main contents END● -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
