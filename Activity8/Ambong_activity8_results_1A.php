<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
        }
        .container {
            max-width: 500px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 4px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }

        h2 {
            color: #333;
            margin-top: 0;
        }

        p {
            margin-bottom: 10px;
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4c55af;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2> Form Submission Result </h2>
        <?php

        if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
            include 'Ambong_activity8_data_1A.php';

            $name = $_POST['name'];
            $email = $_POST['email'];
            $message = $_POST['message'];

            echo "<p><strong>Name:</strong>" . $name . "</p>";
            echo "<p><strong>Email:</strong>" . $email . "</p>";
            echo "<p><strong>Message:</strong>" . $message . "</p>";
        } else {
            echo "<p> No form data submitted </p>";
        }
        ?>

        <a href="Ambong_activity8_1A.html" class="btn">Go Back</a>
        <a href="Ambong_activity8_view_1A.php" class="btn">View Entries</a>
    </div>
</body>
</html>