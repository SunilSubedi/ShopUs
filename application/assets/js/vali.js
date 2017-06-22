$(document).ready(function(){
    
    $('#signup').submit(function(){
      var user_name = $("input[name=user_name]").val(); 
      var password = $("#pas").val();
      var con=$("input[name=con-password]").val();
      if(password!=con)
      {
          alert(password);
          alert(con);
      //$('passincorect').html('<strong>Password Should Be Match</strong>');   
      alert('Password didnot match');
      return false;
     } 
     else
     {
         var wrong=false;
         $.ajax({
             url:'/shopUs/frontend/check',
             type:'POST',
             data:{user_name:user_name},
             success:function(data)
             {
                 $('#user').html(data);
               
             }
             
             
         });
        
       
     }
  });

});
