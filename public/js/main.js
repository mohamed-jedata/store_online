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

   //click on submit button whose class '.submiting' button when click on class 'clickOnSubmit' 
   $('.clickOnSubmit').click(function (e) { 
      // e.prevetDefault();
      $(".submiting").click();  
   });


});






/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
   document.getElementById("myDropdown").classList.toggle("show");
 }
 
 // Close the dropdown if the user clicks outside of it
 window.onclick = function(event) {
   if (!event.target.matches('.dropbtn')) {
     var dropdowns = document.getElementsByClassName("dropdown-content");
     var i;
     for (i = 0; i < dropdowns.length; i++) {
       var openDropdown = dropdowns[i];
       if (openDropdown.classList.contains('show')) {
         openDropdown.classList.remove('show');
       }
     }
   }
 }