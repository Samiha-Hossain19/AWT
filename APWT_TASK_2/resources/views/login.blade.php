<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <body>
        <div>
            <div class="heading" id="navbar">
        <div id="menu">
            <a class="navbar-items" href="/login"> Login &nbsp</a>
            <a class="navbar-items" href="/registration"> Registration &nbsp</a>
            <a class="navbar-items" href="/contact"> Contact</a>
            <a class="navbar-items" href="/edit">Edit Customer</a>
        </div>
    </div>
            <h3>LOGIN</h3><br>
            <form action="/login" method="POST">
            @csrf {{ csrf_field() }}
            <div class="form-group">
            <div><label>ID:</label></div>
            <div>
            <input type="text" placeholder="Enter your id" name="id"/>
            @error('id')
            {{$message}}
            @enderror
            </div>
            </div><br>
            <div class="form-group">
            <div>
            <label>PASSWORD: </label>
            <div>
            <input type="password" placeholder="Enter your password" name="password"/>
            @error('password')
            {{$message}}
            @enderror
            </div>
            </div><br>
            <div class="form-group">
            <button name="name">Submit</button>
            </div>
            </form>
        </div>
        <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>