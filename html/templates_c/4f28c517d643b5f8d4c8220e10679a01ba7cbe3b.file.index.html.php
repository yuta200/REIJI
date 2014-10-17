<?php /* Smarty version Smarty-3.1.19, created on 2014-10-01 15:38:51
         compiled from "templates/index.html" */ ?>
<?php /*%%SmartyHeaderCode:1454833058542932ac07f922-59542222%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f28c517d643b5f8d4c8220e10679a01ba7cbe3b' => 
    array (
      0 => 'templates/index.html',
      1 => 1412149129,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1454833058542932ac07f922-59542222',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_542932ac0f4278_34780454',
  'variables' => 
  array (
    'investment' => 0,
    'selling' => 0,
    'oneapart' => 0,
    'onemantion' => 0,
    'onebuilding' => 0,
    'join' => 0,
    'rent' => 0,
    'warehouse' => 0,
    'hotel' => 0,
    'land' => 0,
    'c_all_count' => 0,
    'new_property' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_542932ac0f4278_34780454')) {function content_542932ac0f4278_34780454($_smarty_tpl) {?><!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8">
<title>JPFS | Japan property for sale</title>
<meta name="keywords" content="real estate">
<meta name="description" content="real estate">
<link rel="shortcut icon" href="img/site/common/favicon.ico">
<link rel="stylesheet" media="all" href="css/reset.css">
<link rel="stylesheet" media="all" href="css/common.css">
<link rel="stylesheet" media="all" href="css/top.css">
<!--[if lt IE 9]>
  <script src="js/jquery-1.10.2.min.js"></script>
<![endif]-->
<!--[if gte IE 9]><!-->
  <script src="js/jquery-2.0.3.min.js"></script>
<![endif]-->
<script src="js/modernizr.custom.min.js"></script>
<script src="js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="js/jquery.common.js"></script>
<script src="js/jquery.top.js"></script>

<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
<![endif]-->
</head>

<body>
<?php echo $_smarty_tpl->getSubTemplate ('header.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<!-- ●main contents(left side navi+right contents) START● -->
<div id="area_main">
  <!-- ●left side navi START● -->
  <div id="area_sidenavi">
    <ul class="btn_sidenavi">
      <li class="btn_sidenavi_title">Income properties</li>
      <li class="btn_sidenavi_sub"><a href="list.php?src=main&pf2=on">Investment condominiums (<?php echo $_smarty_tpl->tpl_vars['investment']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf2=on&pr_h=7000000">- ¥6,999,999 (<?php echo $_smarty_tpl->tpl_vars['investment']->value['700u'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf2=on&pr_l=7000000&pr_h=9999999">¥7,000,000 - ¥9,999,999 (<?php echo $_smarty_tpl->tpl_vars['investment']->value['700o'];?>
)</a></li>
      <li class="btn_sidenavi_list_last"><a href="list.php?src=main&pf2=on&pr_l=10000000">¥10,000,000 - (<?php echo $_smarty_tpl->tpl_vars['investment']->value['1000o'];?>
)</a></li>
      <li class="btn_sidenavi_sub_dw"><a href="list.php?src=main&pf3=on">Stores and offices for sale (<?php echo $_smarty_tpl->tpl_vars['selling']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_sub"><a href="list.php?src=main&pf4=on">Condominiums for sale (<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['t'];?>
）</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf4=on&pr_h=29999999">- ¥29,999,999 (<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['3000u'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf4=on&$pr_l=30000000&pr_h=49999999">¥30,000,000 - ¥49,999,999 (<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['3000o'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf4=on&$pr_l=50000000&pr_h=79999999">¥50,000,000 - ¥79,999,999(<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['5000o'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf4=on&$pr_l=80000000&pr_h=100000000">¥80,000,000 - ¥100,000,000 (<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['8000o'];?>
)</a></li>
      <li class="btn_sidenavi_list_last"><a href="list.php?src=main&pf4=on&$pr_l=100000000">¥100,000,000 - (<?php echo $_smarty_tpl->tpl_vars['oneapart']->value['10000o'];?>
)</a></li>
      <li class="btn_sidenavi_sub"><a href="list.php?src=main&pf5=on">売りマンション (<?php echo $_smarty_tpl->tpl_vars['onemantion']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf5=on&pr_h=99999999">- ¥99,999,999 (<?php echo $_smarty_tpl->tpl_vars['onemantion']->value['10000u'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf5=on&pr_l=100000000&pr_h=199999999">¥100,000,000 - ¥199,999,999 (<?php echo $_smarty_tpl->tpl_vars['onemantion']->value['10000o'];?>
)</a></li>
      <li class="btn_sidenavi_list_last"><a href="list.php?src=main&pf5=on&pr_l=200000000">¥200,000,000 - (<?php echo $_smarty_tpl->tpl_vars['onemantion']->value['20000o'];?>
)</a></li>
      <li class="btn_sidenavi_sub"><a href="list.php?src=main&pf6=on">Buildings for sale (<?php echo $_smarty_tpl->tpl_vars['onebuilding']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf6=on&pr_h=99999999">- ¥99,999,999 (<?php echo $_smarty_tpl->tpl_vars['onebuilding']->value['10000u'];?>
)</a></li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&pf6=on&pr_l=100000000&pr_h=299999999">¥100,000,000 - ¥299,999,999 (<?php echo $_smarty_tpl->tpl_vars['onebuilding']->value['10000o'];?>
)</a></li>
      <li class="btn_sidenavi_list_last"><a href="list.php?src=main&pf6=on&pr_l=300000000">300,000,000 - (<?php echo $_smarty_tpl->tpl_vars['onebuilding']->value['30000o'];?>
)</a></li>
      <li class="btn_sidenavi_sub_dw"><a href="list.php?src=main&pf7=on">Houses with rooms for rent (<?php echo $_smarty_tpl->tpl_vars['join']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_sub_dw"><a href="list.php?src=main&pf8=on">Houses for rent (<?php echo $_smarty_tpl->tpl_vars['rent']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_sub_dw"><a href="list.php?src=main&pf9=on">Warehouses,factories and others (<?php echo $_smarty_tpl->tpl_vars['warehouse']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_sub_dw"><a href="">Hotels for sale (<?php echo $_smarty_tpl->tpl_vars['hotel']->value['t'];?>
)</a></li>
      <li class="btn_sidenavi_sub"><a href="list.php?src=main&pf11=on">Lands (<?php echo $_smarty_tpl->tpl_vars['land']->value['t'];?>
)</a></li>
    </ul>

    <ul class="btn_recommended">
      <li class="btn_recommended_title">Recommended investment properties</li>
      <li class="btn_sidenavi_list"><a href="list.php?src=main&yld=15">Over 15% rate of return（<?php echo $_smarty_tpl->tpl_vars['c_all_count']->value['yield_15over_num'];?>
）</a></li>
      <li class="btn_sidenavi_list_last"><a href="list.php?src=main&one=on">Studio（<?php echo $_smarty_tpl->tpl_vars['c_all_count']->value['one_room_num'];?>
）</a></li>
    </ul>
  </div>

  <!-- ●right contents navi START● -->
  <div id="area_contents">
    <div class="featurec_properties">
      <div class="tit_contents">
        <div class="ico_triangle"></div>
        <h2>
          Hot/New/Best income properties
        </h2>
        <p class="link_property">
          <a href="/">A list of income properties <span class="big size18"><?php echo $_smarty_tpl->tpl_vars['c_all_count']->value['all_property_num'];?>
</span> 件</a>
        </p>
        <br class="clearfloat">
      </div>
      
      <div class="featurec_properties_list">
        <table>
          <tr>
            <td><a href = "/"><img src="/img/site/top/test1.jpg" width="160" height="120" alt="XXXX" class="featurec_properties_lmg"></a></td>
            <td><a href = "/"><img src="/img/site/top/test2.jpg" width="160" height="120" alt="XXXX" class="featurec_properties_lmg"></a></td>
            <td><a href = "/"><img src="/img/site/top/test3.jpg" width="160" height="120" alt="XXXX" class="featurec_properties_lmg"></a></td>
            <td><a href = "/"><img src="/img/site/common/no_img_big.jpg" width="160" height="120" alt="XXXX" class="featurec_properties_lmg"></a></td>
          </tr>
          <tr>
            <td class="property_list"><a href="/"><span class="big red size18">3,485</span> 万円</a></td>
            <td class="property_list"><a href="/"><span class="big red size18">3,485</span> 万円</a></td>
            <td class="property_list"><a href="/"><span class="big red size18">3,485</span> 万円</a></td>
            <td class="property_list"><a href="/"><span class="big red size18">3,485</span> 万円</a></td>
          </tr>
          <tr>
            <td class="property_list"><a href="/"><span class="big blue size18">18.63</span> %</a></td>
            <td class="property_list"><a href="/"><span class="big blue size18">18.63</span> %</a></td>
            <td class="property_list"><a href="/"><span class="big blue size18">18.63</span> %</a></td>
            <td class="property_list"><a href="/"><span class="big blue size18">18.63</span> %</a></td>
          </tr>
          <tr>
            <td class="property_list_last"><a href="/">Akasaka Minato-ku</a></td>
            <td class="property_list_last"><a href="/">Akasaka Minato-ku</a></td>
            <td class="property_list_last"><a href="/">Akasaka Minato-ku</a></td>
            <td class="property_list_last"><a href="/">Akasaka Minato-ku</a></td>
          </tr>
        </table>
      </div>
    </div>

    <div class="new_properties">
      <div class="tit_contents2">
        <div class="ico_triangle"></div>
        <h2>
          Selected income properties
        </h2>
        <p class="link_property">
          <a href="/">A list of income properties <span class="big size18">2,399</span> 件</a>
        </p>
        <br class="clearfloat">
      </div>

      <div class="new_properties_list">
        <table  border="0"　class="new_properties_title">
          <tr>
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/common/no_img_thumnail.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18"><?php echo $_smarty_tpl->tpl_vars['new_property']->value[0][0];?>
</span> <span class="gray">万円</span></a></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18"><?php echo $_smarty_tpl->tpl_vars['new_property']->value[1][0];?>
</span> <span class="gray">%</span></a></td>
          </tr>
          <tr>
            <td class="new_properties_list_td1"><a href="/"><?php echo $_smarty_tpl->tpl_vars['new_property']->value[2][0];?>
</a></td>
            <td class="new_properties_list_td1"><a href="/"><?php echo $_smarty_tpl->tpl_vars['new_property']->value[3][0];?>
</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr class="new_properties_list_tr">
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test5.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr class="new_properties_list_tr">
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr>
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test6.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></a></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr>
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr class="new_properties_list_tr">
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test7.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr class="new_properties_list_tr">
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr>
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test5.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></a></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr>
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr class="new_properties_list_tr">
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test5.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr class="new_properties_list_tr">
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>

          <tr>
            <td rowspan="2" class="new_properties_list_td1"><a href="/"><img src="/img/site/top/test6.jpg" width="80" height="60" alt="XXXX"></a></td>
            <td class="new_properties_list_td2"><a href="/">2014 new apartment</a></td>
            <td class="new_properties_list_td3"><a href="/"><span class="big red size18">3,485</span> <span class="gray">万円</span></a></td>
            <td class="new_properties_list_td4"><a href="/"><span class="big blue size18">18.62</span> <span class="gray">%</span></a></td>
          </tr>
          <tr>
            <td class="new_properties_list_td1"><a href="/">JR Yamanote Line Shinjyuku St. walk 4min</a></td>
            <td class="new_properties_list_td1"><a href="/">Ota-ku, Tokyo</a></td>
            <td class="new_properties_list_td1"><a href="/" class="big">7/12 UP</a></td>
          </tr>
        </table>
      </div>
    </div>
  </div>
  <!-- ●right contents navi END● -->
  <br class="clearfloat">
</div>
<!-- ●main contents(left side navi+right contents) START● -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
