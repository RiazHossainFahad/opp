<!DOCTYPE html>
<html>

<head>
    <title>Forgot Password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


    <script>
        $(document).ready(function() {
            $('[data-toggle="tooltip"]').tooltip({
                placement: "auto top"
            });
        });
    </script>
</head>
<style>
    body {
        overflow-x: hidden;
        background: #000
    }
    
    .main-content {
        width: 50%;
        height: 40px;
        margin: 10px auto;
    }
    
    .panel {
        height: 80px;
        border: 0px solid #000;
        margin-bottom: 5px;
        padding-top: 1%;
        text-align: center
    }
    
    .h3 {
        display: inline;
    }
    
    .well {
        text-align: center;
        border: none;
    }
    
    #signup {
        width: 60%;
        border-radius: 30px;
    }
</style>

<body>
    <div class="row">
        <div class="col-sm-12">
            <div class="well">
                <span class="h3">Online prescription Point</span>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="main-content">
                <div class="panel panel-default">
                    <h3> <strong>Change Password</strong></h3>
                </div>
                <hr>
                <div class="l_pass">
                    <form action="" method="post">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                            <input class="form-control" type="email" name="email" data-toggle="tooltip" title="Enter your registered Email" placeholder="Email Address" required>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input class="form-control" type="password" name="pass" placeholder="New Password" data-toggle="tooltip" title="Enter new password" required>
                        </div><br>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                            <input type="password" class="form-control" name="pass1" placeholder="Re-enter New Password" data-toggle="tooltip" title="Re-type the password" required>
                        </div><br>

                        <center>

                            <button id="signup" class="btn btn-info btn-lg" name="change">Change Password</button>
                            </br>
                            </br>
                            <a id="signup" href="/login" class="btn btn-danger btn-lg">Back </a>
                        </center>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>