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
                    "message": "This website uses cookies to ensure you get the best experience on our website, or change the cookies configuration for livegoals.com <a href='http://www.livegoals.com/cookies?version=2.0'>here</a>",
                    "link": "Learn more ",
                    "dismiss": "Got it",
                    "href": "http://www.livegoals.com/privacypolicy"
                }
            })});
        }); 
</script>

<?php //include 'footer_bar_cookies_page.php';?>