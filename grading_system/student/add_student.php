<?php

require_once ('config/config.php');

if (isset($_SESSION['isLoggedin'])) {
    header('location:login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootstrap</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="d-flex flex-column vh-100">
    <?php include 'Header.php'; ?>
    <div class="container">
        <h1>Welcome to Homepage 
            kabankalan Catholic College
        </h1>
        <a href="add_student">
        <table>
            <thread>
                <th>studentID</th><br><br>
                <th>Firstname</th><br><br>
                <th>Lastname</th><br><br>
                <th>DOB</th><br><br>
                <th>Email</th><br><br>
                <th>Address</th><br><br>

    
            </thread>
        </table>
        
        <?php

        
        ?>
    </div>
    <?php include 'Footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"></script>

</body> 
</html>