<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\lstyle.css">
    <title>Doctor Login Form | M Cloud</title>
    <link rel="icon" href="../../images/logo.png">
</head>
<body>
    <div class="wrapper">
        <h2 class="title">Doctor Login</h2>
        <form action="doctorValidate.php" method="post" class="form">
            <div class="input-field">
                <label for="email" class="input-label">Email</label>
                <input type="email" name="email" id="email" class="input" placeholder="Enter your email" required>
            </div>
            <div class="input-field">
                <label for="password" class="input-label">Password</label>
                <input type="password" name="password" id="password" class="input" placeholder="Enter your password" required>
            </div>
            <div class="input-field">
                <label for="pemail" class="input-label">Patient Email</label>
                <input type="email" name="pemail" id="pemail" class="input" placeholder="Enter patient email" required>
            </div>
            <button class="btn" name="login">Login</button>
            <p>Not a Member? <a href="doctorRegistrationForum.php">Register</a></p>
        </form>
    </div>
</body>
</html>