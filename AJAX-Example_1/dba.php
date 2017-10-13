<?php 
    $connection = mysqli_connect('localhost', 'root', '', 'ajax_test');
    if(isset($_POST['user'])){
        $user  = mysqli_real_escape_string($connection, $_POST['user']);
        $query = "INSERT INTO users(name) VALUES('$user')";
        
        if(mysqli_query($connection, $query)){
            echo 'User Added Successfully';    
        }else{
            echo 'ERROR: '.mysqli_error($connection);
        }
    }
?>