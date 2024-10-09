<?php
$regex="([0-9]+)";
$orignal="Completed graduation in 2004";
$replaceWith="2025";
$orignal=preg_replace($regex,$replaceWith, $orignal);
echo $orignal;