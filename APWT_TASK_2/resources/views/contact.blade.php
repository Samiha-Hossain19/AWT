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
        <div>
        <h2>Contact Us<h2>
        </div>
        <form action="/contact" method="post">
                @csrf {{ csrf_field() }}
                    <div>
                    <div><label>Email: </label></div>
                    <div>
                        <input type="email" placeholder="Enter your email" name="email"/>
                        @error('email')
                        {{$message}}
                        @enderror
                    </div>
                    </div>
                </div>
                <div>
                    <div><label>Subject: </label></div>
                    <div><input type="text" placeholder="Enter your subject" name="subject"/>
                    @error('subject')
                    {{$message}}
                    @enderror
                    </div>
                </div>
                <div>
                    <div>
                        <div><label>Describe Here: </label></div>
                        <div>
                        <textarea type="text-area" placeholder="Type your text" name="text"></textarea>
                        @error('text')
                        {{$message}}
                        @enderror
                        </div>
                    </div>
                </div>
                <div>
                    <button name="send">Send</button>
                </div>
            </form>
        </div>
</body>
</html>