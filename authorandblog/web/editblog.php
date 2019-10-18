<form action="index.php?action=updateblog" method="POST">
<?php
 $sql="select * from blog where blogid='$blogid'";
 $_SESSION['blogid']=$blogid;
 $res=$db_handle->runbase($sql); 
 ?>
Title: <input type="text" name="title" value="<?php echo $res[0]['title']; ?>"><br/><br/>
Description: <input type="text" name="description" value="<?php echo $res[0]['description']; ?>"><br/><br/>
Published Date: <input type="date" name="published_date" value="<?php echo $res[0]['published_date']; ?>"><br/><br/>
Author: <input type="text" name="author" value="<?php echo $res[0]['author']; ?>"><br/><br/>
<input type="submit" value="Update"><br/><br/>
<a href="index.php?action=logout">Logout</a>
</form>