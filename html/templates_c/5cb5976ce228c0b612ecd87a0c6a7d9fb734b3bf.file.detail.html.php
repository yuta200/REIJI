<?php /* Smarty version Smarty-3.1.19, created on 2014-09-30 21:00:19
         compiled from "templates/list/detail.html" */ ?>
<?php /*%%SmartyHeaderCode:35609280454296a26e9d968-80546921%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5cb5976ce228c0b612ecd87a0c6a7d9fb734b3bf' => 
    array (
      0 => 'templates/list/detail.html',
      1 => 1411992451,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35609280454296a26e9d968-80546921',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54296a270a70f1_72151353',
  'variables' => 
  array (
    'property' => 0,
    'price_sgd' => 0,
    'annual_income_sgd' => 0,
    'monthly_income_sgd' => 0,
    'management_fee_sgd' => 0,
    'maintenance_fee_sgd' => 0,
    'psf' => 0,
    'psf_sgd' => 0,
    'built_year' => 0,
    'img' => 0,
    'img0' => 0,
    'distinction_id' => 0,
    'property_flg' => 0,
    'address' => 0,
    'access' => 0,
    'price' => 0,
    'yield' => 0,
    'built_date' => 0,
    'building_structure_flg' => 0,
    'use_districts' => 0,
    'building_to_land_ratio' => 0,
    'floor_area_ratio' => 0,
    'rank' => 0,
    'total_units' => 0,
    'img1' => 0,
    'img2' => 0,
    'img3' => 0,
    'img4' => 0,
    'img5' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54296a270a70f1_72151353')) {function content_54296a270a70f1_72151353($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<link rel="shortcut icon" href="../img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="../css/reset.css">
<link rel="stylesheet" media="all" href="../css/common.css">
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
<script src="../js/jquery.list.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>


<!-- ●main contents START● -->
<div id="area_main">
  <div class="area_srh_detail">
    <div class="ico_triangle"></div>
    <div class="tit_srh_detail">
      Details
    </div>
    <br class="clearfloat">
  </div>

  <div id="property_detail">
    <table class="property_detail">
      <tr>
        <td class="property_detail_td1" colspan="2">Investment condominiums
        <!--【TODO】管理モードでアクセスした場合のみ物件種別IDを閲覧可能にする -->
        </td>
        <td class="property_detail_td1" colspan="2"></td>
      </tr>
      <tr>
        <td class="property_detail_td2">Property ID</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['id'];?>
</td>
        <td class="property_detail_td2">Gross Yield</td>
        <td class="property_detail_td3"><span class="yield big"><?php echo $_smarty_tpl->tpl_vars['property']->value['yield'];?>
</span> %</td>
      </tr>
      <tr>
        <td class="property_detail_td2">Price</td>
        <td class="property_detail_td3">
          <span class="price big">¥<?php echo $_smarty_tpl->tpl_vars['property']->value['price'];?>
</span> 
          <span class="big gray">( S$<?php echo $_smarty_tpl->tpl_vars['price_sgd']->value;?>
))</span>
          <!-- ドル換算の算出方法はGoolgeのAPIを使用する -->
        </td>
        <td class="property_detail_td2">Annual income/<br>Monthly income at full occupancy</td>
        <td class="property_detail_td3">
          ¥<?php echo $_smarty_tpl->tpl_vars['property']->value['annual_income'];?>
<span class="gray"> ( S$ <?php echo $_smarty_tpl->tpl_vars['annual_income_sgd']->value;?>
 )</span><br>
          ¥<?php echo $_smarty_tpl->tpl_vars['property']->value['monthly_income'];?>
<span class="gray"> ( S$ <?php echo $_smarty_tpl->tpl_vars['monthly_income_sgd']->value;?>
 )</span>
        </td>
      </tr>
      <tr>
        <td class="property_detail_td2">管理費<br>修繕積立</td>
        <td class="property_detail_td3">
          ¥<?php echo $_smarty_tpl->tpl_vars['property']->value['management_fee'];?>
<span class="gray"> ( S$ <?php echo $_smarty_tpl->tpl_vars['management_fee_sgd']->value;?>
 )</span><br>
          ¥<?php echo $_smarty_tpl->tpl_vars['property']->value['maintenance_fee'];?>
<span class="gray"> ( S$ ¥<?php echo $_smarty_tpl->tpl_vars['maintenance_fee_sgd']->value;?>
 )</span>
        </td>
        <td class="property_detail_td2">Exclusive area</td>
        <td class="property_detail_td3">\<?php echo $_smarty_tpl->tpl_vars['psf']->value;?>
(S$ \<?php echo $_smarty_tpl->tpl_vars['psf_sgd']->value;?>
) psf <br> <?php echo $_smarty_tpl->tpl_vars['property']->value['footprint_sqft'];?>
 sqft (<?php echo $_smarty_tpl->tpl_vars['property']->value['footprint_sqm'];?>
 sqm)<br>(バルコニー <?php echo $_smarty_tpl->tpl_vars['property']->value['balcony_sqft'];?>
sqft)</td>
      </tr>
      <tr>
        <td class="property_detail_td2">Built</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['built_date'];?>
 （in <?php echo $_smarty_tpl->tpl_vars['built_year']->value;?>
）</td>
        <td class="property_detail_td2">Structure</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['building_structure_flg'];?>
</td>
      </tr>
      <tr>
        <td class="property_detail_td2">Nearest station</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['access'];?>
</td>
        <td class="property_detail_td2">階数 / 総戸数</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['rank'];?>
階建 / 総戸数<?php echo $_smarty_tpl->tpl_vars['property']->value['total_units'];?>
</td>
      </tr>
      <tr>
        <td class="property_detail_td2">Location</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['address'];?>
</td>
        <td class="property_detail_td2">Layout/Floor plan</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['plan'];?>
</td>
      </tr>
      <tr>
        <td class="property_detail_td2">Actual use of land</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['current_state_flg'];?>
</td>
        <td class="property_detail_td2">Contract types</td>
        <td class="property_detail_td3"><?php echo $_smarty_tpl->tpl_vars['property']->value['management_flg'];?>
</td>
      </tr>
      <tr>
        <td class="property_detail_td2_last">Handover date</td>
        <td class="property_detail_td3_last">相談</td>
        <td class="property_detail_td2_last">Contact</td>
        <td class="property_detail_td3_last"><a href="contact.php">この物件のお問い合わせはこちらへ</a></td>
      </tr>
    </table>

    <!-- 物件画像 -->
    <table>
      <tr>
        <td class="property_detail_img_td1">Pictures/Images of buildings&nbsp;&nbsp;&nbsp;&nbsp;<span class="maisu"><?php echo count($_smarty_tpl->tpl_vars['img']->value);?>
copies</span></td>
      </tr>
      <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 1;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? count($_smarty_tpl->tpl_vars['img']->value)-1+1 - (0) : 0-(count($_smarty_tpl->tpl_vars['img']->value)-1)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <tr>
          <td class="property_detail_img_td2">
            <img src="$img[i]">
          </td>
        </tr>
      <?php }} ?>      
    </table>

    <p class="btn_contact"><a href="contact.php">Contact</a></p>
  </div>

  <div class="area_srh_detail">
    <div class="ico_triangle"></div>
    <div class="tit_srh_detail">
      この物件と似た条件の物件
    </div>
    <br class="clearfloat">
  </div>

  <div id="area_list2">
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
      <tr>
        <td class="area_list_td1"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img0']->value);?>
</span></td>
        <td class="area_list_td1 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[0];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img0']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td1">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[0];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[0];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[0];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[0];?>
</span></a>
        </td>
        <td class="area_list_td1">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[0];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[0];?>
％
        </td>
        <td class="area_list_td1">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[0];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[0];?>

        </td>
        <td class="area_list_td1">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[0];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[0];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[0];?>
 ％
        </td>
        <td class="area_list_td1_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[0];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[0];?>
戸
        </td>
      </tr>
      <tr>
        <td class="area_list_td2"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img1']->value);?>
</span></td>
        <td class="area_list_td2 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[1];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img1']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td2">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[1];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[1];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[1];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[1];?>
</span></a>
        </td>
        <td class="area_list_td2">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[1];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[1];?>
％
        </td>
        <td class="area_list_td2">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[1];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[1];?>

        </td>
        <td class="area_list_td2">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[1];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[1];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[1];?>
 ％
        </td>
        <td class="area_list_td2_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[1];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[1];?>
戸
        </td>
      </tr>
      <tr>
        <td class="area_list_td1"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img2']->value);?>
</span></td>
        <td class="area_list_td1 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[2];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img2']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td1">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[2];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[2];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[2];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[2];?>
</span></a>
        </td>
        <td class="area_list_td1">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[2];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[2];?>
％
        </td>
        <td class="area_list_td1">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[2];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[2];?>

        </td>
        <td class="area_list_td1">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[2];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[2];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[1];?>
 ％
        </td>
        <td class="area_list_td1_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[2];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[2];?>
戸
        </td>
      </tr>
      <tr>
        <td class="area_list_td2"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img3']->value);?>
</span></td>
        <td class="area_list_td2 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[3];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img3']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td2">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[3];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[3];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[3];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[3];?>
</span></a>
        </td>
        <td class="area_list_td2">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[3];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[3];?>
％
        </td>
        <td class="area_list_td2">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[3];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[3];?>

        </td>
        <td class="area_list_td2">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[3];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[3];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[3];?>
 ％
        </td>
        <td class="area_list_td2_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[3];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[3];?>
戸
        </td>
      </tr>
      <tr>
        <td class="area_list_td1"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img4']->value);?>
</span></td>
        <td class="area_list_td1 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[4];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img4']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td1">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[4];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[4];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[4];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[4];?>
</span></a>
        </td>
        <td class="area_list_td1">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[4];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[4];?>
％
        </td>
        <td class="area_list_td1">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[4];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[4];?>

        </td>
        <td class="area_list_td1">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[4];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[4];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[4];?>
 ％
        </td>
        <td class="area_list_td1_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[4];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[4];?>
戸
        </td>
      </tr>
      <tr>
        <td class="area_list_td2"><span class="size18"><?php echo count($_smarty_tpl->tpl_vars['img5']->value);?>
</span></td>
        <td class="area_list_td2 area_list_td_img">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[5];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['img5']->value[0];?>
" alt="jpfs"></a>
        </td>
        <td class="area_list_td2">
          <a href="detail.php?id=<?php echo $_smarty_tpl->tpl_vars['distinction_id']->value[5];?>
"><span class="size15"><?php echo $_smarty_tpl->tpl_vars['property_flg']->value[5];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['address']->value[5];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['access']->value[5];?>
</span></a>
        </td>
        <td class="area_list_td2">
          <span class="big red size18">\<?php echo $_smarty_tpl->tpl_vars['price']->value[5];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['yield']->value[5];?>
％
        </td>
        <td class="area_list_td2">
          <span class="big"><?php echo $_smarty_tpl->tpl_vars['built_date']->value[5];?>
</span><br>
          <?php echo $_smarty_tpl->tpl_vars['building_structure_flg']->value[5];?>

        </td>
        <td class="area_list_td2">
          <?php echo $_smarty_tpl->tpl_vars['use_districts']->value[5];?>
<br>
          <?php echo $_smarty_tpl->tpl_vars['building_to_land_ratio']->value[5];?>
 ％ / <?php echo $_smarty_tpl->tpl_vars['floor_area_ratio']->value[5];?>
 ％
        </td>
        <td class="area_list_td2_last">
          <?php echo $_smarty_tpl->tpl_vars['rank']->value[5];?>
階建<br>
          <?php echo $_smarty_tpl->tpl_vars['total_units']->value[5];?>
戸
        </td>
      </tr>
    </table>
  </div>

</div>
<!-- ●main contents END● -->

<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
