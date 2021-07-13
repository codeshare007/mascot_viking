<?php
    $title = $_REQUEST['title'];
    $youtube_url = "https://www.youtube.com/embed/".$_REQUEST['id'];
?>

<html>
	<head>
		<title>CNY Attractions - CSI Virtual Game</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
		<meta http-equiv="Pragma" content="no-cache">
		<meta http-equiv="Expires" content="0">

	</head>
    <style>
        .title {
            height : 180px;
            font-size : 3.5rem;
            line-height : 1.2;
            letter-spacing : -0.05em;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .container {
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .content {
            position : absolute;
            width: 75vw;
            background: white;
            height: 45vw;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius : 5px;
        }
        .image {
            height : 100vh;
        }
        img {
            width : 100%;
            height : 100%;
            border-radius : 5px;
        }
    </style>
	<body class="is-preload">
		<!-- Wrapper -->
        <div id="wrapper" class="divided">
                <section class="title" align="center">
                    <span><?= $title ?></span>
                </section>

            <!-- One -->
                <section class="container">
                    <div class="image">
                        <img src="../assets/images/FootballField.jpg" alt="" />
                    </div>
                    <div class="content">
                        <iframe width="90%" height="90%" src="<?= $youtube_url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </section>
        </div>
	</body>
</html>