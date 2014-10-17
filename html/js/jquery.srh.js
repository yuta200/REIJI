/**********************
*
* jQuery.srh
*
**********************/

/********** tab change START **********/
$(function(){
  $('.tabbox:first').show();
  $('#tab li:first').addClass('active');
  $('#tab li').click(function() {
    $('#tab li').removeClass('active');
    $(this).addClass('active');
    $('.tabbox').hide();
    $($(this).find('a').attr('href')).fadeIn();
    return false;
  });
});
/********** tab change END **********/


/********** place all check START **********/
$(function(){
  $('#group_01').on('change', function() {
    if($(this).is(":checked")){
      $('.group_01').parent().addClass("checkbox_label_selected");
      $('.group_01').prop("checked", true);
    }else{
      $('.group_01').parent().removeClass("checkbox_label_selected");
      $('.group_01').prop("checked", false);
    }
  });

  $('#group_02').on('change', function() {
    if($(this).is(":checked")){
      $('.group_02').parent().addClass("checkbox_label_selected");
      $('.group_02').prop("checked", true);
    }else{
      $('.group_02').parent().removeClass("checkbox_label_selected");
      $('.group_02').prop("checked", false);
    }
  });

  $('#group_03').on('change', function() {
    if($(this).is(":checked")){
      $('.group_03').parent().addClass("checkbox_label_selected");
      $('.group_03').prop("checked", true);
    }else{
      $('.group_03').parent().removeClass("checkbox_label_selected");
      $('.group_03').prop("checked", false);
    }
  });

  $('#group_04').on('change', function() {
    if($(this).is(":checked")){
      $('.group_04').parent().addClass("checkbox_label_selected");
      $('.group_04').prop("checked", true);
    }else{
      $('.group_04').parent().removeClass("checkbox_label_selected");
      $('.group_04').prop("checked", false);
    }
  });

  $('#group_05').on('change', function() {
    if($(this).is(":checked")){
      $('.group_05').parent().addClass("checkbox_label_selected");
      $('.group_05').prop("checked", true);
    }else{
      $('.group_05').parent().removeClass("checkbox_label_selected");
      $('.group_05').prop("checked", false);
    }
  });
});
/********** place all check END **********/


/********** railway choice START **********/
$(function(){
  // default select_line hide
  $(".jquery_line_flg").addClass('hide');

  $('[name=sr]').change(function() {
    $(".jquery_line_flg").val(0);
    $(".jquery_line_flg").addClass('hide');
    var val = $('[name=sr]').val();
    $('[name=sl' + val + ']').removeClass("hide");
  });
});
/********** railway choice END **********/