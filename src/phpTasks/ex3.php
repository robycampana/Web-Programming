<?php
include 'header.php';
?>

<main>
    <h2>Exercise 3: Variable, Strings & Operators.</h2>
    <h2>Form Creation</h2>
    <form method="post">
        <label>
            First name:
            <input type="text" name="firstname" required>
        </label>
        <br><br>

        <label>
            Last name:
            <input type="text" name="lastname" required>
        </label>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['firstname']) && isset($_POST['lastname'])) 
    {
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        echo "<h3>Hello $firstname $lastname, You are welcome to my site.</h3>";
    }
    ?>


    <h2>HTML Table</h2>
    <?php
    $g1 = 5;
    $g2 = 4;
    $g3 = 5;
    ?>

    <table border="1" cellpadding="5">
        <tr>
            <th>S.n.</th>
            <th>Name</th>
            <th>Grade</th>
        </tr>
        <tr>
            <td>1</td>
            <td>Jackie</td>
            <td><?php echo $g1; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td>Alicia</td>
            <td><?php echo $g2; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td>Brit</td>
            <td><?php echo $g3; ?></td>
        </tr>
    </table>

    <h2>String Variables</h2>
    <?php
    $str1 = "Hello";
    $str2 = "World";

    $combined = $str1 . " " . $str2;
    echo $combined;
    echo "<br>";
    echo "Length: " . strlen($combined);
    ?>

    <h2>Number Addition</h2>
    <?php
    $num1 = 298;
    $num2 = 234;
    $num3 = 46;

    $sum = $num1 + $num2 + $num3;
    echo "The total of 298, 234 and 46 is: " . $sum;
    ?>

    <h2>Browser Detection</h2>
    <?php
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

    if (strpos($userAgent, 'Chrome') !== false && strpos($userAgent, 'Edg') === false) 
        { $browser = "Google Chrome";} 
    elseif (strpos($userAgent, 'Firefox') !== false) 
        { $browser = "Mozilla Firefox";} 
    elseif (strpos($userAgent, 'Safari') !== false && strpos($userAgent, 'Chrome') === false) 
        { $browser = "Safari";} 
    elseif (strpos($userAgent, 'Edg') !== false) 
        { $browser = "Microsoft Edge";} 
    elseif (strpos($userAgent, 'MSIE') !== false || strpos($userAgent, 'Trident') !== false) 
        { $browser = "Internet Explorer";} 
    else
        { $browser = "an unknown browser";}

    echo "You are using: " . $browser;
    ?>

</main>

<?php
include 'footer.php';
?>