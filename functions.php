<?php
session_start();
include "config.php";

function signup (){
    if (isset($_REQUEST['signup'])){
        $name= $_REQUEST['name'];
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $re_pass= $_REQUEST['re_pass'];

        if ($name!="" && $email!="" && $pass!="" && $re_pass!=""){

            if ($pass == $re_pass){

                include ("config.php");
                $qry= "INSERT INTO user (name,email,password,re_password) VALUE ('$name','$email','$pass','$re_pass')";
                $q_run= mysqli_query($conn, $qry);
                if ($q_run){
                    ?>
                    <div class="alert alert-success" role="alert">
                        <strong>Congrulation..!</strong>You are Register Successfully, Now you can login.!
                    </div>
                    <?php
                }
            }else{
                ?>
                <div class="alert alert-danger" role="alert">
                    <strong>Note..!</strong> Your Password and Conform password are not matched
                </div>
                <?php
            }
        }else{
            ?>
            <div class="alert alert-danger" role="alert">
                <strong>Note...!</strong> Please fill all the fields
            </div>
            <?php
        }
    }
}

function login(){
    if (isset($_REQUEST['signin'])){
        $email= $_REQUEST['email'];
        $pass= $_REQUEST['pass'];
        $qry = "SELECT * FROM user WHERE email='$email' AND password='$pass'";
        include "config.php";
        $q_run= mysqli_query($conn, $qry);

        if (mysqli_num_rows($q_run)==1){
            //echo "Login Successfull...!" .$result;

            $data= mysqli_fetch_assoc($q_run);
            $id= $data['id'];
            $_SESSION['uid']=$id;
            header("location: dashboard.php");
        }else{
            ?>

            <div class="alert alert-success" role="alert">
                <strong>Warning..!</strong>No Record Found,<strong>Please Signup First..!</strong>
            </div>
            <?php
        }




    }
}