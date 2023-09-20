<?php
$bdd = new PDO('mysql:host=88.173.124.3;dbname=message;charset=utf8;', 'root');
$recupMessage = $bdd->query('SELECT * FROM message');
while($message = $recupMessage->fetch()){
    ?>
    <div class="message">
        <h4><?= $message['pseudo']; ?></h4>
        <p><?= $message['message']; ?></p>
    </div>
    <?php
}
?>

