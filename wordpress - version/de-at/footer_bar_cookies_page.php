<!-- Cookies bar-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />

<script src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.js"></script> 

<script>
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
                    "content": {
                        "message": "Diese Webseite verwendet Cookies um Ihnen das best mögliche Erlebnis zu gewährleisten<br>Sie können Ihre Cookie-Einstellungen  <a href='cookies'>hier ändern</a><br>",
                        "link": "Erfahren Sie mehr ",
                        "dismiss": "Verstanden",
                        "href": "privacy-policy"
                    }
            })});
        }); 
</script>
