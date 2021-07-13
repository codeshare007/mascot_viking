<html>
    <head>
        <title>Mascot | Vikings</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/jpg" href="assets/favicon.jpg"/>
        <script style="text/javascript" src="libs/jquery/jquery-3.5.1.js"></script>

        <script style="text/javascript" src="libs/bootstrap-4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="libs/bootstrap-4.5.2/css/bootstrap.min.css"/>

        <script type="text/javascript" src="libs/jquery/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="libs/jquery/jquery-ui.min.css"/>
        <link rel="stylesheet" href="libs/jquery/jquery-ui.theme.min.css"/>
        
        <script style="text/javascript" src="src/index.js"></script>
        <link rel="stylesheet" href="assets/css/style.css"/>
    </head>
    <body>
        <div class="w-100 h-100 d-flex justify-content-center">
            <div id="main_div" class="w-100 h-100 d-flex justify-content-center align-items-center">
                <div class="h-100 d-flex align-items-center">
                    <button class="btn start-btn" onclick="startTimer();goToURL('mainpage/mainpage.php');">START</button>
                </div>
            </div>
            <div class="position-absolute" id="timer_div">
            </div>
        </div>
    </body>
</html>