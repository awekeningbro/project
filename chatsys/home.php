<?php 
session_start();
?>
<html>
    <head>
        <title>HomePage</title>
    </head>
    <style>
        body {
            margin: 0;
            width: 100%;
            height: 100vh;
            background-image: url("../images/graphic.jpg");
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }
    </style>
    <body>
        <h1>Welcome Home, <?php echo $_SESSION['username'];?>!</h1>
    </body>
</html>