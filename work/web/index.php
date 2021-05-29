<?php

// 処理を止めたい
require("../app/functions.php");

// 処理を止めなくても良い
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
  <select name="colors[]" multiple>
    <option value="orange">orange</option>
    <option value="pink">pink</option>
    <option value="gold">gold</option>
  </select>
  <?= "<br>"; ?>
  <label><input type="checkbox" name="colors[]" value="aaa">aaa</label>
  <label><input type="checkbox" name="colors[]" value="bbb">bbb</label>
  <label><input type="checkbox" name="colors[]" value="ccc">ccc</label>
  <?= "<br>" ?>
  <label><input type="radio" name="radio" value="one">one</label>
  <label><input type="radio" name="radio" value="two">two</label>
  <label><input type="radio" name="radio" value="three">three</label>
  <?= "<br>"; ?>
  <button>Send</button>
</form>

<?php

include("../app/_parts/_footer.php");

