//$(function(){
$(document).ready(function(){
    
   var is_navigation_button_click = false;
   
   $('.editor_edit_button').click(function(){
       $('#modal').modal('show')
               .find('#modalContent')
               .load($(this).attr('value'));
   });
   $("#editor_navigation_close_button").click(function(){
       if(is_navigation_button_click == false){
          $(".editor_navigation").css('bottom','-250px'); 
          is_navigation_button_click = true;
          $("#editor_navigation_close_button").html('<div class="editor_navigation_bottom editor_navigation_close"><i class="fa fa-arrows-alt"></i><br/>Розгорнути</div>');
       }else{
          $(".editor_navigation").css('bottom','5px');  
          is_navigation_button_click = false;
          $("#editor_navigation_close_button").html('<div class="editor_navigation_bottom editor_navigation_close"><i class="fa fa-times"></i><br/>Сховати</div>');
        }
   });
});

