
<html>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <body>
        <div class='container thumbnail'>
    <a href="addcountry.php" style="text-align:center"> AddCountry</a>

    <?php

    $db = new mysqli('localhost','vahiniraju','','world_x');

    if($db->connect_errno != 0)
    {
        die("Error in DB connection $db->connect_errno ");
    }

    else 
    {
        printf("<table  class='table table-striped'>");
        printf("<tr><th>Country Code</th><th>Country Name</th></tr>");
        $quer = $db->query("SELECT name,code FROM country");
        while($row = $quer->fetch_assoc())
            {
                printf("<tr><td>%s</td><td>%s</td></tr>\n", $row['code'],$row['name']);
            }
        printf("</table>");
        printf("</div>");
       
    }
    $db->close;
    ?>
    </body>
   

</html>

