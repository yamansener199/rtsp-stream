<?
$data = file_get_contents('/var/www/html/video/999999.jpg');
$base64 = 'data:image/jpg;base64,' . base64_encode($data);
print_r($base64);
?>