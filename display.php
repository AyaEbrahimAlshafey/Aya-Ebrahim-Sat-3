<?php 

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php if(isset($_SESSION['data'])){ ?>
    <ul>
    <?php foreach($_SESSION['data'] as $key=>$value){ ?>
        <li><?php echo "$key : $value"; ?></li>

    <?php } ?>
    </ul>
    <?php } ?>
</body>
</html>