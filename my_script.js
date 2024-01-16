
 function create() {
   setTimeout(function(){
     $.ajax({
       url:"insert.php", //the page containing php script
       type: "post", //request type,
       dataType: 'json',
      data: {user_id: $('#user_id').val(),v_id: $('#v_id').val()},
       success:function(result){
          console.log(result);
      }
    });


  }, 120000);
  }
