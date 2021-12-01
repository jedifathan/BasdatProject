<?php
$db=pg_connect('host=localhost dbname=tugasakhir user=postgres password=iostreamaja');
if( !$db ){
    die("Gagal terhubung dengan database: " . pg_connect_error());
}
?>
