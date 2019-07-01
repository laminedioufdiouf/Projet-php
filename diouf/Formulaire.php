<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $http_server_vars['php_self'];?>" method="post">
    Name: <input type="text" name="personal [name]">
     Email: <input type="text" name="personal [email]"> 
     Login: <input type="text" name="personal [name]"><br>
    <input type="hidden" name="action" value="submitted">
    <input type="submit" name="submit" value="submit me!">
</form>

</body>
</html>