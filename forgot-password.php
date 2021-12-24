<?php
require ("config.php");
  // inisialisasi session
    session_start();

    if(isset($_POST['submit'])) {

    $email = mysqli_real_escape_string($con,$_POST['txt_email']);
    $telepon = mysqli_real_escape_string($con,$_POST['telepon']);
    

    if(!empty(trim($email)) && !empty(trim($telepon))) {
        $query = "SELECT * FROM users where email = '$email'";
        $result = mysqli_query($con, $query);
        $num = mysqli_num_rows($result);

        while ($row = mysqli_fetch_array($result)) {
            $id = $row['userid'];
            $userVal = $row['email'];
            $passVal = $row['password'];
            $userName = $row['nama'];
            $alamat = $row['alamat'];
            $noTelp = $row['notelp'];

        }
        if($num != 0) {
            if($userVal==$email && $noTelp==$telepon){
                // header('Location: home.php?user_fullname='. urlencode($userName));
                $_SESSION['userid'] = $id;
                $_SESSION['nama'] = $userName;
                $_SESSION['email'] = $userVal;
                $_SESSION['alamat'] = $alamat;
                $_SESSION['notelp'] = $noTelp;
                
               
                echo "<script> alert('This is your password :   $passVal ');  location = 'login.php' </script>";

            }else{
                ?>
                <script>
                  alert('No Telepon salah');
                  location = 'forgot-password.php';
                </script>
                <?php
              }
          }else{
              ?>
              <script>
                alert('User tidak ditemukan');
                location = 'forgot-password.php';
              </script>
              <?php
          }
      }else{
          $error = 'Data tidak boleh kosong!!';
          echo $error;
      }
}
     
    ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>

    <title>Forgot Password</title>

    <style>
        body {
            background-color: #F5F6F8;
        }

        i {
            position: absolute;
            margin-top: 19px;
            margin-left: 10px;
            width: 2px;
            padding-left: 5px;
        }

        .inputWithIcon input[type=text] {
            padding-left: 40px;
            height: 51px;
            width: 414px;
            margin-bottom: 10px;
            border: 1px solid #DFE0F3;
            border-radius: 5px 5px 5px 5px;

        }

        .inputWithIcon input[type=number] {
            padding-left: 40px;
            height: 51px;
            width: 414px;
            margin-bottom: 30px;
            border: 1px solid #DFE0F3;
            border-radius: 5px 5px 5px 5px;
        }

        form {
            padding-left: 10%;
        }

        .col {
            padding: 0
        }
    </style>
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="login">
                    <form class="forgot-password.php" method="POST">
                        <h4 style="color: #4C4DDC; margin-bottom: 50px; margin-top: 30px;">RR Store</h2>
                            <h2 class="title" style="width: 500px; font-weight: bold;">Forgot Password</h2>
                            <p class="mb-3">Enter your email and telepon correctly for get your password</p>
                            <label for="email">Email</label>
                            <div class="input-field">
                                <i class='bx bx-envelope'></i>
                                <div class="inputWithIcon">
                                    <input type="text" class="form-control" name="txt_email" id="email"
                                        placeholder="Enter your email" required>
                                </div>
                            </div>
                            <label for="telepon">Telepon</label>
                            <div class="input-field">
                                <i class='bx bx-lock-alt'></i>
                                <div class="inputWithIcon">
                                    <input type="number" class="form-control" name="telepon" id="telepon"
                                        placeholder="Enter your phone number">
                                </div>
                            </div>
                            <div class="link forget-pass text-left"><a href="forgot-password.php" ></a>
                            </div>
                            <div class="btn-login">
                                <button type="submit" class="btn btn mt-3 text-white" name="submit"
                                    style="background-color: #4C4DDC; height: 51px;  width: 414px; ">Verify</button>
                            </div>

                            <div class="signUp mt-3">
                                <p>Don’t have any account?<a href="register.php">Sign Up</a> </p>
                            </div>
                    </form>
                </div>
            </div>
            <div class="col">
                <img src="img/Rectangle 71.png" alt=".." style="width: 100%; height: 100%; object-fit: cover">
            </div>

        </div>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>