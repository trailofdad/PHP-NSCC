<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Customers</title>
        <style type="text/css">
            table
            {
               border: 1px solid purple;
            }
            th, td
            {
               border: 1px solid mediumpurple;
            }
        </style>
        <link rel="stylesheet" href="bootstrap.min.css"/>
    </head>
    <body>
        <?php
            if(!empty($lastOperationResults)):
        ?>
        <h2><?php echo $lastOperationResults; ?></h2>
        <?php
            endif;
        ?>
        <h1>Current Actors:</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Actor ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($arrayOfActors as $actor):
                        
                    ?>
                        <tr>
                            <td><?php echo $actor->getID(); ?></td>
                            <td><?php echo $actor->getFirstName(); ?></td>
                            <td><?php echo $actor->getLastName(); ?></td>
                            <td>
                                <a href="<?php echo $_SERVER['PHP_SELF']; ?>?idUpdate=<?php echo $actor->getID(); ?>">
                                    <img src="images/edit_icon.png" height="25px" width="25px"/>
                                </a>
                            </td>
                            <td>
                            <a href="<?php echo $_SERVER['PHP_SELF']; ?>?deleteActor=<?php echo $actor->getID(); ?>"  onclick="return confirm('Really Delete?')">
                                <img src="images/delete_icon.png" height="25px" width="25px"/>
                            </a>
                            </td>
                        </tr>
                    <?php
                    endforeach;
                ?>
            </tbody>
            <tfoot></tfoot>
        </table>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <input type="submit" name="AddBtn" id="AddBtn" value="Add"/>
        </form>
    </body>
</html>
