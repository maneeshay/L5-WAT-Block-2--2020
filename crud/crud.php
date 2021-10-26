<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Product</title>
</head>
<body>
    <?php
        include 'displayProduct.php';
        echo '<br />';
    ?>
    <form action="insertProduct.php" method="post">
        <fieldset>
            <legend>Enter New Product Details</legend>
            <label for="name">Product Name :</label>
            <input type="text" name="name" /><br /><br/>

            <label for="price">Price :</label>
            <input type="text" name="price" /><br /><br/>

            <label for="image">Image FileName :</label>
            <input type="text" name="image" /><br /><br/>

            <input type="submit" value="Submit" name="submit" />
            <input type="submit" value="clear" name="clear" />
        </fieldset>
    </form>

    
</body>
</html>