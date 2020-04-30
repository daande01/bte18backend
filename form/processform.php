

  <?php 

$user_dirty=$_GET['username'];

$user_clean= filter_input(INPUT_GET, 'username',FILTER_SANITIZE_STRING);


  
  echo htmlspecialchars($user_dirty,ENT_QUOTES)." smutsig<br>";
  
  for($i=0;$i<10;$i++){
  echo $user_clean ." ren<br>";
}
   ?>
