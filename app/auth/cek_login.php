<?php

session_start();
include "../../api.php";

$uname = $_POST['uname'];
$pass = $_POST['password'];

if(isset($_POST['uname']) && isset($_POST['password'])){
    try {
        if(empty($uname)){
            header("Location: ../pages/login.php?error=User Name is required");
            exit();
    
        }elseif(empty($pass)){
            header("Location: ../pages/login.php?error=Password is required");
            exit();
        }else{
            $result=getData('http://localhost:8080/user/admin/'.$uname);
    
            if(count($result)> 1){

                if(md5($pass)==$result['password']){
                    echo "Logged in!";
                    $_SESSION['username']=$result['username'];

                    $_SESSION['nama']=$result['nama'];
                    $_SESSION['no_induk']=$result['no_induk'];
                    $_SESSION['level']=$result['level'];
                    header("location: ../../");
                    exit();
                }
                else{
                    header("Location: ../pages/login.php?error=Incorrect Username or password");
                    exit();
                }
            }else{
                header("Location: ../pages/login.php?error=Incorrect Username or password");
                exit();
            }
    
        }
    } catch (\Throwable $th) {
        echo $th;
    }
    
}else{
    header("Location: ../pages/login.php?error=Harap Isi Field");
    exit();
}
?>