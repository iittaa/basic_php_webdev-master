<?php

// 処理を止めたい
require("../app/functions.php");

// 処理を止めなくても良い
include("../app/_parts/_header.php");

// $message = filter_input(INPUT_GET, "message");
$message = $_GET["message"];
$username = $_GET["username"];


?>

<p><?= h($message);?> by <?= h($username) ?> </p>
<p><a href="index.php">Go back!</a></p>


<?php

include("../app/_parts/_footer.php");

