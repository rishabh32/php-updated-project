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
         $sql="select * from blog";
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
                    <td><a href="index.php?action=editadmin&blogid=<?php echo $k['blogid']; ?>">Edit</a></td>
                    <td><a href="index.php?action=deleteadmin&blogid=<?php echo $k['blogid']; ?>">Delete</a></td>
          </tr>
                    <?php
                        }
                    }
                    else
                   echo "There is no record to fetch";
                    ?>
</table><br/>
<a href="index.php?action=logout">Logout</a>