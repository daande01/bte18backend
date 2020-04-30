
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
      
      
    <title></title>
  </head>
  <body>  
<?php 

$bilar=array
(
array("rubrik"=>"saab 9-3 turbo cab","bild"=>"saab.jpg","pris"=>"100","beskrivning"=>"inte hel mellan hålen" ),
array("rubrik"=>"volvo t5r t-gul","bild"=>"saab.jpg","pris"=>"400 000","beskrivning"=>"elproblem, trasiga stag" ),
array("rubrik"=>"mazda","bild"=>"saab.jpg","pris"=>"2000","beskrivning"=>"det bästa pengar kan köpa" )
  
);

foreach ($bilar as $bil) {

echo<<<ARTIKEL
<div ><fieldset> 
<legend>{$bil['rubrik']} </legend>
<img src="imgs/{$bil['bild']}" >
{$bil['pris']}<br>
 {$bil['beskrivning']}
</fieldset></div>
ARTIKEL;
}
 ?>
 
 
 
 
</body>
</html>

