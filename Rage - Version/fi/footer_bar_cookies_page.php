<!-- Cookies bar-->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.0.3/cookieconsent.min.css" />


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
                    "message": "Tämä verkkosivu käyttää evästeitä varmistaakseen, että sinä saat parhaimman kokemuksen sivustollamme.<br>YVoit muuttaa evästeidesi asetuksia <a href='cookies'>täällä  </a><br>",
                    "link": "Lue lisää ",
                    "dismiss": "Ymmärrän",
                    "href": "privacy-policy"
                }})});
    });
</script>



<?php
$url = $_SERVER['REQUEST_URI'];
$pos = strpos($url, 'cookies');
if($pos){
    ?>

    <!--script-- src="https://code.jquery.com/jquery-2.2.4.min.js" integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script-->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.js"></script>

    <script>
        $(document).ready(function () {
            function get_additional_domains() {
                a = document.createElement("a");
                a.href = window.location.href;
                return a.hostname.replace(/^www/, '');
            }

            let dataslidervalue = null;
            let cookieTypeAgree = 'GDPR_OPTIN';
            let cookie_value = Cookies.get(cookieTypeAgree);
            let additional_domain = get_additional_domains();
            switch (cookie_value) {
                case 'no': {
                    dataslidervalue = 1;
                    $('#cookies_requiered').css('color', '#003172');

                    break;
                }

                default: {
                    dataslidervalue = 2;
                    $('#cookies_optional').css('color', '#003172');
                }
            }
            let data_slider_ticks_labels=["Pakolliset evästeet<br>","Toiminnalliset <br>& mainosevästeet"];


            $('#ex19').bootstrapSlider({
                ticks: [1, 2],
                ticks_labels: data_slider_ticks_labels,
                orientation: "vertical"
            });
            $('#ex19').bootstrapSlider('setValue', dataslidervalue);

            $('#ex19').change(function () {
                let agreeType = $('#ex19').val();
                switch (agreeType) {
                    case '1':
                        $('#cookies_optional').css('color', '#ccc');
                        $('#cookies_requiered').css('color', '#003172');
                        break;
                    default:
                        $('#cookies_requiered').css('color', '#ccc');
                        $('#cookies_optional').css('color', '#003172');
                }
            });

            $('#aggree').on("click", function () {
                let agreeType = $('#ex19').val();
                switch (agreeType) {
                    case '1':
                        $.each(Cookies.get(), function (key, value) {
                            Cookies.remove(key);
                            Cookies.remove(key, {'domain': additional_domain});
                        })
                        Cookies.set(cookieTypeAgree, 'no');
                        break;

                    default:
                        Cookies.set(cookieTypeAgree, 'yes');
                }

                let url = "/";
                $(location).attr("href", url);
            });
        });
    </script>

<?php }?>



<?php //include 'footer_bar_cookies_page.php';?>
