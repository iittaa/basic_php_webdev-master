<?php

require("../app/functions.php");

// cookie削除
// setcookie("color", "");

// sessionの削除
// $_SESSION["color"] = "";
unset($_SESSION["color"]);

// ページのリダイレクト方法
// header("Location: URL")
header("Location: http://localhost:8080/index.php" );

?>