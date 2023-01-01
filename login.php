<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>login</title>
</head>
<?
    header('Content-Type: text/html; charset=utf-8');
    $uri = $_SERVER['REQUEST_URI'];
    $url = strstr($uri,'&',2);
    $url1 = strstr($uri,'&');
    echo($url);
    echo("<br>".$url1);
    $user = strstr($url,"user=");
    echo("<br>".$user);
    
    $dian = "'";
    $user = $_POST["user"];
    $user = $dian.$user.$dian;

    $pass = $_POST["pass"];
    $pass = $dian.$pass.$dian;

    $conn = new mysqli("localhost","mtrc","mtrc01","mtrc");
    
    if ($conn->connect_error) {
        die("连接失败：".$conn->connect_error);
    }
    else {
        die("连接成功");
    }


    
    ?>
<body>
</body>
</html>