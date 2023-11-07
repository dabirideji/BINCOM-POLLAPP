<!DOCTYPE html>
<html>
<head>
    <title>Select LGA</title>
</head>
<body>
  <?php include "nav.php" ?>

    <h2>Select Local Government Area (LGA)</h2>
    <form action="get_lga.php" method="get">
        <label for="lga">Select an LGA:</label>
        <select name="lga_id" id="lga">
            <?php
            // Assuming $lgas is the array of LGAs fetched from the database

            // Replace this $lgas array with your data
            $lgas = [
                ["lga_id" => null, "lga_name" => "select lga..."],
                ["lga_id" => 1, "lga_name" => "Aniocha North"],
                ["lga_id" => 2, "lga_name" => "Aniocha - South"],
                ["lga_id" => 5, "lga_name" => "Ethiope East"],
                ["lga_id" => 6, "lga_name" => "Ethiope West"],
                ["lga_id" => 7, "lga_name" => "Ika North - East"],
                ["lga_id" => 8, "lga_name" => "Ika - South"],
                ["lga_id" => 9, "lga_name" => "Isoko North"],
                ["lga_id" => 10, "lga_name" => "Isoko South"],
                ["lga_id" => 11, "lga_name" => "Ndokwa East"],
                ["lga_id" => 12, "lga_name" => "Ndokwa West"],
                ["lga_id" => 13, "lga_name" => "Okpe"],
                ["lga_id" => 14, "lga_name" => "Oshimili - North"],
                ["lga_id" => 15, "lga_name" => "Oshimili - South"],
                ["lga_id" => 16, "lga_name" => "Patani"],
                ["lga_id" => 17, "lga_name" => "Sapele"],
                ["lga_id" => 18, "lga_name" => "Udu"],
                ["lga_id" => 19, "lga_name" => "Ughelli North"],
                ["lga_id" => 20, "lga_name" => "Ughelli South"],
                ["lga_id" => 21, "lga_name" => "Ukwuani"],
                ["lga_id" => 22, "lga_name" => "Uvwie"],
                ["lga_id" => 31, "lga_name" => "Bomadi"],
                ["lga_id" => 32, "lga_name" => "Burutu"],
                ["lga_id" => 33, "lga_name" => "Warri North"],
                ["lga_id" => 34, "lga_name" => "Warri South"],
                ["lga_id" => 35, "lga_name" => "Warri South West"]
            ];
            
            // Generating options based on the LGAs
            foreach ($lgas as $lga) {
                echo "<option  value='" . $lga['lga_id'] . "'>" . $lga['lga_name'] . "</option>";
            }
            ?>
        </select>
        <input type="submit" value="Select">
    </form>
</body>
</html>
