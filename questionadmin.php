<?php
    /*
    * This page displays the Question Admin page. It's more or less a static page (JS nonwithstanding), so no Smarty objects need assigning.
    */
    $access = "mod";                    // Define access level
    include 'includes/before.php';      // Get initial boilerplate
    include 'includes/after.php';
    
    // Display the associated template
    $dir = dirname(__FILE__);
    $smarty->display("$dir/views/questionadmin.tpl");
?>