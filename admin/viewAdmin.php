<?php
include('connect.php');
$select=mysql_query("SELECT * FROM admin_details order by id desc");
$i=1;
while($userrow=mysql_fetch_array($select))
{
    $id=$userrow['id'];
    $username=$userrow['username'];
    $usermail=$userrow['emailid'];
    $usermobile=$userrow['mobileno'];
    $created=$userrow['created']
    ?>

    <div class="display">
        <p> USER NAME : <span style="color: #125acd"><?php echo $username; ?></span>
            <a href="deleteAdmin.php?id=<?php echo $id; ?>"
               onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete" style="color: #ff0084"> X </span></a>
        </p>
        <br />
        <p> EMAIL ID : <span style="color: #125acd"><?php echo $usermail; ?></span>
            <a href="editAdmin.php?id=<?php echo $id; ?>"><span class="edit" title="Edit" style="color: #ff0084"> E </span></a>
        </p>
        <br />
        <p> MOBILE NO : <span style="color: #125acd"><?php echo $usermobile; ?></span>
        </p>
        <br />
        <p> CREATED ON : <span style="color: #125acd"><?php echo $created; ?></span>
        </p>
        <br />
    </div>
<?php } ?>