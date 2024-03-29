<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo '<script>alert("Username atau password salah");window.location.href="login.php";</script>';
		}
	}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <title>OOTD - Log In</title>
</head>

<body>
    <div class="container" style="margin-top: 100px; width: 500px;">
        <div class="alert alert-danger" role="alert">
            <b>Penting! (Akun untuk sampel)</b><br>
            Untuk mengakses Admin :
            <ul>
                <li><b>Username</b> : admin</li>
                <li><b>Password</b> : admin</li>
            </ul>
            Untuk mengakses User :
            <ul>
                <li><b>Username</b> : dickysetiawan</li>
                <li><b>Password</b> : 13089</li>
            </ul>
        </div>
        <center><img src="assets/img/logo_ootd.jpg" alt="" width="100px"></center>
        <h2 class="text-center">OOTD - Outfit Of The Day</h2>
        <h4 class="text-center mb-4 color-primary" style="color: #000000;">Login</h4>
        <form action="checkLogin.php" method="post">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    name="username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary mx-auto my-2" name="login">Login</button>
            </div>
            <a href="register.php">
                <p class="text-center my-2">Dont Have an Account?</p>
            </a>
        </form>
    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>