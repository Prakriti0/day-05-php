<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php
    $name = "This is <b>News</b> <br> <hr>";
    echo $name;
    $userRole= "subscriber";
    if($userRole == "admin"){
        echo "you are admin";
    }
    else{
        echo "not admin <br> <hr>";
    }

    for($i=0; $i<=2;$i++){
        echo "<div class='x'>Hello World! </div>";
    }
?>
    <?php
    $name1= "Prakriti";
    if ($name1 == "Pratik"){
        ?>
        <div class="a">You are a girl</div>
        <?php
    }else{
        ?>
        <div class="b">You are a boy</div>
        <?php
    }
    ?>
</body>
</html>