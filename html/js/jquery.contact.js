/**********************
*
* jQuery.list
*
**********************/

/********** price detail START **********/
$(function(){
  $(".price_detail").addClass('hide');
  if ($("span").hasClass("u999_choice")) {
    $(".u999").removeClass('hide');
  } else if($("span").hasClass("c1000ok")) {
    $(".o1000").removeClass('hide');
  } else if($("span").hasClass("c3000ok")) {
    $(".o3000").removeClass('hide');
  } else if($("span").hasClass("c5000ok")) {
    $(".o4000").removeClass('hide');
  } else if($("span").hasClass("c8000ok")) {
    $(".o8000").removeClass('hide');
  } else if($("span").hasClass("c10000ok")) {
    $(".o10000").removeClass('hide');
  } else if($("span").hasClass("c20000ok")) {
    $(".o20000").removeClass('hide');
  } else if($("span").hasClass("c30000ok")) {
    $(".o30000").removeClass('hide');
  }
});
/********** price datail END **********/


var map;
    
    // 初期化。bodyのonloadでinit()を指定することで呼び出してます
    function init() {

      // Google Mapで利用する初期設定用の変数
      var latlng = new google.maps.LatLng(39, 138);
      var opts = {
        zoom: 6,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        center: latlng
      };

      // getElementById("map")の"map"は、body内の<div id="map">より
      map = new google.maps.Map(document.getElementById("map"), opts);

      // Marker 0の初期設定
      var markerOpts = {
        position: new google.maps.LatLng(39.1, 138.1),
        map: map,
        title: "marker"
      };
      // 直前で作成したMarkerOptionsを利用してMarkerを作成
      var marker = new google.maps.Marker(markerOpts);
      var infowin = new google.maps.InfoWindow({content:"marker InfoWindow"});

      // mouseoverイベントを取得するListenerを追加
      google.maps.event.addListener(marker, 'mouseover', function(){
          infowin.open(map, marker);
        });

      // mouseoutイベントを取得するListenerを追加
      google.maps.event.addListener(marker, 'mouseout', function(){
          infowin.close();
        });

    }

    //]]>