<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

    <?php  
        $name = "SARANYA A/P GANGAN";
        $matric = "CI230012";
        $course = "BACHELOR OF INFORMATION TECHNOLOGY";
        $year = "2025";
        $address = "No.837, Jalan Hijayu 2/56, Hijayu 2, 71950 Bandar Sri Sendayan, Negeri Sembilan Darul Khusus ";
    ?>

    <table border="1" cellpadding="5">
        <tr><td>Name</td><td><?php echo $name; ?></td></tr>
        <tr><td>Matric Number</td><td><?php echo $matric; ?></td></tr>
        <tr><td>Course</td><td><?php echo $course; ?></td></tr>
        <tr><td>Year of Study</td><td><?php echo $year; ?></td></tr>
        <tr><td>Address</td><td><?php echo $address; ?></td></tr>
    </table>

</body>
</html>