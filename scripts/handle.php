<!DOCTYPE html>

<html>

<head>

    <title>Data Processed</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/handle.css">
    <link rel="shortcut icon" type="image/jpg" href="gw.ico">
    
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="contact">
    <div class="page-wrap">
    <?php require_once("templates/header.php"); ?>

    <nav role="navigation">
        <ul>
            <a href="index.php"><li>/home</li></a>
            <a href="webdev.php"><li>/web development & programming</li></a>
            <a href="music.php"><li>/music</li></a>
            <a href="engineering.php"><li>/engineering</li></a>
            <a href="contact.php"><li id="contact">/contact & location</li></a>
        </ul>
    </nav><!-- navbar -->
    
    <main role="main">
       <?php
            if($_SERVER["REQUEST_METHOD"] == "POST") {
                echo "<h2>/Data Processed</h2>";
                
            } 
            else {                
                echo "<h2>You need to submit information</h2>";
            }
        ?>
    </main><!-- main -->
    </div><!-- page wrap -->
    
    <?php require_once("templates/footer.php");?>
</body>

</html>