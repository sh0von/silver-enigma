<!DOCTYPE html>
<html>
<head>
    <title>Admin Page</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f4f4f4;
            text-align: center;
            padding: 20px;
        }

        .admin-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .demo-content {
            text-align: left;
            margin: 20px 0;
        }

        .admin-btn {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Admin Page</h1>

        <div class="admin-container mt-4">
            <div class="demo-content"><p>Nothing Until youre admin</p>
                <?php
                // Check the value of the "admin" cookie and display content accordingly
                if (isset($_COOKIE['admin'])) {
                    if ($_COOKIE['admin'] == 1) {
                        echo '<p>This is your admin page where you can manage various aspects of your website.</p>
                            <p>Here\'s some demo content to get you started:</p>
                            <ul>
                                <li>Create and manage user accounts.</li>
                                <li>Edit and update website content.</li>
                                <li>View website analytics and reports.</li>
                                <li>Customize the website\'s appearance and settings.</li>
                                <li>csec{c00k13s_4r3_d3l1c10us}.</li>
                            </ul>';
                    }
                } else {
                    // Display blank content if the "admin" cookie is not set
                    echo '';
                }
                ?>
            </div>
        </div>
    </div>

    <?php
    // Set a cookie named "admin" with the value "0" using PHP if it's not already set
    if (!isset($_COOKIE['admin'])) {
        setcookie("admin", "0", time() + 3600, "/");
    }
    ?>

    <!-- Include Bootstrap JS and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
