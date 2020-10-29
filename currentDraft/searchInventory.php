<?php 
    // connection to database
    include_once('config.php');
    // connection for query
    $con = mysqli_connect('localhost', 'root', '', 'GroceryStore');
    // Run this php if Search button is pushed
    if(isset($_POST['Search'])) {
        // Grabs input from the "Search Products" text field
        $searchQuery = $_POST['searchProducts'];
        // Searches database for names like the input
        $query = "SELECT * FROM inventory_system WHERE model_name LIKE '%searchQuery%'";
        // Get the result from the search
        $result = mysqli_query($con,$query);
        // Get number of matches
        $queryResult = mysqli_num_rows($result);
        // Search through table for match
        while($row = mysqli_fetch_assoc($result)){
            // Output the match from the database
            echo "<div> <p>" .$row['model_name']. "</p> </div>";
        }
        // Makes sure the number of matches is greater then 0
        if($queryResult > 0) {
            }
         else {
            // Let us know if no matches
            echo "no matching results";
        }
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Function for POS</title>
    </head>
    <body>
    <div align="center">
        <form action="searchInventory.php" method="post">
            <input type="text" name="searchProducts" placeholder="Search Products"/>
            <input type="submit" name="Search"/> 
        </form>
    </div>
    </body>
</html>