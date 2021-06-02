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


<form action="result.php" method="post">
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

