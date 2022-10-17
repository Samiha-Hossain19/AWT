<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div>
            <div class="heading" id="navbar">
        <div id="menu">
            <a class="navbar-items" href="/login"> Login &nbsp</a>
            <a class="navbar-items" href="/registration"> Registration &nbsp</a>
            <a class="navbar-items" href="/contact"> Contact</a>
        </div>
        <h2>Register Here</h2>
        <form action="/registration" method="POST">
            {{csrf_field()}}
            
                <div><label>NAME: </label></div>
                <div>
                    <input type="text" placeholder="Enter your name" name="uname"/>
                    @error('uname')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>ID: </label></div>
                <div>
                    <input type="text" placeholder="Enter your id" name="id"/>
                    @error('id')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>PASSWORD: </label></div>
                <div>
                    <input type="password" placeholder="Enter your password" name="password"/>
                    @error('password')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>CONFIRM PASSWORD: </label></div>
                <div>
                    <input type="password" placeholder="Enter your password" name="cpassword"/>
                    @error('cpassword')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>GENDER &nbsp</label>
                @error('gender')
                {{$message}}
                @enderror
                </div>
                <div>
                    <div>
                        <input type="radio" name="gender"/>
                        <label>Male</label>
                    </div>
                    <div>
                        <input type="radio" name="gender"/>
                        <label>Female</label>
                    
                    </div>
                    
                </div>
            </div>
            <div>
                <div><label>EMAIL: </label></div>
                <div>
                    <input type="email" placeholder="Enter your email" name="email"/>
                    @error('email')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>Contact: </label></div>
                <div>
                    <input type="text" placeholder="Enter your contact number" name="contact"/>
                    @error('contact')
                    {{$message}}
                    @enderror
                </div>
            </div>
            <div>
                <div><label>DATE OF BIRTH: </label></div>
                <div>
                    <input type="date" name="dob"/>
                    @error('dob')
                    {{$message}}
                    @enderror
                </div>
            </div>

            <div>
                <button name="name">Submit</button>
            </div>

        </form>

    </div>

</body>
</html>