

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php include "nav.php" ?>

<form action="get_polls.php" method="get">
    <label for="polling_unit_id">Select Polling Unit ID:</label>
    <input type="number" name="polling_unit_id" id="polling_unit_id">
    <input type="submit" value="Get Results">
</form>
</body>
</html>