<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
        html,body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #EAEFEF;
        }
        header {
            background-color: #d20532;
            color: white;
            padding:30px 20px;
            text-align: center;
        }
        header h1 {
            margin: 0;
            font-size: 2.2em;
        }
        header p {
            margin-top: 6px;
            font-size: 1.1em;
            opacity: 0.95;
        }
        nav {
            padding : 10px;
            background-color: #3B9797;
            text-align: center;
            width: 100%;
        }
        nav a {
            color: #132440;
            margin: 0 18px;
            text-decoration: none;
            font-weight: bold;
            padding: 8px 14px;
            border-radius: 20px;
            transition: background-color 0.3s, transform 0.2s;
        }
        nav a:hover{
            background-color: #ffffff;
            color: #132440;
            transform: translateY(-2px);
        }
        main {
            padding: 20px;
            text-align: center;
            flex: -1;       
        }
        footer {
            background-color: #132440;
            color: white;
            padding: 10px;
            text-align: center;

        }
      
        

    </style>
</head>
<body>
    <header>
        <h1>Welcome to Roby's Website AKA learning assignment</h1>
        <p>This is where I'll be trying and test out things I learn.</p>
    </header>

    <nav>
        <a href="main.php">Home</a>
        <a href="aboutus.php">About Moi</a>
        <a href="contactus.php">Contact Moi</a>
        <a href="ex1.php">EX.1</a>
        <a href="ex3.php">EX.3</a>

    </nav>
    


</body>
</html>
