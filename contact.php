<!DOCTYPE html>

<html>

<head>

    <title>Gab World / Engineering</title>
    <meta name="keywords" content="personal journal, gabriel ramos, web development, music, engineering, inovation, problem solving, science, math, logic, programming, java, computer science, it, electrical engineering, guitar, computer music, composition" />
    <meta name="description" content="A personal journal about my personal interests. Namely, web development & programming, music and engineering." />
    <meta name="author" content="Gabriel Ramos">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/jpg" href="gw.ico">
    
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="contact">
   
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
        
        <form action="handle.php" method="POST">
          <h2>/Contact</h2>
          <p>Contact me through this form. I'm glad to hear from you.</p>
          
           <div class="field-container">
               <label for="name">Name:</label>
                <input id="name" type="text" name="name" placeholder="e.g Jhon Doe" required maxlength="30">
            </div>
            
            <div class="field-container">
               <label for="email">E-mail:</label>
                <input id="email" type="email" name="email" placeholder="e.g jhondoe@email.com" required>
            </div>
            
            <br>        
            
            <textarea name="comments" id="comments" cols="100" rows="20"></textarea>
            
            <br>
            
            <input type="submit">
            <input type="reset">
        </form>
        
        <div id="location">
            <h2>/Location</h2>
            <p>And this is where I live. Rio de Janeiro, Brazil!</p>
            
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470410.4644185151!2d-43.728528992584614!3d-22.91035524405381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9bde559108a05b%3A0x50dc426c672fd24e!2sRio+de+Janeiro%2C+RJ!5e0!3m2!1spt-BR!2sbr!4v1461786902718" width="700" height="500" frameborder="0" style="border:0" allowfullscreen sandbox="allow-top-navigation allow-scripts allow-same-origin"></iframe>
        </div>
  
        <p class="anchor-top"><a href="#contact">Go back to top ^</a></p>
    
    </main><!-- main -->
    
    <?php require_once("templates/footer.php");?>

</body>

</html>