<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Range Calculator</title>
</head>
<body>
    <h1>Range Calculator</h1>
    <form action="range_calculate.php" method="POST">
        <label>Enter the number:</label>
        <input type="number" name="start" required>
        <input type="number" name="finish" required>

        <input type="submit" value="Calculate"/>
    </form>
</body>
</html>