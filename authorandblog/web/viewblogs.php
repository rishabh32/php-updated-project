<!DOCTYPE html>
<html>
<body>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table style="width:70%">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Published date</th>
        <th>Author</th>
        <th>email</th>
    </tr>
    <?php
     $sql="select * from blog where email='$_SESSION[email]'";
     $res=$db_handle->runbase($sql); 
                    if (! empty($res)) {
                        foreach ($res as $k) {
                            ?>
          <tr>
                    <td><?php echo $k['title']; ?></td>
                    <td><?php echo $k['description']; ?></td>
                    <td><?php echo $k['published_date']; ?></td>
                    <td><?php echo $k['author']; ?></td> 
                    <td><?php echo $k['email']; ?></td> 
                    <td><a href="index.php?action=edit&blogid=<?php echo $k['blogid']; ?>">Edit</a></td>
                    <td><a href="index.php?action=delete&blogid=<?php echo $k['blogid']; ?> onClick=\"return confirm('are you sure you want to delete??');\"">Delete</a></td>
          </tr>
                    <?php
                        }
                    }
                 
                    else
                   echo "There is no record to fetch";
                    ?>
</table><br/><br/>
<a href="index.php?action=logout">Logout</a>
</body>
</html>