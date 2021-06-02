<?php

// 処理を止めたい require
require("../app/functions.php");

define("FILENAME", "../app/messages.txt");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $message = trim($_POST["message"]);
  $message = $message !== "" ? $message : "...";
  // $fileName = "../app/messages.txt";
  $fp = fopen(FILENAME, "a");
  fwrite($fp, $message . "\n");
  fclose($fp);
  header("Location: http://localhost:8080/result.php");
  exit;
} 

// $fileName = "../app/messages.txt";
$messages = file(FILENAME, FILE_IGNORE_NEW_LINES);

// 処理を止めなくても良い include
include("../app/_parts/_header.php");


?>

<ul>
  <?php foreach ($messages as $message): ?>
    <li><?= h($message); ?></li>
  <?php endforeach; ?>
</ul>


<form action="" method="post">
<input type="text" name="message" >
  <!-- <input type="text" name="message">
  <input type="text" name="username">
  <textarea name="content"></textarea>
  <select name="colors[]" multiple>
    <option value="orange">orange</option>
    <option value="pink">pink</option>
    <option value="gold">gold</option>
  </select>
  <label><input type="checkbox" name="colors[]" value="aaa">aaa</label>
  <label><input type="checkbox" name="colors[]" value="bbb">bbb</label>
  <label><input type="checkbox" name="colors[]" value="ccc">ccc</label>
  
  <label><input type="radio" name="color" value="pink">pink</label>
  <label><input type="radio" name="color" value="gold">gold</label>
  <label><input type="radio" name="color" value="orange">orange</label> -->
  <!-- <a href="reset.php">[reset]</a> -->


  <button>Post</button>
  
</form>

<?php

include("../app/_parts/_footer.php");

