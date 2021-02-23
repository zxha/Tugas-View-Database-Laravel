<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/fonts/material-icons.min.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
</head>

<body>
    @include('navonly')
    <div class="login-clean">
        <form action="{{ route('postlogin') }}" method="POST">
            @csrf
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"style="margin-bottom: 20px;"><img src="assets/img/game.png" /></div>
            <div class="form-group"><input type="email" class="form-control" name="email" placeholder="Email" /></div>
            <div class="form-group"><input type="password" class="form-control" name="password" placeholder="Password" /></div>
            <div class="form-group"><button class="btn btn-primary btn-block" type="submit" style>Log In</button></div>
            <a class="forgot" href="#">Forgot your email or password?</a>
        </form>
    </div>
    @include('footer')
</body>

</html>