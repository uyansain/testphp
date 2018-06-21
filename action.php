<?php
    if(isset($_POST['submit'])){
        $username=$_POST['username'];
        $title=$_POST['title'];
        $message=$_POST['message'];

        echo "Username: ".$username."<br>";
        echo "Title of message is: ".$title."<br>";
        echo "Message: ".$message;
    }


?>