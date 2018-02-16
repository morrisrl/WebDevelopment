<?
   $action = $_REQUEST["action"];
   $userNum = $_REQUEST["more"];

   if (isset ($_REQUEST["teller"])){
      $counter = $_REQUEST["teller"];
   }
   else{
      $counter -=1;
   }

   if (isset ($_REQUEST["total"])){
      $balance = $_REQUEST["total"];
   }
   else{
      $balance += 1;
   }

   if($action == "Up"){
     if ($userNum){
        $balance += $userNum;
        $counter += 1;
     }
     else {
	$counter += 1;
        $balance += 1;
    }}
    else {
	if ($userNum){
         $balance -= $userNum;
         $counter +=1;
    }
     	else{
         $counter += 1;
         $balance -=1;
    }
    }
 ?>
<html>
  <head>
    <title>Stage Four</title>
  </head>
<b><h5>Stage Four</h5></b>
  <body>
    <form>
      Welcome, you have clicked the button: <?=$counter?> times. Balance is <?=$balance?>. <br>
      <input type="submit" name="action" value="Up">
      <input type="submit" name="action" value="Down">
      <input type="hidden" name="teller" value="<?=$counter?>">
      <input type="hidden" name="total" value="<?=$balance?>">
      <input type="text" name="more">
</body>
</form>
</html>
