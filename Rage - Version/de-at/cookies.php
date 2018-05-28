<!-- Dependencies -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.0.2/css/bootstrap-slider.min.css">
<style>
    .slider.slider-horizontal {
        width: 100%;
    }
    .page-header {
        padding-bottom: 0;
        margin: 0;
        border-bottom: 0px solid #eee;
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

    #cookies_ li {
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

        #cookies_labels {
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
    .slider {
        float: left;
        min-height: 219px;
        color: #000;
        background-repeat: no-repeat!important;
        background-position: center top!important;
        background-color: #0000!important;
        padding-bottom: 20px;
        background-size: 100%!important;
        box-shadow: 0 0 50px 20px #0000 inset;

    }
    .breadcrumb {
        display: none !important;
    }
</style>

<div id="cookies_" class="container">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php
            $panelTitle = "Ihre Wahlmöglichkeiten bezüglich Cookies auf dieser Webseite.";
            $panelTitleSubheader = "Cookies sind wichtig für die reibungslose Funktion einer Seite. Um Ihr Erlebnis
 zu verbessern, nutzen wir Cookies die Ihre Login Daten speichern und 
ein sicheres Einloggen ermöglichen, Statistiken zur Optimierung der 
Funktionalität der Seite erheben und helfen auf Ihre Interessen 
zugeschnittene Inhalte zu liefern. Klicken Sie \"Zustimmen und 
Fortfahren\" um Cookies zu akzeptieren und direkt zur Webseite zu 
gelangen. Verschiedene Arten von Cookies werden ausführlich in der 
Datenschutzerklärung & Cookie-Richtlinien erklärt. Sie können 
auswählen während der Nutzung dieser Seite bestimmte Cookies zu 
akzeptieren:";
            $cookies_req = "Erforderliche Cookies";
            $cookies_req_text = "Diese Cookies sind notwendig für Kernfunktionen der Seite, speziell um das einheitliche Erscheinungsbild der Seite zu gewährleisten.";
            $cookies_opc = "Funktionale & Werbe Cookies";
            $cookies_opc_text = "Diese Cookies erlauben uns die Nutzung der Seite zu analysieren und die performance zu verbessern.";
            $agree = "Ich stimme zu";

            $content = ' 
                <div class="cookies_form">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 id="cookies_title" class="panel-title">' . $panelTitle . '<br>
                                <small>' . $panelTitleSubheader . '</small>
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
                                            <h4 id="cookies_requiered">' . $cookies_req . '</h4>
                                            <ul><li>' . $cookies_req_text . '</li></ul>
                                            <h4 id="cookies_optional">' . $cookies_opc . '</h4>
                                            <ul><li>' . $cookies_opc_text . '</li></ul>
                                      </div>
                                    </div>
                                </div>                       
                                <input id="aggree" class="btn btn-primary pull-right" type="submit" value="' . $agree . '"></h3>
                        </div>
                        </div>
                    </div>
                </div>
            </div>';
            echo $content;
            ?>
        </main>
    </div>
</div>


