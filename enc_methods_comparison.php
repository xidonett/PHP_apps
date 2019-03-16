<?php session_start(); ?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<link href="https://cdn3.iconfinder.com/data/icons/tango-icon-library/48/system-lock-screen-512.png" rel="icon" />
<title>Encrypting methods in PHP 7. MD5 vs CRC32</title>
</head>
<body>
<form method="post">
 <input type="text" placeholder="String for encoding.." name="crypt[string]" />
 <input type="submit" value="Encode current string" name="crypt[button]" />
</form>

<?php
 
 if(isset($_REQUEST['crypt']['button'])){
  
  $string = $_REQUEST['crypt']['string'];
  echo "<h1>Original String: <span style='color: tomato; background-color: yellow;'>".$string."</span></h1>";
  echo "<h1>MD5 Encrypting method: <ins><i>".md5($string)."</i></ins></h1>";
  echo "<h1>CRC32 Encrypting method: <ins><i>".crc32($string)."</i></ins></h1>";
  
 }

?>

</body>
</html>
