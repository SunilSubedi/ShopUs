$(document).ready(function(){
   // $('#cartAdd').hide();
 $('.addCart').click(function(){
   //  alert('Hello');
   var user_name = $(this).attr('data-user-name');  
   var  title = $(this).attr('data-productTitle');
   var  id = $(this).attr('data-productId');
   var price =$(this).attr('data-productPrice');
   var total = parseInt($(this).attr('data-quantity'));
   //alert(total);
   
  
   var name=$(this).attr('data-productname');
   if(user_name=="NULL")
   {
       
      window.location.href = "/ShopUs/user_login";
   }
   else
   {
       var quantity=parseInt(prompt("Enter a quantity?"));
   $.ajax({
      
      url:'/ShopUs/cart/index',
      type:"POST",
      data:{id:id,title:title,price:price,quantity:quantity,name:name,total_qty:total},
      success:function(data)
      {
          $('#cartAdd').html(data);
          
      },
      error:function(data)
      {
          alert(data);
      }
    
      
   });
   }
 });
    $(document).on('click','.dele',function(){
      //alert("Hello");
    var id=$(this).attr('data-id');
   // alert(id);
    $.ajax({
       url:'/shopUs/cart/remove',
      // url:"<?php echo base_url(); ?>/cart/remove",
      type:"POST",
      data:{id:id},
      success:function(dataa)
      {
          $('#cartAdd').html(dataa);
      }
      
    });
 });
 $('#cartAdd').load('/ShopUs/cart/load');

});


