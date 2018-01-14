<?php
//** DEBUG EN PANTALLA
//error_reporting(E_ALL);
//ini_set('display_errors', 1);

//** VIDEO RANDOMIZER
$r = rand(1, 7);
switch ($r) {
    case 1: $video = "wTeKnXaOmjg"; break;
    case 2: $video = "7hiLrRaC2Ps"; break;
    case 3: $video = "bZpBOItNVwM"; break;
    case 4: $video = "RCZPsCjAbEU"; break;
    case 5: $video = "CID60MMXLbA"; break;
    case 6: $video = "ujh_ZV6JdfA"; break;
    case 7: $video = "-YYDb-TUsso"; break;
}
?>
<!DOCTYPE html>
<html lang="en" class="body-full-height">
    <head>        
        <title>Pico y Placa - Stackbuilders recruitment Request</title>            
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="icon" href="assets/img/favicon.ico" type="image/x-icon" />
        <link rel="stylesheet" type="text/css" id="theme" href="http://burtonservers.com/homecubic/universe/assets/css/theme-universe-dark.css"/>
        <link rel="stylesheet" type="text/css" id="theme" href="assets/css/style.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    </head>
    <body>
        <?php //** NOTIFICATION BOX ?>
        <div class="row customalert hidethis">
            <div class="col-md-12">
                <div class="widget widget-info widget-item-icon">
                    <div class="widget-item-left">
                        <span class="fa fa-exclamation"></span>
                    </div>
                    <div class="widget-data">
                        <div class="widget-title">Alert</div>
                        <div class="widget-subtitle">
                            <div role="alert" class="customalert_text">
                                Mensaje de error
                            </div>
                        </div>
                    </div>                            
                </div>
            </div>
        </div>
        <?php //** VIDEO BACKGROUND ?>
        <div class="video-background">
            <div class="video-foreground">
                <iframe src="https://www.youtube.com/embed/<?php echo $video; ?>?controls=0&showinfo=0&rel=0&mute=1&modestbranding=1&autoplay=1&loop=1&playlist=<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <?php //** FORM ?>
        <div  class="login-container">
            <div class="login-box animated fadeInDown" style="width: 80vw;">
                <div class="login-body">
                    <div class="login-title col-md-12"><strong>Please fill the form</strong>, then tap "Continue"</div>
                    <div class="col-md-12">
                        <table border="0" align="center" style="width: 70vw;">
                            <tr>
                                <td><strong class="login-title">License Plate:</strong></td>
                                <td><input id="platenumber" required="required" class="form-control" type="text" value="" style="margin-bottom: 10px" placeholder="Full number"/></td>
                            </tr>
                            <tr>
                                <td><strong class="login-title">Date:</strong></td>
                                <td><input id="date" class="form-control" type="text" value="" style="margin-bottom: 10px" placeholder="Use the following Format YYYY-MM-DD"/></td>
                            </tr>
                            <tr>
                                <td><strong class="login-title">Time:</strong></td>
                                <td><input id="time" class="form-control" type="text" value="" style="margin-bottom: 10px" placeholder="24hrs Format HH:MM"/></td>
                            </tr>

                            <tr>
                                <td align="right">
                                    <button class="btn btn-info" type="submit"  id="continue_btn" data-toggle="tooltip" data-placement="right" title="Show result">
                                        <span class="beforeLoad" ><span class="fa fa-check"></span> Continue </span>
                                        <img class="loading_img" src="assets/img/loadingbar.gif" width="80" style="display: none;" />
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <?php //** MESSAGE ?>
        <div  class="login-container hidethis">
            <div class="login-box animated fadeInDown" style="width: 80vw;">
                <div class="login-body">
                    <div class="col-md-12">
                        <center>
                            <div class="btn btn-info" >
                                <span class="message_text font30" >Mensaje Final </span>
                            </div>
                        </center>
                    </div>
                    <div class="col-md-12 pushtop">
                        <center>
                            <input class="btn btn-default submit " value="Go Back" onClick="window.location.href = window.location.href;" />
                        </center>
                    </div>
                </div>
            </div>
        </div>
        <?php //** REQUIRED SCRIPTS ?>
        <script type="text/javascript" src="http://burtonservers.com/homecubic/universe/assets/js/plugins/jquery/jquery.min.js"></script>
        <script type="text/javascript" src="http://burtonservers.com/homecubic/universe/assets/js/plugins/jquery/jquery-ui.min.js"></script>
        <script type="text/javascript" src="assets/js/script.js"></script>
    </body>
</html>
