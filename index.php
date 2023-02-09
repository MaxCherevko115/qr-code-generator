<?php
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="icon/qr-code-icon.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css?family=Fira+Sans:regular,600&display=swap" rel="stylesheet" />
        <title>QR-generator</title>
    </head>
    <body>
        <div class="wrapper">
            <main class="main">
                <div class="main__container">
                    <div class="main__content">
                        <div class="main__title">
                            <h1>QR-Code generator</h1>
                        </div>
                        <div class="main__text">
                            <textarea id="text" class="main__text" placeholder="Your text"></textarea>
                        </div>
                        <div class="main__qrcode">
                            <img id="qrCode">
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <script src="js/script.js"></script>
    </body>
</html>