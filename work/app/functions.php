<?php 
// sessionを使うよの意味
// session_start();

function h($str){
  return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

// トークン作成関数
function createToken(){
  // $_SESSION["token"]が定義されていなかった場合
  if (!isset($_SESSION["token"])) {
    $_SESSION["token"] = bin2hex(random_bytes(32));
  }
}

// トークン一致確認関数
function validateToken(){
  if (empty($_SESSION["token"]) || $_SESSION["token"] !== filter_input(INPUT_POST, "token")) {
    exit("Invalid post request!");
  }
}

session_start();

?>