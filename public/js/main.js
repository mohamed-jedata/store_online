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
  
});