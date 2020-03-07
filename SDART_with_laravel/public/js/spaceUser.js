
$(".HASartUser").ready(function(){
    if($(".HASartUser").hover(function () {
        ($(".HASartUserTarget").removeClass("d-none"));
    }));
    if ($(".HASartUser").mouseout(function () {
        ($(".HASartUserTarget").addClass("d-none"));
    }));

});


