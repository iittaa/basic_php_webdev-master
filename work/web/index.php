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
  <input type="text" name="username">
  <button>Send</button>
</form>

<?php

include("../app/_parts/_footer.php");

