<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Progression Calculator</title>
</head>
<body>

<h2>Arithmetic Progression Calculator</h2>

<form action="progression_result.php" method="post">
    <label for="firstTerm">Enter the first term:</label>
    <input type="number" id="firstTerm" name="firstTerm" required>
    <br/>
    <label for="commonDifference">Enter the common difference:</label>
    <input type="number" id="commonDifference" name="commonDifference" required>
    <br/>
    <label for="numTerms">Enter the number of terms:</label>
    <input type="number" id="numTerms" name="numTerms" required>
    <br/>
    <button type="submit">Calculate Arithmetic Progression</button>
</form>

</body>
</html>
