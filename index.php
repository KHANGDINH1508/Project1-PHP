<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Do an DevOps - Project 1</title>
    <style>
        body { font-family: sans-serif; text-align: center; padding: 20px; }
        .name-tag { color: blue; margin-top: 20px; }
    </style>
</head>
<body>
    <h1><u> DInh Tan Khang-cuoiky</u></h1>
    
    <h2>Demo DevOps: Project 1 (PHP + MySQL)</h2>
    
    <div class="status">
        <h3>Trang thai Database:</h3>
        <?php
        $servername = "localhost"; 
        $username = "root";
        $password = "";
        $dbname = "test_db";
        $conn = @new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            echo "<p style='color:red'>Chua ket noi Database (Simulation Mode)</p>";
        } else {
            echo "<p style='color:green'>Ket noi thanh cong!</p>";
        }
        ?>
    </div>
</body>
</html>
