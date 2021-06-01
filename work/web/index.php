<?php

// 処理を止めたい require
require("../app/functions.php");

// 処理を止めなくても良い include
include("../app/_parts/_header.php");

$names = [
  "Taro",
  "Jiro",
  "Saburo",
];
?>


<form action="result.php" method="get">
  <input type="text" name="message">
  <?= "<br>" ?>
  <input type="text" name="username">
  <?= "<br>" ?>
  <textarea name="content"></textarea>
  <?= "<br>" ?>
  <!-- <select name="colors[]" multiple>
    <option value="orange">orange</option>
    <option value="pink">pink</option>
    <option value="gold">gold</option>
  </select>
  <?= "<br>"; ?> -->
  <!-- <label><input type="checkbox" name="colors[]" value="aaa">aaa</label>
  <label><input type="checkbox" name="colors[]" value="bbb">bbb</label>
  <label><input type="checkbox" name="colors[]" value="ccc">ccc</label>
  <?= "<br>" ?> -->
  <label><input type="radio" name="color" value="pink">pink</label>
  <label><input type="radio" name="color" value="gold">gold</label>
  <label><input type="radio" name="color" value="orange">orange</label>
  <?= "<br>"; ?>
  <button>Send</button>
  <a href="reset.php">[reset]</a>
</form>

<?php

include("../app/_parts/_footer.php");

