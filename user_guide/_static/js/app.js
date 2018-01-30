require('./bootstrap');

$(document).ready(function(){

  $("memo-touch-edit").click(function(e){
    e.preventDefault();
    $.ajax({
      type: "GET",
      url: "/ajaxGetMemoPs",
      dataType: 'json',
      success: function(data){
        console.log(data);
        // STARTTTTTT 
      }
    });
  });



}
