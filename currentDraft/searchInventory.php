<?php 
    if(isset($_POST['submit'])) {
        // Loads the config file to connect to database 
        include_once('config.php');

        $query = "SELECT * FROM  inventory_system";

        $result = mysqli_query($conn, $query)
            or die("Couldn't execute query");

        while($row = msqli_fetch_assoc())
    }
    /*    $searchQuery = $_POST['submit'];
        $searchQuery = preg_replace("#[^0-9a-z]#i","",$searchQuery);
        $query = mysql_query("SELECT * FROM inventory_system WHERE model_name LIKE '%searchQuery%'");
        while($row = mysql_fetch_array($query)) {
            $mname = $row['model_name'];
            $output .= '<div> '.$mname.'</div>';
        }
        print("$output");*/

    
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Search Function for POS</title>
        <!--Jquery from bootrap-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <!--bootsryap-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    </head>
    <body>
        <form>
            <div class="container" style="width:900px;">
                <!--Area to search for products, aka "search"-->
                <div align="center">
                    <div class="row">
                        <div class="col-sm">
                            <input type="text" name="search" class="form-control" id="search" placeholder="Search For Product"/>
                        </div>
                        <div class="col-sm">
                            <input type="submit" value="Search">
                        </div>
                    </div>
                </div>
                <!--Area that shows results from search, aka "result"-->
                <ul class="list-group" id="result"></ul>
            </div>
        </form>
    </body>
</html>
<script>
    // loads the functions for the document
    $(document).ready(function() {      
        // event begins when the user releases the button for search
        $('#search').keyup(function() {
            // creates null result field
            $('#result').html('');
            // variable to hold search input
            var searchField = $('#search').val();
            // function that creates a variable which matches the search as a regular expression
            var expression = new RegExp(searchField, "i");
            // loads JSON file 
            $.getJSON('products.json', function(data) { $.each(data, function(key, value) {
                // .search to see if the string matches the expression
                if (value.name.search(expression) != -1 || value.price.search(expression) != -1) {
                    // creates the list items which are the results from the search
                    $('#result').append('<li class="list-group-item link-class"> '+value.name+' | <span class="text-muted">'+value.price+'</span></li>');
                }});   
            });
        });
        // event which replaces the search area with chosen result
        $('#result').on('click', 'li', function() {
            // seperates price with a vertical bar
            var click_text = $(this).text().split('|');
            // attatch bar
            $('#search').val($.trim(click_text[0]));
            // creates null result field
            $("#result").html('');
        });
    });
</script>        