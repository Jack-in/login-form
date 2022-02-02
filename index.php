<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="index">
    <h2 >
        <?php
            session_start();

            if (isset($_SESSION["useruid"]))
            {
                echo "<h1>Hello, ". $_SESSION["useruid"]."</h1>";
                echo "<h2><p style='color:white;'>Happy to have you here. Welcome!</p></h2>";
            }
            else {
            echo "session"
            }
        ?>
    </h2>
</div>
</body>

