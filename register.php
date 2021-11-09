<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    
    <title>Document</title>

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
            <form action="register.html" class="login-form">
                <h4 style="color: #4C4DDC; margin-bottom: 50px; margin-top: 30px;">RR Store</h2>
                <h2 class="title" style="width: 500px; font-weight: bold; margin-top: 121px; margin-top: 18px;">Register</h2>
                <p style="margin-bottom: 70px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
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
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">I agree to term  of service and privacy police </label>
                  </div>
                <div class="btn-login">
                    <button type="submit" class="btn btn mt-2 text-white" style="background-color: #4C4DDC; height: 51px;  width: 414px; ">Register</button>
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
