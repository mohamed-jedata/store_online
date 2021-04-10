$(document).ready(function () {


    $('.show-edit').hover(function () {

            $(this).find(".btn").show(500);
        

        }, function () {
            // out

            $('.show-edit .btn').hide();
           

        }
    );

    $("#confirm").click(function (e) { 
        return confirm("Are you Sure ?");
    });

    $(".clickOnDelete").click(function(){
        $(".delete").click();
    });


    $(".categories  h5").click(function (e) { 
       $(this).next(".card-text").slideToggle(250);
    });

    $(".images img").click(function(){
        var src = $(this).attr("src");
        $(this).parent().parent().prev(".pro-img").attr("src",src);
        // $(".pro-img").attr("src",src);
    });

    $(".dashboard .last_products ul li").click(function (e) { 
        
        var url = $(this).find("a").attr("href");
        window.location.href = url;
        // alert(url);
        
    });

});