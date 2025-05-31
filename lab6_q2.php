<?php
$students = array(
    array("name" => "Alice", "program" => "BIP", "age" => 21),
    array("name" => "Bob", "program" => "BIS", "age" => 20),
    array("name" => "Raju", "program" => "BIT", "age" => 22)
);
?>

<table border="1" cellpadding="5" cellspacing="0">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>
    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>{$student['name']}</td>";
        echo "<td>{$student['program']}</td>";
        echo "<td>{$student['age']}</td>";
        echo "</tr>";
    }
    ?>
</table>
