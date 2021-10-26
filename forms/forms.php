<?php
    //to make sure that the server does not supress error 
    ini_set('display_error',1);
    ini_set('display_startup_error',1);
    error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Week_3 Forms</title>
</head>

<body>
    <h1>Processing Input from HTML Forms</h1>
    <h2>Login Form using GET</h2>
    <form method="get" action="forms.php">
        <fieldset>
            <legend>
                Login
            </legend>
            <label for="email">Email: </label>
            <input type="text" name="txtEmail" /><br />
            <label for="passwd">Password: </label>
            <input type="password" name="txtPass" /><br />
            <input type="submit" value="Submit" name="loginSubmit" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <?php
        //Collect data and echo back
        if(isset($_GET['loginSubmit'])){
            $email=$_GET['txtEmail'];
            $pass=$_GET['txtPass'];
            $_GET['loginSubmit'];
            echo 'Email :'.$email . ' Password :'.$pass;
            }
            else{
                echo 'Please enter the value.';
            }
        echo '<br/>';
        echo '<br/>';
    ?>

    

    <form method="post" action="forms.php">
        <fieldset>
            <legend>Comments</legend>
            <label for="">Email: </label>
            <input type="text" name="userEmail" value="<?php
                if(isset($_POST['userEmail'])){
                    echo $_POST['userEmail'];
                }
            ?>" /><br />
            <textarea rows="4" cols="50" name="comment"></textarea><br />
            <label for="">Click to Confirm: </label>
            <input type="checkbox" name="chkConfirm" value="agree"><br />
            <input type="submit" value="Submit" name="submitBtn" />
            <input type="reset" value="Clear" />
        </fieldset>
    </form>

    <?php
    //form validation
        if(isset($_POST['submitBtn'])){
            if(empty($_POST['userEmail'])){
                echo 'Email must not be empty';
            }
            else{
                if(filter_var($_POST['userEmail'],FILTER_VALIDATE_EMAIL)){
                    $email = $_POST['userEmail'];
                    $comment = $_POST['comment'];
                        if (isset($_POST['chkConfirm'])){
                            $confirm='Agreed<br />';
                            }else{
                                $confirm='Not Agreed<br />';
                            }                
                            echo 'Email :'.$email.'<br />'.'Comments : '.$comment.'<br />'.'Confirm :'.$confirm;
                        }
                    else{
                        echo 'Enter valid email';
                    }
                }
            }    
    ?>

<h2>Tax Calculator </h2>
    <form action="ext.php" method="get">
        <fieldset>
            <legend>Without TAX Calculator</legend>
            <label for="price">After Tax Price:</label>
            <input type="text" name="price" />
            <label for="rate">Tax Rate:</label>
            <input type="text" name="rate" />
            <input type="submit" value="Submit" name="calSubmit" />
            <input type="submit" value="clear" name="calClear" />
        </fieldset>
    </form>

    <?php
        $total = 0;
        
        if(isset($_GET['calSubmit'])){
            if(empty($_GET['price']) OR empty($_GET['rate'])){
                echo 'Please fill both the boxes';
            }
            else{
            if(preg_match('/^\d+(:?[.]\d{2})$/ ',$_GET['price'])){
                $price = $_GET['price'];
            }
            if(filter_var($_GET['rate'],FILTER_VALIDATE_INT)){
                $rate = $_GET['rate'];
            } 
            $total = (100*$price)/(100+$rate);
            echo '<h3>Price Before tax :£ '.number_format($total,2); 
            } 
        }
        else{
            //dont do anything
        }
        
    ?>


    <?php
    echo '<br />';
        if(isset($_GET['film'])){
            $films = $_GET['film'];
            echo 'Film : '.$films;
        }
        
        if(isset($_GET['book'])){
            $books = $_GET['book'];
            echo 'Book : '.$books;
            
        }
        
        if(isset($_GET['music'])){
            $musics = $_GET['music'];
            echo 'Music : '.$musics;
        }
    ?>
</body>
    <h1>Passing Data Appended to an URL</h1>
    <h2>Pick a category</h2>
    <a href="forms.php?film=Movie available is Time Trap">Films</a>
    <a href=" forms.php?book=book available is Harry Potter">Books</a>
    <a href=" forms.php?music=smelly Cat by Phoebe Buffay">Music</a>

    <footer>
        <strong> <a href="../watIndex.html">Home</a></strong>
    </footer>
    

</html>