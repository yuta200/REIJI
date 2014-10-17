/**********************
*
* jQuery.common
*
**********************/

/********** radio button default check check START **********/
$(function(){
  // checkbox
  $(".checkbox_input").change(function(){
    if($(this).is(":checked")){
      $(this).parent().addClass("checkbox_label_selected");
      $(this).prop("checked", true);
    }else{
      $(this).parent().removeClass("checkbox_label_selected");
      $(this).prop("checked", false);
    }
  });

  // radio button
  $(".radio_input").change(function(){
    if($(this).is(":checked")){
      if( $(this).parent().hasClass("radio_label_default1") || $(this).parent().hasClass("radio_label1") ){
        $(".radio_label_selected1:not(:checked)").removeClass("radio_label_selected1");
        $(this).parent().addClass("radio_label_selected1");
        $(".radio_label_default1").addClass("radio_label1");
        $(".radio_label_default1").removeClass("radio_label_default1");
      }else if( $(this).parent().hasClass("radio_label_default2") || $(this).parent().hasClass("radio_label2") ){
        $(".radio_label_selected2:not(:checked)").removeClass("radio_label_selected2");
        $(this).parent().addClass("radio_label_selected2");
        $(".radio_label_default2").addClass("radio_label2");
        $(".radio_label_default2").removeClass("radio_label_default2");
      }else if( $(this).parent().hasClass("radio_label_default3") || $(this).parent().hasClass("radio_label3") ){
        $(".radio_label_selected3:not(:checked)").removeClass("radio_label_selected3");
        $(this).parent().addClass("radio_label_selected3");
        $(".radio_label_default3").addClass("radio_label3");
        $(".radio_label_default3").removeClass("radio_label_default3");
      }else if( $(this).parent().hasClass("radio_label_default4") || $(this).parent().hasClass("radio_label4") ){
        $(".radio_label_selected4:not(:checked)").removeClass("radio_label_selected4");
        $(this).parent().addClass("radio_label_selected4");
        $(".radio_label_default4").addClass("radio_label4");
        $(".radio_label_default4").removeClass("radio_label_default4");
      }else if( $(this).parent().hasClass("radio_label_default5") || $(this).parent().hasClass("radio_label5") ){
        $(".radio_label_selected5:not(:checked)").removeClass("radio_label_selected5");
        $(this).parent().addClass("radio_label_selected5");
        $(".radio_label_default5").addClass("radio_label5");
        $(".radio_label_default5").removeClass("radio_label_default5");
      }else if( $(this).parent().hasClass("radio_label_default6") || $(this).parent().hasClass("radio_label6") ){
        $(".radio_label_selected6:not(:checked)").removeClass("radio_label_selected6");
        $(this).parent().addClass("radio_label_selected6");
        $(".radio_label_default6").addClass("radio_label6");
        $(".radio_label_default6").removeClass("radio_label_default6");
      }
    }
  });
});
/********** radio button default check check END **********/

