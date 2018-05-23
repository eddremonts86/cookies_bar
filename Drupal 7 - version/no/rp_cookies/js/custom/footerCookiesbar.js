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
            "message": "Denne nettsiden bruker informasjonskapsler for å sikre at du får en best mulig opplevelse.<br>Du kan også forandre dine informasjonskapselskonfigurasjon <a href='cookies'>her</a><br>",
            "link": "Finn ut mer",
            "dismiss": "Jeg forstår",
            "href": "privacy-policy"
        }
    })});

});
