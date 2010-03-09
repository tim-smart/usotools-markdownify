<?php

$html = $_POST['html'];

if ($html) {
  $html = stripslashes($html);
} else {
  exit();
}

include 'markdownify.php';

$markdownify = new Markdownify();

echo $markdownify->parseString($html);

?>
