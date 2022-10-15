<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  
</head>

<body>
    <nav>
        <div class="heading" id="navbar" class="sticky top-0 h-[70px] flex space-x-3 text-lg border-[#020d20] border-b-[1px] items-center w-full">
    <div id="menu">
        <a id="home" class="navbar-items" href="/">
        <p>Home</p>
        </a>
        <a class="navbar-items" href="/service">
        <p>Service</p>
        </a>
        <a class="navbar-items" href="/ourteam">
        <p>Our Team</p>
        </a>
        <a class="navbar-items" href="/about">
        <p>About Us</p>
        </a>
    </div>
    <div>
        <a class="navbar-items" href="/contact">
            <p>Contact Us</p>
        </a>
    </div>
</div>
    <div>
        <form method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <label>Name</label><br>
        <input type="text" name="name"><br>
        <label>ID</label><br>
        <input type="number" name="id"><br>
        
        <label>Course</label><br>
        <input type="text" name="course"><br>

        <label>Department</label><br>
        <input type="text" name="department"><br><br>

        </form>
    </div>
</body>
</html>