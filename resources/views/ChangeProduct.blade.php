<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form enctype='multipart/form-data' method="POST" action="./action">
        @csrf
            <input name="name"> </input>
            <input name="description"> </input>
            <input name="value"> </input>
            <input name="promovalue"> </input>
            <input type="submit" value="Ola" />
    </form>
</body>
</html>