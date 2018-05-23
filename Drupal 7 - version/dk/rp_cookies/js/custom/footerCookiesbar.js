$(document).ready(function () {
window.addEventListener("load", function(){
    window.cookieconsent.initialise({
        "palette": {
            "popup": {
                "background": "#efefef",
                "text": "#404040"
            },
            "button": {
                "background": "#8ec760",
                "text": "#ffffff"
            }
        },
        "theme": "classic",
        "content": {
            "message": "Denne hjemmeside bruger cookies til at sikre, at du får den bedste oplevelse på vores hjemmeside<br>Du kan også skifte dine cookies-konfigurationer <a href='cookies'>her</a><br>",
            "link": "Lær mere",
            "dismiss": "Forstået",
            "href": "privacy-policy"
        }
    })});

});
