<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Send e-mail</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
</head>
<body>
    <main class="container">
        <div class="row">
            <div class="col-12">
                <br><h1>Send E-mail</h1><br>
            </div>
        </div>
        <form class="container" method="post" action="{{route('sendmail')}}">
            <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
            <div class="row">
                <label class="col-1" for="email">Email: </label>
                <input class="col-3"required type="email" name="email" id="email"/>
            </div>
            <br>
            <div class="row">
                    <label class="col-1" for="subject">Subject: </label>
                    <input class="col-3" required type="text" name="subject" id="subject"/>
                </div>
            </div>
            <br>
            <div class="row">
                <label class="col-1" for="message">Message: </label><br>
            </div>
            <div class="row">
                <textarea class="col-4" required name="message"></textarea><br/>
            </div>
            <br>
            <div class="row">
                <button class="col-2 offset-1" type="submit">Send</button>
            </div>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
</body>
</html>