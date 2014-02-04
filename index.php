<?php

$pages = array(
  "index" => array(
    "title" => "",
    "name" => "",
    "file" => "doc/index.html",
  ),
  "hinnakiri" => array(
    "name" => "hinnakiri",
    "title" => "Hinnakiri",
    "file" => "doc/hinnakiri.html",
  ),
  "toad" => array(
    "name" => "toad",
    "title" => "Toad",
    "file" => "doc/toad.html",
  ),
  "hotell" => array(
    "name" => "hotell",
    "title" => "Hotell",
    "file" => "doc/hotell.html",
  ),
  "korvalhoone" => array(
    "name" => "korvalhoone",
    "title" => "Kõrvalhoone",
    "file" => "doc/korvalhoone.html",
  ),
);

if (isset($_GET["page"]) && isset($pages[$_GET["page"]])) {
  $page = $pages[$_GET["page"]];
}
else {
  $page = $pages["index"];
}

$title = $page["title"] ? $page["title"]." - " : "";

$nav = "<ul id='nav'>\n";
foreach ($pages as $p) {
  if ($p["name"]) {
    $selected = $p["name"] == $page["name"] ? "selected" : "";
    $nav .= "<li class='$p[name] $selected'><a href='$p[name]'>$p[title]</a></li>\n";
  }
}
$nav .= "</ul>";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et" lang="et">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $title; ?>Kambja Hotell</title>
  <link rel="stylesheet" type="text/css" href="kambja.css" />
</head>
<body>

  <div id="container">
  <h1><a href="." title="avalehele">Kambja Hotell</a></h1>

  <?php echo $nav; ?>

  <div id="content">
    <?php include $page["file"]; ?>
  </div>

  
  <div id="partners">
    <h3>Partnerid</h3>
    
    <ul>
      <li><a href="http://www.veinimaailm.ee"><img src="img/veinimaailm.jpg" alt="Veinimaailm" /></a></li>
      <li><a href="">Veel keegi</a></li>
    </ul>
  </div>

  <p id="footer">Kambja Hotell, Kambja, ...</p>
  
  </div>
  
</body>
</html>

