<?php
    include_once('MainFanc.php');
    $user = new User();
    if ($_SESSION['authenticated']) {
        header('MyProfile.php');
    }


    const user = [
        'username' => 'Eli.Mahmoodi14@gmail.com',
        'password' => '1234',
        'name' => 'Elham',
        'lastname' => 'Mahmoodi'
    ];

    if (isset($_POST['username']) && isset($_POST['password'])){
        if ($user->authenticate($_POST['username'], $_POST['password'])) {
            $_SESSION['user'] = $user;
            header('location: MyProfile.php');
        } else {
            $message = 'wrong username or password';
           
        }
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <main class="main">
        <div class="container main__container">
            <div class="login_form_container">
                <form class="login_form" action="" method="POST" autocomplete="off">
                    <input type="email" name="username" id="username" placeholder="username" required>
                    <input type="password" name="password" id="password" placeholder="password" required>
                    <button type="submit">Login</button>
                    
                </form>
            </div>
        </div>
    </main>

   
</body>
</html>