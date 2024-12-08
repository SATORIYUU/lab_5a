<localhost>
<lab_5a>
<lab5a_q1 class="php"></lab5a_q1>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>lab 5a Q1</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    $name = "Satrio Akbar";
    $matric_number = "2024001234";
    $course = "Information Systems";
    $year_of_study = "3rd Year";
    $address = "Malang, Indonesia";
    ?>

    <table>
        <thead>
            <tr>
                <th>Detail</th>
                <th>Information</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Name</td>
                <td><?php echo $name; ?></td>
            </tr>
            <tr>
                <td>Matric Number</td>
                <td><?php echo $matric_number; ?></td>
            </tr>
            <tr>
                <td>Course</td>
                <td><?php echo $course; ?></td>
            </tr>
            <tr>
                <td>Year of Study</td>
                <td><?php echo $year_of_study; ?></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><?php echo $address; ?></td>
            </tr>
        </tbody>
    </table>

    <div style="text-align: center; margin-top: 20px;">
</body>
</html>
