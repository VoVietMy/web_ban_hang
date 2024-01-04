<?php
//$mysqli = new mysqli("localhost","if0_35674391","pWrVUO6mFrsiZ89","if0_35674391_web_ban_linhkien")
//$mysqli = new mysqli("localhost","id19532308_root","123456tB@.","id19532308_root");
$mysqli = new mysqli("localhost","root","","web_ban_linhkien");
// Check connection
if ($mysqli -> connect_error) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}
?>