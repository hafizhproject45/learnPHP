<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Document</title>
    <style>
    #login {
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
        background-color: #1c211f;
        padding-bottom: 10vh;
    }

    #judul {
        font-size: 4em;
        font-style: bold;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }
    </style>
</head>

<body>
    <section id="login">
        <div class="container text-light">
            <div class="row justify-content-center align-items-center">
                <h1 id="judul" class="text-light text-center pb-5">Login Page</h1>
                <div class="col-sm-3 pt-5">
                    <form class="form-horizontal" action="login.php" method="post">
                        <div class="col">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username">
                        </div>
                        <div class="col">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                        </div>
                        <div class="col">
                            <input type="submit" class="form-control mt-4" name="login">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>