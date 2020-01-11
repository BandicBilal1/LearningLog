<?php
	require_once('config.php');
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Topics</title>
    <link rel="stylesheet" href="topics-style.css">
  </head>
  <body>

    <div>
    	<?php
    			if(isset($_POST['save'])){
    				$title = $_POST['title'];
    				$note = $_POST['notes'];

    				$sql = "INSERT INTO notes (title, note) VALUES(?,?)";
    				$stmtinsert = $db->prepare($sql);
    				$result = $stmtinsert->execute([$title, $note]);
    				if($result){
    					echo "Successufuly Added!!!";
    				}else{
    					echo 'There was error. ';
    				}
    			}
    	?>
    </div>

    <div class="login-box">
      <h1>Notes</h1>
        <form method="POST" action="#">
      <div class="textbox">
          <label for="title"><b>Title</b></label>
          <input type="text" placeholder="Enter Title of your topic" name="title">
      </div>
          <br>
          <label for="notes"><b>Notes</b></label><br>
          <textarea cols="50" maxlength="600" rows="10" placeholder="Write your notes" name="notes"></textarea>>
          <br>
          <button type="submit" name="save">Save</button>
        </form>
    </div>

  </body>
</html>
