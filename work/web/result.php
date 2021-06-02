<?php

// 処理を止めたい
require("../app/functions.php");

// ??←Null合体演算子
// $colorFromGet = $_GET["color"] ?? "transparent";
// setcookie("color", $colorFromGet);

// 処理を止めなくても良い
include("../app/_parts/_header.php");

// $message = filter_input(INPUT_GET, "message");
// $message = trim($_GET["message"]);
// $content = trim($_GET["content"]);
// $content = nl2br($content);
// $username = $_GET["username"];
// $colors = !empty($_GET["colors"]) ? implode(",", $_GET["colors"]) : "None selected";
// $numbers = empty($_GET["numbers"]) ? "None selected" : implode(",", $_GET["numbers"]);
// $radio = !empty($_GET["radio"]) ? $_GET["radio"] : "None selected";

// $color = filter_input(INPUT_GET, "color") ?? "transparent";

// "条件" ? "真の値" : "偽の値"
// $message = $message !== "" ? $message : "...";
// $content = $content !== "" ? $content : "...";


?>

<p><a href="index.php">Go back!</a></p>

<?php

include("../app/_parts/_footer.php");

