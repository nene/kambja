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
  "pubi" => array(
    "name" => "pubi",
    "title" => "Pubi",
    "file" => "doc/pubi.html",
  ),
  "saun" => array(
    "name" => "saun",
    "title" => "Saun",
    "file" => "doc/saun.html",
  ),
  "uritused" => array(
    "name" => "uritused",
    "title" => "Üritused",
    "file" => "doc/uritused.html",
  ),
  "eripakkumised" => array(
    "name" => "eripakkumised",
    "title" => "Eripakkumised",
    "file" => "doc/eripakkumised.html",
  ),
  "asukoht" => array(
    "name" => "asukoht",
    "title" => "Asukoht",
    "file" => "doc/asukoht.html",
  ),
);

if (isset($_GET["page"]) && isset($pages[$_GET["page"]])) {
  $page = $pages[$_GET["page"]];
}
else {
  $page = $pages["index"];
}

$title = $page["title"] ? $page["title"]." - " : "";

$nav = "<ul>\n";
foreach ($pages as $p) {
  if ($p["name"]) {
    $selected = $p["name"] == $page["name"] ? "selected" : "";
    $nav .= "<li class='$p[name] $selected'><a href='$p[name]'>$p[title]</a></li>\n";
  }
}
$nav .= "</ul></div>";


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="et" lang="et">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title><?php echo $title; ?>Kambja Hotell</title>
  <link rel="stylesheet" type="text/css" href="kambja.css" />
  <script type="text/javascript" src="jquery.js"></script>
  <script type="text/javascript" src="kambja.js"></script>
</head>
<body>

  <div id="container">
  <h1><a href="." title="avalehele"><strong>Kambja</strong> <small>Hotell</small></a></h1>

  <ul id="lang">
    <li class="selected"><a href="et">EST</a></li>
    <li><a href="en">ENG</a></li>
    <li><a href="ru">RUS</a></li>
  </ul>

  <div id='nav'><div>
  <?php echo $nav; ?>
  </div></div>

  <div id="body">
  
  <div id="content">
  <?php include $page["file"]; ?>
  </div>

  <div id="sidebar">
   <div id="animation">
     <div id="an-5"><div id="an-4"><div id="an-3"><div id="an-2"><div id="an-1"></div></div></div></div></div>
   </div>
   
   <h2>Partnerid:</h2>
   <ul>
    <li><a href="http://www.veinimaailm.ee/">Veinimaailm</a></li>
    <li><a href="http://www.meidaco.ee/">Jaana Ilusalong</a></li>
   </ul>
  </div>

  <p id="footer">Kambja Hotell: Tartumaal Kambja vallas Kambja külas.
  Tel: +372 4534 1231. E-post: hotell@kambjahotell.ee</p>
  
  </div>
  
  </div>
  
</body>
</html>

