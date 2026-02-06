<!DOCTYPE html>
<html lang="en">
    <?php include 'header.php'; ?>
<head>
    <meta charset="UTF-8">
    <title>Exercise 1: Getting Started with PHP - Roby</title>
</head>



<body>

<h3>Task 3: PHP Output</h3>

<?php
echo 'Hello! My name is Roby';
?>

<h3>Task 3: PHP Variable</h3>

<?php
$title = "PHP is intriguing.";
echo "<h4>$title</h4>";
?>

<h3>Task 3: Student Grades</h3>

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

<h3>Development Environment Screenshot</h3>
<img src="Screenshot.png" alt="Environment setup screenshot" width="300">

<?php include 'footer.php'; ?>
</body>
</html>