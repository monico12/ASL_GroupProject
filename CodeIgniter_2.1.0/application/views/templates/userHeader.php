<?php
    if(isset($welcome))
    {
       $logoutAtt = array ('id' => 'logoutbtn');
        echo "<div id='welcomeuser'><h3>$welcome</h3>";
        echo anchor('userController/logout', 'Logout', $logoutAtt);
        echo "</div>";
    }
?>