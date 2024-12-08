<!DOCTYPE HTML>
<html lang="en">
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <?php
    // Fungsi untuk menghasilkan tabel perkalian
    function multiplication($multiplier) {
        $results = [];
        for ($i = 1; $i <= 12; $i++) {
            $results[] = [
                'no' => $i,
                'multiplier' => $multiplier,
                'answer' => $i * $multiplier
            ];
        }
        return $results;
    }

    // Memanggil fungsi dan menyimpan hasil
    $tableData = multiplication(2);
    ?>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Multiplier</th>
                <th>Answer</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($tableData as $row): ?>
                <tr>
                    <td><?php echo $row['no']; ?></td>
                    <td><?php echo $row['multiplier']; ?></td>
                    <td><?php echo $row['answer']; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
