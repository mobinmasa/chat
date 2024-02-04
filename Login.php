<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <form action=""> 
    <section class="m-r-1">

    <div class="border btn p-r-2  p-l-2 p-b">

        <h1 class="text_center font-size p-b">Log in</h1>

            <div class="text_center p-b-1 ">
                <label for="Username" class="p-r">Username</label>
                <input type="text"  name="Username"  id="Username" required>
            </div>

            <div class="text_center p-b-1">
                <label for="Password" class="p-r">Password</label>
                <input type=password" name="Password"  id="Password" required>
            </div>

            <div class="text_center p-b-1">
                <p>Not Sign Up Yet <a href="Register.php" class="text-violet">Sign in</a></p>
            </div>

            <div class="text_center">
            <button Type="submit" id="Login" class="btn-1 a text-white font-size-1 p-r-1 p-l-1">Log in</button>
            </div>

        </div>
    </section>
    </form>
</body>
</html>