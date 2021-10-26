<?php
    include 'connection.php';
    //gather id for the record to be amended
    $id = $_GET['id'];
    //generate query to select record
    $query = "SELECT *FROM products WHERE ProductID ='$id' ";

    //run query
    $result = mysqli_query($connection, $query);
    
    //select row for amending and details to populate form below
    $row = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amend Product</title>
</head>
<body>
    <form method ="post" action = "updateProduct.php">
        <fieldset>
            <legend>Enter the Product Details</legend>
            <label for="id">Product ID: </label>
            <input type="hidden" name="id" value="<?php echo $row ['ProductID']?>"/><br /><br/>

            <label for="name">Product Name :</label>
            <input type="text" name="name" value = "<?php echo $row ['ProductName']?>" /><br /><br/>

            <label for="price">Price :</label>
            <input type="text" name="price" value="<?php echo $row ['ProductPrice']?>"/><br /><br/>

            <label for="image">Image FileName :</label>
            <input type="text" name="image" value ="<?php echo $row ['ProductImageName']?>"/><br /><br/>

            <input type="submit" value="Submit" name="submit" />
            <input type="submit" value="clear" name="clear" />
        </fieldset>
    </form>
</body>
</html>