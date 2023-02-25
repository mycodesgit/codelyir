<?php
    $msg = "";
    $msg_class = "";
    
    if (isset($_POST['btn-update'])) {
        
        $fname = stripslashes($_POST['fname']);
        $mname = stripslashes($_POST['mname']);
        $lname = stripslashes($_POST['lname']);
        $usertype = stripslashes($_POST['usertype']);
        $username = stripslashes($_POST['username']);
        $password = md5($_POST['password']);

        if (empty($error)) {

            $sql = "UPDATE tbl_users SET fname='$fname', mname='$mname', lname='$lname', usertype='$usertype', username='$username', password='$password' WHERE user_id =".$_GET['user_id'];

                if($DB->query($sql)){
                    $msg = "<i class='fa fa-check'></i> Updated Successfully";
                    $msg_class = "alert-success";
                } else {
                    $msg = "There was an error in saving update!";
                    $msg_class = "alert-danger";
                }
            
        }
    }
?>