<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>  
</head>

<body>
    <div class="heading" id="navbar" class="sticky top-0 h-[70px] flex space-x-3 text-lg border-[#020d20] border-b-[1px] items-center w-full">
    <div id="menu">
        <a id="home" class="navbar-items" href="/"><p> Home </a>
        <a class="navbar-items" href="/service"> Service </a>
        <a class="navbar-items" href="/ourteam"> Our Team </a>
        <a class="navbar-items" href="/about"> About Us </a>
        <a class="navbar-items" href="/contact"> Contact Us </a>
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
        <input type="submit" name="Submit">

        </form>
    </div>
</body>
</html>