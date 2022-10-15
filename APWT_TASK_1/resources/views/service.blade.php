<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="heading" id="navbar">
            <div id="menu">
                <a id="home" class="navbar-items" href="/"><p> Home &nbsp</a>
                <a class="navbar-items" href="/service"> Service &nbsp</a>
                <a class="navbar-items" href="/ourteam"> Our Team &nbsp</a>
                <a class="navbar-items" href="/about"> About Us &nbsp</a>
                <a class="navbar-items" href="/contact"> Contact Us</a>
            </div>
    </div>
        <div text="bold">My Services</div>
        <div class="container">
            <ul>
                <li>{{$ser[0]}}</li>
                <li>{{$ser[1]}}</li>
                <li>{{$ser[2]}}</li>
            </ul> 
        </div>
</body>
</html>