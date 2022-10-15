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
    <div>
        <form method="get" enctype="application/x-www-form-urlencoded" action="/html/codes/html_form_handler.cfm">
        <label>Name</label><br>
        <input type="text" name="name" ><br>
        <label>ID</label><br>
        <input type="text" name="id"><br>
        <label>Course</label><br>
        <input type="text" name="course"><br>
        <label>Department</label><br>
        <input type="text" name="department"><br><br>
        <input type="submit" name="Submit">
        </form>
    </div>
</body>
</html>