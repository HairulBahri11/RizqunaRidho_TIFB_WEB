<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
       body {
            background-color: #F5F6F8;
           
           
        }

        

        i{
            position: absolute;
            margin-top: 19px;
            margin-left: 10px;
            width: 2px;
            padding-left: 5px;
        }
        .inputWithIcon input[type=text]{
            padding-left: 40px;
            height: 51px; 
            width: 414px;
            margin-bottom: 30px;
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
            <div class="login">
                <form action="" class="login-form">
                    <h4 style="color: #4C4DDC; margin-bottom: 50px; margin-top: 30px;">RR Store</h2>
                    <h2 class="title" style="width: 500px; font-weight: bold;">Login</h2>
                    <p style="margin-bottom: 90px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <label for="email">Email</label>
                    <div class="input-field">
                    <i class="far fa-envelope"></i>
                        <div class="inputWithIcon">
                        <input type="text" class = "form-control"placeholder="Enter your email">
                        </div>      
                    </div>
                    <label for="password">Password</label>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <div class="inputWithIcon">
                        <input type="password" placeholder="Enter your password" style="size: 10px;">
                        </div>
                    </div>
                    <div class="btn-login">
                        <button type="submit" class="btn btn mt-2 text-white" style="background-color: #4C4DDC; height: 51px;  width: 414px; ">Login</button>
                    </div>
                    <div class="signUp">
                   <p>Don’t have any account?<a href="register.php">Sign Up</a>  </p> 
                    </div>
                </form>
            </div>
        </div>
        <div class="col-lg-7">
                <img src="img/Rectangle 71.png" alt=".." style="width: 100%; height: 100%;">
        </div>

    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->
</body>

</html>