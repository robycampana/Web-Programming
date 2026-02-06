<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> <?php echo $title; ?></title>

    <title>
        <?php if(isset($title) && !empty($title)) 
        {
            echo $title;
        }
        else
        {
            echo "EVOLUTION";
        }
        ?>
    </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #fc58a4;
        }
        header {
            background-color: #8c1a68;
            color: white;
            padding: 20px;
            text-align: center;
        }
        nav {
            margin-top:10px;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
        }
        nav a:hover{
            text-decoration: underline;
        }
        main {
            padding: 20px;
            text-align: center;
        }
        footer {
            background-color: #333;
            color: white;
            padding: 10px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }

    </style>
</head>
<body>
    <header>
        <h1>Welcome to Roby's Website AKA learning assignment</h1>
        <p>This is where I'll be trying and test out things I learn.</p>

    <nav>
        <a href="main.php">Home</a>
        <a href="aboutus.php">About Moi</a>
        <a href="contactus.php">Contact Moi</a>


    </nav>
    </header>


</body>
</html>
