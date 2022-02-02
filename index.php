<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="index">
    <h2 >
        <?php

            if (isset($_GET["user"]))
            {
                echo "<h1>Hello, ". $_GET["user"]."</h1>";
                echo "<h2><p style='color:white;'>Happy to have you here. Welcome!</p></h2>";
            }
            
        ?>
    </h2>
</div>
</body>

