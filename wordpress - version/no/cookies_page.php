<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 * Template Name: Cookies - Template
 */

get_header();
?>
<!-- Dependencies -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<style>
.slider.slider-horizontal {
    width: 100%;
}

.panel_body_padding {
    padding: 40px;
}

.def_conf {
    display: flow-root;
}

.full_conf {
    display: flow-root;

}
#cookies_ li{
    list-style: none;
}
.cc-color-override-1961755968.cc-window {
    bottom: 0em;
    right: 0em;
    width: 300px;
    padding: 25px;
    height: auto;
    background: #212221;
    position: fixed;
    overflow: hidden;
    box-sizing: border-box;
    font-family: Helvetica, Calibri, Arial, sans-serif;
    font-size: 16px;
    line-height: 1.5em;
    z-index: 1001;
    opacity: .99;
    -moz-opacity: 0.99;
    filter: alpha(opacity=99);
}

#cookies_optional > h4, #cookies_requiered > h4 {
    color: #003172;
    font-weight: 900;
}

.cookies_form {
    margin-top: 15px;
}

#cookieconsent\3a desc > a:nth-child(2) {
    text-decoration: underline;
}

@media (max-width: 1024px) {
    .cc-color-override-1961755968.cc-window {
        bottom: 0em;
        right: 0em;
        width: 100%;
        padding-left: 25px;
        padding-bottom: 10px;
        padding-top: 5px;
        height: auto;
        background: #212221;
        position: fixed;
        overflow: hidden;
        box-sizing: border-box;
        font-family: Helvetica, Calibri, Arial, sans-serif;
        font-size: 11px;
        line-height: 1.5em;
        z-index: 1001;
        opacity: .99;
        -moz-opacity: 0.99;
        filter: alpha(opacity=99);
        margin: 0px;
    }

    #cookies_content {
        margin-top: 50px;
    }
    #cookies_labels{
        width: 80%;
        padding-left: 12%;
    }
   
}

@media (min-width: 1024px) {
    div.panel-body.panel_body_padding {
        padding: 30px 25px;
    }

    #cookies_labels {
        width: 25%;
    }

    #cookies_content {
        border-left: 1px dashed #003172;
        padding-left: 15px;
        min-height: 238px;
        width: 70%;

    }
}


    </style>
<div id="cookies_" class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
             

<?php 

$panelTitle = "Dine valg angående informasjonskapsler på dette nettstedet";
$panelTitleSubheader = "Informasjonskapsler er viktige for at et nettsted fungerer riktig. For å forbedre opplevelsen bruker vi informasjonskapsler for å huske påloggingsinformasjon og sørge for sikker innlogging, samle statistikk for å optimalisere nettstedfunksjonalitet og levere innhold skreddersydd for dine interesser. Klikk Godta og Fortsett for å godta informasjonskapsler og gå direkte til nettstedet. Ulike typer informasjonskapsler er forklart i vår personvernpolitikk og informasjonskapsler. Du kan velge om du vil akseptere visse informasjonskapsler mens du er på nettstedet:";
$cookies_req = "Påkrevde informasjonskapsler";
$cookies_req_text = "Disse informasjonskapslene kreves for å aktivere kjerneområdets funksjonalitet, spesielt for at nettstedet skal være konsistent.";
$cookies_opc = "Funksjonelle og annonseringskapsler";
$cookies_opc_text = "Disse informasjonskapslene tillater oss å analysere bruk av nettstedet slik at vi kan måle og forbedre ytelsen.";
$agree = "Jeg aksepterer";

  
    $content = ' 
    <div class="container cookies_form">
    <div class="row">
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 id="cookies_title" class="panel-title">'.$panelTitle.'<br>
                    <small>'.$panelTitleSubheader.'</small>
                     <br> 
                </div>
                <div class="panel-body panel_body_padding">
                    <div class="def_conf">
                        <div class="pull-left" id="cookies_labels">
                            <span id="cookies_c" class="hidden">cookies levels</span>
                            <input id="ex19" type="text" data-slider-ticks="[1, 2]">
                        </div>
                        <div id="cookies_content" class="pull-right">                            
                            <div>
                                <h4 id="cookies_requiered">'.$cookies_req.'</h4>
                                <ul><li>'.$cookies_req_text.'</li></ul>
                                <h4 id="cookies_optional">'.$cookies_opc.'</h4>
                                <ul><li>'.$cookies_opc_text.'</li></ul>
                          </div>
                        </div>
                    </div>                       
                    <input id="aggree" class="btn btn-primary pull-right" type="submit" value="'.$agree.'"></h3>
            </div></div>
        </div>
    </div>
</div>';
    echo $content;
?>


		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->
<?php get_footer();?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/bootstrap-slider.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/js-cookie/2.2.0/js.cookie.min.js"></script>
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
        switch(cookie_value) {
            case 'no':
                {
                    dataslidervalue = 1;
                    $('#cookies_requiered').css('color','#003172');

                    break;
                }

            default:{
                dataslidervalue = 2;
                $('#cookies_optional').css('color','#003172');
                }
        }
        let data_slider_ticks_labels = ["Påkrævede Cookies<br>", "Funktionelle <br> og Reklame Cookies"];

        var width =  jQuery( document ).width();

            $('#ex19').bootstrapSlider({
                ticks: [1, 2],
                ticks_labels: data_slider_ticks_labels,
                orientation: "vertical"
            });

        $('#ex19').bootstrapSlider('setValue', dataslidervalue);
        $('#ex19').change(function() {
            let agreeType  = $('#ex19').val();
            switch(agreeType) {
                case '1':
                    $('#cookies_optional').css('color','#ccc');
                    $('#cookies_requiered').css('color','#003172');
                    break;
                default:
                    $('#cookies_requiered').css('color','#ccc');
                    $('#cookies_optional').css('color','#003172');
            }
        });
        $('#aggree').on( "click",function() {
            let agreeType  = $('#ex19').val();
            switch(agreeType) {
                case '1':
                    $.each(Cookies.get(), function(key, value) {
                        Cookies.remove(key);
                        Cookies.remove(key, { 'domain': additional_domain });
                    })
                    Cookies.set(cookieTypeAgree, 'no');
                    break;

                default:
                    Cookies.set(cookieTypeAgree, 'yes');
            }

            let url = "/";
            $(location).attr("href", url);

        });


        var width =  jQuery( document ).width();
        if(width < 1024) {
            $('#ex19').bootstrapSlider({
                ticks: [1, 2],
                ticks_labels: data_slider_ticks_labels,
                orientation: "vertical"
            });
        }

    });
</script>

