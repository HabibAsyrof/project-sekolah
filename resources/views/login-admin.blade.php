<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="fontawesome-free-6.6.0-web">
    <title>Document</title>
    <link rel="stylesheet" href="css/admin.css">
</head>

<body>
    <div class="content">
        <div class="kiri">
            <h2>Login Admin</h2>
            <form class="format" action="/login" method="post">
                @csrf
                <div class="gmail">
                    <label for="">Gmail</label><br>
                    <input id="gmail" name="email" type="text"><br>
                </div>
                <div class="password">
                    <label for="">Password</label><br>
                    <input id="password" name="password" type="password"><br>
                </div>
                <button type="submit">Login</button>
            </form>
        </div>
        <div class="kanan">
            <div class="kata1">
                <h1></h1>
            </div>
        </div>
    </div>
</body>

</html>