<?php 
    // connection to database
    include_once('config.php');
    session_start();

    $search = "";
    $model_name = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Run this php if Search button is pushed
        if(isset($_POST['Search'])) {
            // Grabs input from the "Search Products" text field
            $searchQuery = $_POST['searchProducts'];
            // Searches database for names like the input
            $query = mysqli_query($conn, "SELECT * FROM product_inventory WHERE model_name = '$search' ");
            // Get number of matches
            $queryResult = mysqli_num_rows($query);
            // Makes sure the number of matches is greater then 0
            if($queryResult != 0) {
                // Search through table for match
                while($row = mysqli_fetch_assoc($result)){
                    $model_name = $queryResult["model_name"];
                    $model_name = mysqli_real_escape_string($conn,$model_name);
                }
                session_start();
                $_SESSION["model_name"] = $model_name;
            } else {
                // Let us know if no matches
                echo "no matching results";
           /* // Output amount of results
            echo "There are " .$queryResult. " results.";
            // Output the match from the database
            echo "<div> <p>" .$row['model_name']. "</p> </div>";*/
        
        }}
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
        <p> <?php echo $model_name  ?> </p>
    </div>
    </body>
</html>