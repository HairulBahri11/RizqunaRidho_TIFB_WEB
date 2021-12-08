<?php

require ("config.php");
$error = '';
$validate = '';
//mengecek apakah form registrasi di submit atau tidak
if( isset($_POST['submit']) ){
        // menghilangkan backshlases
        $username = stripslashes($_POST['nama']);
        //cara sederhana mengamankan dari sql injection
        $username = mysqli_real_escape_string($con, $username);
        $telp    = stripslashes($_POST['notelp']);
        $telp    = mysqli_real_escape_string($con, $telp);
        $alamat    = stripslashes($_POST['alamat']);
        $alamat    = mysqli_real_escape_string($con, $alamat);
        $email    = stripslashes($_POST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_POST['password']);
        $password = mysqli_real_escape_string($con, $password);
        //cek apakah nilai yang diinputkan pada form ada yang kosong atau tidak
        if(!empty(trim($username)) && !empty(trim($telp)) && !empty(trim($alamat)) && !empty(trim($email)) && !empty(trim($password))){
                //memanggil method cek_nama untuk mengecek apakah user sudah terdaftar atau belum
                    //hashing password sebelum disimpan didatabase
                    $pass  = password_hash($password, PASSWORD_DEFAULT);
                    //insert data ke database
                    $query = "INSERT INTO users (nama, notelp, alamat, email, password ) VALUES ('$username','$telp','$alamat','$email','$pass')";
                    $result   = mysqli_query($con, $query);
                    //jika insert data berhasil maka akan diredirect ke halaman index.php serta menyimpan data username ke session
                    if ($result) {
                        $_SESSION['username'] = $username;
                        
                        header('Location: home.php');
                     
                    //jika gagal maka akan menampilkan pesan error
                    } else {
                        $error =  'Register User Gagal !!';
                    }
                } 
            }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Register</title>

    <style>
        body {
            background-color: #F5F6F8;
           
           
        }

        .login {
            margin-left: 100px;
            margin-top: 10%;
        }

        i{
            position: absolute;
            margin-top: 19px;
            margin-left: 10px;
            width: 2px;
            padding-left: 5px;
            color : #A3A3A3;
        }
        .inputWithIcon input[type=text]{
            padding-left: 40px;
            height: 51px; 
            width: 414px;
            margin-bottom: 10px;
            border: 1px solid #DFE0F3;
            border-radius: 5px 5px 5px 5px;
            
        }
        .inputWithIcon input[type=password]{
            padding-left: 40px;
            height: 51px; 
            width: 414px;
            margin-bottom: 30px;
            border: 1px solid #DFE0F3;
            border-radius: 5px 5px 5px 5px;
        }
        /* {
           background-image: url("img/Rectangle 72.png");
           background-repeat: no-repeat;
           background-size: cover; 
        } */

        .signUp p{
            margin-top: 177px;
            margin-bottom: 52px;
            
        }
        form{
            padding-left: 10%;
        }
        </style>
  </head>
  <body>
    
      <div class="row">
        <div class="col">
            <form action="register.php" method="POST" class="login-form">
                <h4 style="color: #4C4DDC; margin-bottom: 50px; margin-top: 30px;">RR Store</h2>
                <h2 class="title" style="width: 500px; font-weight: bold; margin-top: 121px; margin-top: 18px;">Register</h2>
                <p style="margin-bottom: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                
                <label for="nama">Nama</label>
                <div class="input-field">
                <i class="fas fa-user"></i>
                    <div class="inputWithIcon">
                    <input type="text" class = "form-control"  name="nama" id="nama"placeholder="Enter your name" required >
                    </div>      
                </div>
                <label for="nama">No Telp</label>
                <div class="input-field">
                <i class="fas fa-phone-alt"></i>
                    <div class="inputWithIcon">
                    <input type="text" class = "form-control"  name="notelp" id="nama"placeholder="Enter your phone number" required >
                    </div>      
                </div>
                <label for="alamat">Alamat</label>
                <div class="input-field">
                <i class="fas fa-map-marker-alt"></i>
                    <div class="inputWithIcon">
                    <input type="text" class = "form-control"  name="alamat" id="nama"placeholder="Enter your address" required >
                    </div>      
                </div>
                <label for="email">Email</label>
                <div class="input-field">
                <i class="fas fa-envelope"></i>
                    <div class="inputWithIcon">
                    <input type="text" class = "form-control"  name="email" id="email" placeholder="Enter your email" required >
                    </div>      
                </div>
                <label for="password" >Password</label>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <div class="inputWithIcon">
                    <input type="password" placeholder="Enter your password"  name="password" id="password" class = "form-control" required>
                    </div>
                </div>
                <div class="btn-login">
                    <button type="submit" class="btn btn mt-2 text-white" name="submit" style="background-color: #4C4DDC; height: 51px;  width: 414px; ">Register</button>
                </div>

                <div class="signUp">
               <p>Don’t have any account?<a href="login.php"> Login</a>  </p> 
                </div>
            </form>
        </div>
        <div class="col-lg-7">
            <img src="img/Rectangle 72.png" alt="" style="width: 100%; height: 100%;">
        </div>
      
    </div>
  </body>
</html>
