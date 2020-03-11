/*
    (((((((( SCRIPT ))))))))
*/
$(document).ready(function () {

    $("#hidden").hide();
    $("a#show").on("click", function () {
        
        $("#hidden").show("fast"); 
        return false;
    });

    $("a#show").on("blur", function () {
        
        $("#hidden").hide("fast"); 
        return false;
    });
});