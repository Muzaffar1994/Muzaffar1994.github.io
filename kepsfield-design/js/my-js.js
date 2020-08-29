$(document).ready(function(){
    $("#drawer_toggle_on").click(function(){
        $("#drawer").children(".level_a").addClass("reveal");

    });

    $("#drawer_toggle_off").click(function(){
        $(".level_b.reveal").removeClass("reveal").fadeOut();
        setTimeout(function(){ $("#drawer").children(".level_a").removeClass("reveal"); }, 300);
    });

    $(".level_b_toggle").click(function(event){
        if($(this).attr('href') !== undefined && $( window ).width() < 800){

        } else {

            if(!$(this).siblings(".level_b").hasClass("reveal")){
                event.preventDefault();
                $(".level_b_toggle.selected").removeClass("selected");

                if($( window ).width() < 800) 
                    $(".level_b.reveal").removeClass("reveal").slideUp();
                else
                    $(".level_b.reveal").removeClass("reveal").fadeOut();

                $(this).addClass("selected");

                if($( window ).width() < 800)
                    $(this).siblings(".level_b").addClass("reveal").slideDown();
                else
                    $(this).siblings(".level_b").addClass("reveal").fadeIn();
            }
        }
    });

    $(".tab_toggle").click(function(event){
        if($(this).attr('href') !== undefined && $( window ).width() < 800){

        } else {
            var tabToShow = $(this).data("activetab");
            if(!$("#" + tabToShow).hasClass("reveal")){
                event.preventDefault();
                $(".tab_toggle.selected").removeClass("selected");
                $(".level_b_tab.reveal").removeClass("reveal").hide();
                $(this).addClass("selected");
                $("#" + tabToShow).addClass("reveal").fadeIn();
            }
        }
    });


    //SEARCH BAR TOGGLE JS
    $("#search-toggle-on").click(function(){
        $("#search-drawer").addClass("reveal");
    });

    $("#search-toggle-off").click(function(){
        $("#search-drawer").removeClass("reveal");
    });
});