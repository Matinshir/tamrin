<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $max = $n1;
    if ($n2 > $max) $max = $n2;
    if ($n3 > $max) $max = $n3;
    echo $max;
    echo "<br>";
    echo $b = $n1 + $n2 + $n3;
    echo "<br>";
    echo $b / 3;
}
?>
<form method="post">
    <label> number1:</label><br/>
    <input type="number" name="n1"/></br>
    <label>number2:</label></br>
    <input type="number" name="n2"/></br>
    <label>number3:</label></br>
    <input type="number" name="n3"/></br>
    <input type="submit" name="submit" value="run"/>


</form>