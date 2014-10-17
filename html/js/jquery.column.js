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
