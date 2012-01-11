<?php
    if(isset($welcome))
    {
        echo "<h2><span style='color:red;'>$welcome</span></h2>";
        echo anchor('userController/logout', 'Logout');
        echo "<br/>"; 
    }
?>