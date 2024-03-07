
<!DOCTYPE html>
<html lang="en">
<head>
	 <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Human Resource Management</title>
   
    
    <!-- https://fonts.google.com/specimen/Open+Sans -->
    <link rel="stylesheet" href="css1/fontawesome.min.css">
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css1/bootstrap.min.css">
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css1/tooplate.css">
</head>

<body class="bg03">
    <div class="container">
        <div class="row tm-mt-big">
            <div class="col-12 mx-auto tm-login-col">
                <div class="bg-white tm-block">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img src="img/hr_icon.png" style="height: 100px; width: 100px">
                            <h2 class="tm-block-title mt-3">Login </h2>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <form action="login.php" method="post" class="tm-login-form">
                                <div class="input-group">

                                   


                                    <label for="username" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Username</label>
                                    <input name="email" type="text" class="form-control validate col-xl-9 col-lg-8 col-md-8 col-sm-7" id="" value="admin" required>
                                </div>
                                <div class="input-group mt-3">
                                    <label for="password" class="col-xl-4 col-lg-4 col-md-4 col-sm-5 col-form-label">Password</label>
                                    <input name="password" type="password" class="form-control validate" id="password" value="1234" required>
                                </div>
                                <div class="input-group mt-3">
                                    <button type="submit" name="submit" class="btn btn-primary d-inline-block mx-auto">Login</button>
                                </div>
                                <div class="input-group mt-3">
                                    <p><em>Just put a character to login.</em></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</body>

</html>
