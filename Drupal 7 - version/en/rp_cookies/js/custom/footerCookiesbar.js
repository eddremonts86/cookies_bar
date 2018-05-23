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
            "message": "This website uses cookies to ensure you get the best experience on our website.<br>You can also change you cookies configuration <a href='cookies'>here</a><br>",
            "link": "Learn more ",
            "dismiss": "Got it",
            "href": "privacy-policy"
        }
    })});

});