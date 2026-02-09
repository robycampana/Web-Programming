<?php
include 'header.php';
?>

<main>
    <h2>Exercise 4: Control flow and loops.</h2>
    <h2>If-Else</h2>
    <form method="post" action="">
        Name:
        <input type="text" name="name" required>
        <br><br>

        Age:
        <input type="number" name="age" required>
        <br><br>

        <button type="submit">Submit</button>
    </form>

    <?php
    if (isset($_POST['name']) && isset($_POST['age'])) 
    {
        $name = $_POST['name'];
        $age = $_POST['age'];

        echo "<br><strong>$name</strong>!</br>";

        if ($age >= 18)
        {
            echo "You are <strong>eligible</strong> for voting.";
        }
        else
        {
            echo "You are <strong>not eligible</strong> for voting.";
        }
    }
    ?>

    <h2>Switch Case</h2>
    <?php
    $month = date("F");  
    switch ($month)
    {
    case "August":
        echo "It's August, so it's holiday";
        break;
    default:
        echo "It is not August, this is February so I don't have any holidays.";
    }
    ?>

    <h2>For Loop</h2>
    <form method="post" action="">
        Enter a number:
        <input type="number" name="number" required>
        <br><br>

        <button type="submit">Show Table</button>
    </form>

    <?php
    if (isset($_POST["number"])) {
        $n = $_POST['number'];
        
        for ($i = 1; $i <= 10; $i++) {
            echo "$n x $i = " . ($n * $i) . "<br>";
        }
    }
    ?>

    <h2>While Loop</h2>
     <form method="post" action="">
        Enter a number:
        <input type="num" name="num" required>
        <br><br>

        <button type="submit">Show List</button>
    </form>

    <?php
    if (isset($_POST["num"])) {
        $nb = $_POST['num'];

        $i = 1;
        while ($i <= $nb) {
            echo $i . "<br>";
            $i++;
        }
    }
    ?>

    <h2>ForEach Loop/ Array List</h2>
    <?php
    $myarray = array("HTML", "CSS", "PHP", "JavaScript");

    echo "Elements of the array are:<br>";

    foreach ($myarray as $value) {
        echo $value . "<br>";
    }
    ?>


</main>

<?php
include 'footer.php';
?>