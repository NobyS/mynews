<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
    <title>Login</title>
    <style>
    form-group {

        margin: 20px;
    }


    </style>


</head>
<body>

<div class="container">

<div class="panel panel-primary">
    <div class="panel-heading">Login</div>
  <div class="panel-body">
  
        <form action="index.php" method="POST" class="form-horizontal" role="form">
                <div class="form-group">
                    <legend>Anmeldung zur Nachrichtenseite</legend>
                </div>
                
        
        
        
            <div class="form-group">
                <label class="sr-only" for="">Username</label>
                <input type="text" class="form-control" name="loginname" placeholder="Username">
            </div>
            <div class="form-group">
                <label class="sr-only" for="">label</label>
                <input type="password" class="form-control" name="loginpasswort" placeholder="Password">
            </div>
        
            
        
            <button type="submit" class="btn btn-primary">Anfragen</button>
            <a href="logout.php"></a>
        </form>
</div>
</div>
    
</body>
</html>
