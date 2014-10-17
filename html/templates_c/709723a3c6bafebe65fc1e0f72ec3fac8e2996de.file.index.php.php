<?php /* Smarty version Smarty-3.1.19, created on 2014-09-29 20:51:30
         compiled from "templates/srh/index.php" */ ?>
<?php /*%%SmartyHeaderCode:196653009954294b49923a53-73229119%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '709723a3c6bafebe65fc1e0f72ec3fac8e2996de' => 
    array (
      0 => 'templates/srh/index.php',
      1 => 1411992452,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196653009954294b49923a53-73229119',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_54294b49a10472_60815196',
  'variables' => 
  array (
    'railway_id' => 0,
    'city_id' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54294b49a10472_60815196')) {function content_54294b49a10472_60815196($_smarty_tpl) {?><!DOCTYPE html>
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
  <ul id="tab">
    <li class="selected"><a href="#tab1">Advanced search</a></li>
    <li><a href="#tab2">Search by train line</a></li>
    <li><a href="#tab3">Search by city</a></li>
  </ul>
    <?php echo $_smarty_tpl->getSubTemplate ('search_detail.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

    <div id="tab2" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>JR</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yamanote">Yamanote Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[1];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keihin-Tōhoku">Keihin-Tōhoku Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[2];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chuō">Chuō Line(Tōkyō-Nishiogikubo)</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[3];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Sōbu">Sōbu Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[4];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Saikyō">Saikyō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[5];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Jōban">Jōban Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[6];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">Tōkaidō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[7];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yokosuka">Yokosuka Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[8];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiyō">Keiyō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[9];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Utsunomiya">Utsunomiya Line(Tōhoku Line)</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[10];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōkaidō">Tōkaidō Shinkansen</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[11];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōhoku">Tōhoku Sinkansen</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[12];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ChuōRapid">Chuō Line(Rapid)</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[13];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Shinjuku">Shonan-Shinjuku Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[14];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōkyō Metro</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ginza">Ginza Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[15];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Marunouchi">Marunouchi Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[16];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hibiya">Hibiya Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[17];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tozai">Tozai Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[18];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Chiyoda">Chiyoda Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[19];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">Yūrakuchō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[20];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Hanzōmon">Hanzōmon Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[21];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Namboku">Namboku Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[22];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Fukutoshin">Fukutoshin Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[23];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Toei Subway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Asakusa">Asakusa Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[24];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Mita">Mita Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[25];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=ToeiShinjuku">Shinjuku Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[26];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōedo">Ōedo Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[27];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TodenArakawa">Toden Arakawa Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[28];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Nippori-Toneri">Nippori-Toneri Liner</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[29];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Seibu Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IkebukuroToshima">Ikebukuro Line・Toshima Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[30];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yūrakuchō">Yūrakuchō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[31];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SeibuShinjuku">Shinjuku Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[32];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keiō Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Keiō">Keiō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[33];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Inogashira">Inogashira Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[34];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=New">New Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[35];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōkyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōyoko">Tōyoko Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[36];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tamagawa">Tamagawa Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[37];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ōimachi">Ōimachi Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[38];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Denentoshi">Denentoshi Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[39];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Ikegami">Ikegami Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[40];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Setagaya">Setagaya Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[41];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Meguro">Meguro Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[42];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Tōbu Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Tōjō">Tōjō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[43];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=IsesakiDaishi">Isesaki Line・Daishi Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[44];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kameido">Kameido Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[45];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Odakyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Odakyū">Odakyū Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[46];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keikyū Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeikyūMain">Keikyū Main Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[47];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Airport">Airport Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[48];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Keisei Railway</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=KeiseiMain">Keisei main Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[49];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Oshiage">Oshiage Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[50];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Kanamachi">Kanamachi Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[51];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=NaritaSkyAccess">Narita Sky Access Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[52];?>
）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Bus</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="/">Bus</a>（3）</td>
          </tr>
        </table>
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>Other</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Rinkai">Rinkai Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[53];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TōkyōMonorail">Tōkyō Monorail</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[54];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=Yurikamome">Yurikamome</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[55];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=TsukubaExpress">Tsukuba Express</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[56];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=SaitamaRapid">Saitama Rapid Railway Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[57];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=railway&line=HokusōHokusō">Hokusō Railway Hokusō Line</a>（<?php echo $_smarty_tpl->tpl_vars['railway_id']->value[58];?>
）</td>
          </tr>
        </table>
      </div>
    </div>
    <div id="tab3" class="tabbox">
      <div class="area_line_srh">
        <div class="tit_contents">
          <div class="ico_triangle"></div>
          <h2>23 wards in Tokyo</h2>
          <br class="clearfloat">
        </div>
        <table class="area_line_srh_table">
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chiyoda">Chiyoda City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[1];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Chuo">Chuo City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[2];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Minato">Minato City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[3];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinjuku">Shinjuku City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[4];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Bunkyo">Bunkyo City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[6];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Daito">Daito City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[17];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Sumida">Sumida City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[18];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Koto">Koto City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[20];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shinagawa">Shinagawa City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[7];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Meguro">Meguro City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[9];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Ota">Ota City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[8];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Setagaya">Setagaya City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[10];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Shibuya">Shibuya City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[5];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nakano">Nakano City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[12];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Suginami">Suginami City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[11];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Toshima">Toshima City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[14];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Kita">Kita City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[16];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Arakawa">Arakawa City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[19];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Itabashi">Itabashi City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[15];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Nerima">Nerima City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[13];?>
）</td>
          </tr>
          <tr>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Adachi">Adachi City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[21];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Katushika">Katsushika City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[22];?>
）</td>
            <td class="area_line_srh_list1"><a href="./list.php?src=city&area=Edogawa">Edogawa City</a>（<?php echo $_smarty_tpl->tpl_vars['city_id']->value[23];?>
）</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- ●main contents END● -->
<?php echo $_smarty_tpl->getSubTemplate ('footer.html', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>
