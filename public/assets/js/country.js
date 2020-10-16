$(document).ready(function(){
    console.log("done");
      $(window).scroll(function(){
        let positiontop = $(document).scrollTop();
        let navpos = $("#navbar").position();
        if(positiontop >= ($("#country-famous-places").position().top - 100) && positiontop < ($("#country-price-table").position().top - 20))
        {
            setTimeout(function(){
                  $("#country-famId").addClass("fadein-div");
              },500);
        }
        else{
            $("#country-famId").removeClass("fadein-div");
        }


        if(positiontop >= ($("#country-price-table").position().top - 100) )
        {
            setTimeout(function(){
                  $("#country-priceId").addClass("fadein-div");
              },500);
        }
        else{
            $("#country-priceId").removeClass("fadein-div");
        }

     
    
    });
});