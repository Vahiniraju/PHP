
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    </head>
    <body>
        

<div class="container thumbnail">
<h1 style="text-align:center">Add a Country</h1>

<div style="width: 30%; margin:30px auto" >
    <form action="addcountry.php" method="POST">
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Country Name" name="name" required>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" placeholder="Country Code" name="code" maxlength="3" minlength="3" required>
        </div>
        <div class="form-group" >
            <button class="btn btn-lg btn-primary btn-block"> Submit!</button>
        </div>
    </form>
    
    <?php 
     $code = $_POST["code"];
     $name = $_POST["name"];
     $db = new mysqli('localhost','vahiniraju','','world_x');
     if($code !== null && $name !== null)
     {
     $insert = "INSERT INTO country(Code,Name) values('$code','$name');";
     if($db->query($insert) === TRUE)
     {
         printf("New record created successfully");
     }
     else 
     {
         printf("Error: $db->error");
     }
     }
     $db->close;
    ?>
    <br>
    <a href="index.php">Go back</a>
</div>   
</div>
    </body>
    
    </html>