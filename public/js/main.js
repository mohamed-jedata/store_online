$(document).ready(function () {
   $(".product-info .comments .comment").before("<hr>");


   //show edit to product
   $(".prod .product").hover(function () {
         // over
         $(this).closest().find(".find").hide();
      }, function () {
         // out
      }
   );


   //submit when quantite is changed
   $("#quantite").change(function (e) { 
      if($(this).val() != "")
       $(this).next(".submit").click();
   });
  
});