<?
   $action = $_REQUEST["action"];
   if (isset ($_REQUEST["teller"])){
     $counter = $_REQUEST["teller"];
     }
   else {
     $counter -= 1;
     }

   if($action == "Down"){
     $counter -= 1;
    }
    else {
	$counter += 1;
    }


 ?>
<html>
  <head>
    <title>Stage Two</title>
  </head>
<b><h5>Stage Two: Two Buttons</h5></b>
  <body>
    <form>
      Welcome, you have clicked the button: <?=$counter?> times. <br>
      <input type="submit" name="action" value="Up">
      <input type="submit" name="action" value="Down">
      <input type="hidden" name="teller" value="<?=$counter?>">
    </form>
  </body>
</html>

