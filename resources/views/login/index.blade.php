<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    
    <link rel="stylesheet" type="text/css" href="css/stylesheet.css">

    <link rel="stylesheet" type="text/css" href="/jQueryUI/jquery-ui.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/jQueryUI/jquery-ui.structure.min.css" media="all">
    <link rel="stylesheet" type="text/css" href="/jQueryUI/jquery-ui.theme.min.css" media="all">
    <script type="text/javascript" src="/jQueryUI/jquery-ui.min.js"></script>

    <script>
    $(document).ready(function(){
             $('[data-toggle="tooltip"]').tooltip({placement: "auto top"});
        });
    </script>
</head>
    <body>
        <div class="col-sm-12">
            <div class="well">
                <h3>Online prescription Point</h3>
            </div>
        </div>

        <div class="loginbox">
            <img src="avatar.png" class="avatar">
            <h1>Login</h1>
            <form method="POST">
                <p>UserMail</p>
                <input type="text" name="email" data-toggle="tooltip" title="Enter your email" placeholder="Email Address">
                <p>Password</p>
                <input type="password" name="pass" data-toggle="tooltip" title="Enter your password" placeholder="Password">
                <input type="submit" value="Login" data-toggle="tooltip" title="Click to login">
                <a id="back" data-toggle="tooltip" title="Back to landing page" class="btn btn-danger" href="/">Back</a><br>
                <a class="ancor" data-toggle="tooltip" title="Change your password" href="/change-password">Lost your password?</a><br>
                <a class="ancor" data-toggle="tooltip" title="Go to signup page" href="/register">Don't have an account?</a>
            </form>

        </div>

    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</html>