<!DOCTYPE html>

<html>

<head>

    <title>Gab World</title>
    <meta charset="utf-8">
    <meta name="keywords" content="personal journal, gabriel ramos, web development, music, engineering, inovation, problem solving, science, math, logic, programming, java, computer science, it, electrical engineering, guitar, computer music, composition" />
    <meta name="description" content="A personal journal about my personal interests. Namely, web development & programming, music and engineering." />
    <meta name="author" content="Gabriel Ramos">
    <link rel="stylesheet" href="styles/style.css">
    <link rel="shortcut icon" type="image/jpg" href="gw.ico">
    
    <!--[if lt IE 9]>
        <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
</head>

<body id="home">
   
    <?php require_once("templates/header.php"); ?>    
    
    <nav>
        <ul>
            <a href="index.php"><li id="home">/home</li></a>
            <a href="webdev.php"><li>/web development & programming</li></a>
            <a href="music.php"><li>/music</li></a>
            <a href="engineering.php"><li>/engineering</li></a>
            <a href="contact.php"><li>/contact & location</li></a>
        </ul>
    </nav><!-- navbar -->

    <blockquote class="quote-section">

        "<strong>Pure pragmatism</strong> can't imagine a bold future. <em>Pure idealism</em> can't get anything done.
        <br />
        <em>It is the delicate blend of</em> <strong>both that drives inovation.</strong>" <br><br>
        Simon Sinek
    
    </blockquote>

    <main>

        <section class="interest">
            <h2><a href="webdev.php">/Web Development</a></h2>

            <img src="images/webdev.jpg" width="200" alt="A web development illustrative image" title="Web Development & Programming" />

            <p>Right now, I'm learning web development with Victor Bastos course. </p>
            <p>After I finish that, I will <em>update my CV</em> to include my new skillset, <em>update my public professional profiles</em> and <em>look for a job</em>, and <em>start my freelance career.</em></p>
        </section>

        <section class="interest">
            <h2><a href="music.php">/Music</a></h2>

            <img src="images/music.jpg" width="200" alt="A man playing guitar" title="Music" />

            <p>Music is <em>more than a hobby for me</em>, it is almost greater than my professional ventures.</p>
            <p>It is something <em>I'll do when It comes the time</em> from my MASTERPLAN.</p>
        </section>

        <section class="interest">
            <h2><a href="engineering.php">/Engineering</a></h2>

            <img src="images/engineering.jpg" width="200" alt="A computer electronic board" title="Engineering" />

            <p>That's... well, that's my destination. I love it! And I'll be one of the best in the world for sure.</p>
            <p>As a Computer Engineer, I must have a firm grasp of <em>Logic, Math, Physics, Electric Engineering and Computer Science.</em> That's a lot!</p>
        </section>

    </main><!-- main -->

    <?php require_once("templates/footer.php");?>
</body>

</html>