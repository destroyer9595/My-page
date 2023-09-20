<?php
$bdd = new PDO('mysql:host=88.173.124.3;dbname=message;charset=utf8;', 'artour', 'Destroyer95');
if(isset($_POST['valider'])){   
    if(isset($_POST['pseudo']) AND !empty($_POST['message'])){
        $pseudo = htmlspecialchars($_POST['pseudo']);
        $message = nl2br(htmlspecialchars($_POST['message']));

        $insererMessage = $bdd->prepare('INSERT INTO message(pseudo, message) VALUES(?, ?)');
        $insererMessage->execute(array($pseudo, $message));
    }else{
        echo "veuiller compléter tous les champs...";
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>mescodedevirus</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@100;300;400;700&family=Quicksand:wght@300;500&display=swap" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <title>chat</title>
        <meta charset="utf-8">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    </head>
    <body>
        <form method="POST" action="" align="center">
            <input type="text" name="pseudo">
                <br><br>
                <textarea name="message"></textarea>
                <br>
            <input type="submit" name="valider">
        </form>
        <section id="message"></section>

        <script>
            setInterval('load_message()', 500);
            function load_message(){
                $('#message').load('loadMessage.php')
            }

        </script>
        <nav>
        <a href="index.html">Virus.bat</a>
        <a href="index1.html">Virus.bat</a>
        <a href="index2.html">Virus Matrix</a>
        <a href="flapybird.html">Flappy Bird</a>
        <a href="mario-gh-pages/index.html">Mario</a>
        <a href="tetris.html">Tertris</a>
        <a href="snake.html">Snake</a>
        <a href="meme.html">Meme</a>
        <a href="parole 200k.html">parole</a>
        <a href="https://github.com/Destroyer9595">GitHub</a>
    </nav>
    <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
        <span class="line l1"></span>
        <span class="line l2"></span>
        <span class="line l3"></span>
    </button>
    
    <div id="stitle">
        <h1>chat</h1>
    </div>

    <script src="script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
    </body>
</html>