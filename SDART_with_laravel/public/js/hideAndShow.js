
/*gestionnaire one page  HIDE&SHOW*/
$("document").ready(function(){
    /*page inscription */
    $(".hideAndShowSinscrire").click(function(){
        $(this).addClass("AACTIVE");
        $(".hideAndShowAccueil").removeClass("AACTIVE");
        $(".hideAndShowActualite").removeClass("AACTIVE");
        $(".artChangeur").text("Arts").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageContact").removeClass("d-none");
        $("#pageAccueil").addClass("d-none");
        $("#pageArtGraphique").addClass("d-none");
        $("#pageActualite").addClass("d-none");
        $("#pageArt3D").addClass("d-none");
        $("#pageMarket").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageArtDigital").addClass("d-none");
    },)
    /* fin page inscription */
    /*page accueil */
    $(".hideAndShowAccueil").click(function(){
        $(this).addClass("AACTIVE");
        $(".hideAndShowSinscrire").removeClass("AACTIVE");
        $(".hideAndShowActualite").removeClass("AACTIVE");
        $(".artChangeur").text("Arts").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageAccueil").removeClass("d-none");
        $("#pageContact").addClass("d-none");
        $("#pageArtGraphique").addClass("d-none");
        $("#pageActualite").addClass("d-none");
        $("#pageArt3D").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageMarket").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pageArtDigital").addClass("d-none");
    },)
    /* fin page accueil */
    /*page actualité */
    $(".hideAndShowActualite").click(function(){
        $(this).addClass("AACTIVE");
        $(".hideAndShowSinscrire").removeClass("AACTIVE");
        $(".hideAndShowAccueil").removeClass("AACTIVE");
        $(".artChangeur").text("Arts").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageActualite").removeClass("d-none");
        $("#pageContact").addClass("d-none");
        $("#pageAccueil").addClass("d-none");
        $(".artChangeur").text("Arts");
        $("#pageArtGraphique").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageArtDigital").addClass("d-none");
    },)
        /* fin page actualité */

        /*triple page unis dans un seul selecteur */
    $(".hideAndShowpageArtGraphique").click(function(){
        $(".artChangeur").text("Art Graphique");
        $(".hideAndShowSinscrire").removeClass("AACTIVE");
        $(".hideAndShowAccueil").removeClass("AACTIVE");
        $(".hideAndShowActualite").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageArtGraphique").removeClass("d-none");
        $("#pageArt3D").addClass("AACTIVE").addClass("d-none");
        $("#pageMarket").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageContact").addClass("d-none");
        $("#pageAccueil").addClass("d-none");
        $("#pageActualite").addClass("d-none");
        $("#pageArtDigital").addClass("d-none");
    },)
    /*morceau de programme type à remplire */
    $(".hideAndShowArtdigital").click(function(){
        $(".artChangeur").addClass("AACTIVE").text("Art Digital");
        $(".hideAndShowSinscrire").removeClass("AACTIVE");
        $(".hideAndShowAccueil").removeClass("AACTIVE");
        $(".hideAndShowActualite").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageArtDigital").removeClass("d-none");
        $("#pageArt3D").addClass("d-none");
        $("#pageMarket").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageContact").addClass("d-none");
        $("#pageAccueil").addClass("d-none");
        $("#pageActualite").addClass("d-none");
        $("#pageArtGraphique").addClass("d-none");
    },)
        /*morceau de programme type à remplire */
    $(".hideAndShowArt3D").click(function(){
        $(".artChangeur").text("Art 3D");
        $(".hideAndShowSinscrire").removeClass("AACTIVE");
        $(".hideAndShowAccueil").removeClass("AACTIVE");
        $(".hideAndShowActualite").removeClass("AACTIVE");
        $(".hideAndMarket").removeClass("AACTIVE");
        $(".hideAndlecon").removeClass("AACTIVE");

        $("#pageArt3D").removeClass("d-none");
        $("#pageArtDigital").addClass("d-none");
        $("#pageMarket").addClass("d-none");
        $("#pageLecon").addClass("d-none");
        $("#pagejOB").addClass("d-none");
        $("#pageContact").addClass("d-none");
        $("#pageAccueil").addClass("d-none");
        $("#pageActualite").addClass("d-none");
        $("#pageArtGraphique").addClass("d-none");
    },)

});

/*ces deux classes doivents être cacher :
hideAndShowConnecter
si le bouton
hideAndShowConnecteur
est cliqué
et enlevé
le d-none de hAsConnecter
*/
$("document").ready(function(){
    $("#connextionShow").click(function(){
        $("#hAsConnecter").removeClass("d-none");
        $("#hAsConnecterUno").addClass("d-none");
    },)
    $("#DeConnextionShow").click(function(){
        $("#hAsConnecter").addClass("d-none");
        $("#hAsConnecterUno").removeClass("d-none");
    },)
});



/*systhème HIDE&SHOW pour mes sugestion */
/*la on faire le selecteur d'id qui cache et revele suivant le selecteur qu'ont a choisit */
$("document").ready(function(){
    /*dans le cas ou l'on clique sur hideAndShow all */
    $(".hideAndShowPropAll").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropGraphique").removeClass("AACTIVE");
        $(".hideAndShowProp3D").removeClass("AACTIVE");
        $(".hideAndShowPropdigital").removeClass("AACTIVE");
        $(".1").fadeIn("slow");
        $(".2").fadeIn("slow"); // rajoue de la classe fadeout("slow") ajouter une animation de transition
        $(".3").fadeIn("slow");
    },)
    /*CAS hideAndShow graphique */
    $(".hideAndShowPropGraphique").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropAll").removeClass("AACTIVE");
        $(".hideAndShowProp3D").removeClass("AACTIVE");
        $(".hideAndShowPropdigital").removeClass("AACTIVE");
        $(".1").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Graphique */
        $(".2").fadeOut("slow");
        $(".3").fadeOut("slow");
    },)
    /*CAS hideAndShow 3D*/
    $(".hideAndShowProp3D").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropdigital").removeClass("AACTIVE");
        $(".hideAndShowPropGraphique").removeClass("AACTIVE");
        $(".hideAndShowPropAll").removeClass("AACTIVE");
        $(".3").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Graphique */
        $(".1").fadeOut("slow");
        $(".2").fadeOut("slow");
    },)
    /*CAShideAndShowProp digital*/
        $(".hideAndShowPropdigital").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowProp3D").removeClass("AACTIVE");
        $(".hideAndShowPropGraphique").removeClass("AACTIVE");
        $(".hideAndShowPropAll").removeClass("AACTIVE");
        $(".2").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Graphique */
        $(".1").fadeOut("slow");
        $(".3").fadeOut("slow");
    },)
});

/*
    color: #13aff0;
    text-decoration: none;
    border-bottom: 2px solid #13aff0;
     */
//plug in affiche ton MDP
$("document").ready(function(){
    $("#eyes").click(function()
    {
        $(".hideAndShowEyes").addClass("d-none");
        $(".hideAndShowEyesBlink").removeClass("d-none");
    },)
    $("#eyesBlink").click(function()
    {
        $(".hideAndShowEyes").removeClass("d-none");
        $(".hideAndShowEyesBlink").addClass("d-none");
    },)
});
function passWordHAS() {
    var x = document.getElementById("passWord");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
$("document").ready(function(){
    $("#eyes2").click(function()
    {
        $(".hideAndShowEye2s").addClass("d-none");
        $(".hideAndShowEyesBlink2").removeClass("d-none");
    },)
    $("#eyesBlink2").click(function()
    {
        $(".hideAndShowEye2s").removeClass("d-none");
        $(".hideAndShowEyesBlink2").addClass("d-none");
    },)
});
function passWordHAS2() {
    var x = document.getElementById("passWordConf");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}

/* essaie aborté avec le modificateur de class
function passWordHAS() {
    var x = document.getElementById("passWord");
    var y = document.getElementsByClassName("fa-eye-slash");
    if (x.type === "password") {
        x.type = "text";
        y.className.replace ('fa-eye' );
    } else {
        x.type = "password";
        y.className.replace ('fa-eye-slash' );
    }
}
*/


// phase 3 modifier le type d'input
// ph 3.1 modifier l'oeuil pour qu'il soit ouvert


/* Trieur d'image dans la page Job
/*systhème HIDE&SHOW */
/*la on faire le selecteur d'id qui cache et revele suivant le selecteur qu'ont a choisit */
$("document").ready(function(){
    /*dans le cas ou l'on clique sur hideAndShow Tous */
    $(".hideAndShowProTous").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropContrat").removeClass("AACTIVE");
        $(".hideAndShowPropFreeLance").removeClass("AACTIVE");
        $(".hideAndShowPropPermanent").removeClass("AACTIVE");
        $(".hideAndShowPropOther").removeClass("AACTIVE");
        $(".HdSPropContrat").fadeIn("slow");
        $(".HdSPropFreeLance").fadeIn("slow"); // rajoue de la classe fadeout("slow") ajouter une animation de transition
        $(".HdSPropPermanent").fadeIn("slow");
        $(".HdSPropOther").fadeIn("slow");

    },)
    /*CAS hideAndShow Permanent */
    $(".hideAndShowPropPermanent").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropTous").removeClass("AACTIVE");
        $(".hideAndShowPropContrat").removeClass("AACTIVE");
        $(".hideAndShowPropFreeLance").removeClass("AACTIVE");
        $(".hideAndShowPropOther").removeClass("AACTIVE");
        $(".HdSPropPermanent").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Permanent */
        $("HdSPropContrat").fadeOut("slow");
        $(".HdSPropFreeLance").fadeOut("slow");
        $(".HdSPropOther").fadeOut("slow");

    },)
    /*CAS hideAndShow Contrat*/
    $(".hideAndShowPropContrat").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropPermanent").removeClass("AACTIVE");
        $(".hideAndShowPropFreeLance").removeClass("AACTIVE");
        $(".hideAndShowPropTous").removeClass("AACTIVE");
        $(".hideAndShowPropOther").removeClass("AACTIVE");
        $(".HdSPropContrat").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Contrat */
        $(".HdSPropPermanent").fadeOut("slow");
        $(".HdSPropFreeLance").fadeOut("slow");
        $(".HdSPropOther").fadeOut("slow");

    },)
    /*CAShideAndShowProp FreeLance*/
        $(".hideAndShowPropFreeLance").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropPermanent").removeClass("AACTIVE");
        $(".hideAndShowPropContrat").removeClass("AACTIVE");
        $(".hideAndShowPropTous").removeClass("AACTIVE");
        $(".hideAndShowPropOther").removeClass("AACTIVE");
        $(".HdSPropFreeLance").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow FreeLance */
        $(".HdSPropPermanent").fadeOut("slow");
        $(".HdSPropContrat").fadeOut("slow");
        $(".HdSPropOther").fadeOut("slow");

    },)

    /*CAShideAndShowProp Other*/
    $(".hideAndShowPropOther").click(function(){
        $(this).addClass('AACTIVE');
        $(".hideAndShowPropPermanent").removeClass("AACTIVE");
        $(".hideAndShowPropContrat").removeClass("AACTIVE");
        $(".hideAndShowPropTous").removeClass("AACTIVE");
        $(".hideAndShowPropFreeLance").removeClass("AACTIVE");
        $(".HdSPropOther").fadeIn("slow");
        /*les 3 autre posibilité son cacher des que l'on clic que hideAndShow Other */
        $(".HdSPropPermanent").fadeOut("slow");
        $(".HdSPropContrat").fadeOut("slow");
        $(".HdSPropFreeLance").fadeOut("slow");

    },)
});

$('#userlevel').change(function(){
    if($(this).val() === "3"){
        ($("#entreprise").removeClass("d-none"));
    }
    if($(this).val() === "1"){
        ($("#entreprise").addClass("d-none"));
    }
    if($(this).val() === "2"){
        ($("#entreprise").addClass("d-none"));
    }
});

