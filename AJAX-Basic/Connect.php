<?php 
    
    if(isset($_GET['name'])){
        echo 'Your Given Name is: '.$_GET['name'];
    }

    if(isset($_POST['name'])){
        echo 'Your Given Name is: '.$_POST['name'];
    }


?>