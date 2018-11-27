<?php
    include 'super.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Search Program</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div>
        <div class="dual-flex">
            <h1>The paragraph</h1>
            <div>
                <!-- <button id="edit"><i class="fa fa-pencil" style="font-size"></i></button> -->
            </div>
        </div>
    </div>
    
    <div class="center margin-top-10">
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
            <div>
                <p id="paragraph">                    
                    <?php echo $content; ?>
                </p>
            </div>
            <input type="text" name="search" class="margin-top-10"> <br>
            <input type="submit" name="find" id="find" value="find" class="margin-top-10">
        </form>
    </div>

    </-- Script -->
    <script src="main.js"></script>
</body>
</html>