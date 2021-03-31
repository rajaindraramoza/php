<?php
$h = fopen ('file.txt', 'a');
for ($i=1;$i<=10; $i++) 
{ 
fwrite($h, $i);
}
fclose($h);
?>