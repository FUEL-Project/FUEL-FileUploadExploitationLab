$(document).ready(function(){
    $(".responseMsg").hide();
    $("#errorMsg").hide();
    $("#fileSelect").click();
});
function error(){
    $("#errorMsg").fadeIn(200).delay(5000).fadeOut(1000);
};
function success(){
    $("#uploadtext").fadeIn(1000);
};
