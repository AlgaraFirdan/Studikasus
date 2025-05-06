<?php
$hobi = $_POST["hobi"];

$hobi = implode(', ', $hobi);

//rill anti error coiii

echo "nama saya adalah"  . " " . $_POST["nama_depan"]. " " . $_POST["nama_belakang"] . " ".
"saya sekolah tingkat" . " " . $_POST["tingkat"] . " " .
"dengan jenis kelamin" ." " . $_POST["jenis_kelamin"] .
" ". "dan hobi" . " " . $hobi;

?>