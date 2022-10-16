<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <body>
        <div>
            <div class="heading" id="navbar">
        <div id="menu">
            <a class="navbar-items" href="/login"> Login &nbsp</a>
            <a class="navbar-items" href="/registration"> Registration &nbsp</a>
            <a class="navbar-items" href="/contact"> Contact</a>
        </div>
    </div>
            <h3>LOGIN</h3><br>
            <form action="/login" method="POST">
            @csrf {{ csrf_field() }}
            <div>
            <div><label>ID:</label></div>
            <div>
            <input type="text" placeholder="Enter your id" name="id"/>
            @error('id')
            {{$message}}
            @enderror
            </div>
            </div><br>
            <div>
            <div>
            <label>PASSWORD: </label>
            <div>
            <input type="password" placeholder="Enter your password" name="password"/>
            @error('password')
            {{$message}}
            @enderror
            </div>
            </div><br>
            <div>
            <button name="name">Submit</button>
            </div>
            </form>
        </div>
</body>
</html>