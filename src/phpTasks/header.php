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
            echo "EVOLVE";
        }
        ?>
    </title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #333;
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
        <h1>Welcome to My Website</h1>
        <p>Your go-to source for web development tutorials</p>

    <nav>
        <a href="main.php">Home</a>
        <a href="aboutus.php">About Us</a>
        <a href="contactus.php">Contact Us</a>


    </nav>
    </header>


</body>
</html>
