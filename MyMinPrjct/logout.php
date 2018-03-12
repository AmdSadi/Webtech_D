<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <body>

        <?php
  
            session_unset(); 

            // destroy the session 
            session_destroy(); 

            header('Location: Index.php');
        ?>

    </body>
</html>