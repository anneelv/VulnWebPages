<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello User!</title>
</head>
<body>
    <h1>Welcome to the XSS Playground</h1>
    <form method="GET" action="">
        <label for="name">Enter your name:</label>
        <input type="text" id="name" name="name" placeholder="Your name">
        <button type="submit">Submit</button>
    </form>

    <div>
        <h2>Response:</h2>
        <p>
            <?php
            if (isset($_GET['name'])) {
                // Vulnerable output (no sanitization or escaping)
                echo "Hello, " . $_GET['name'] . "!";
            } else {
                echo "Enter your name in the field above.";
            }
            ?>
        </p>
    </div>
</body>
</html>
