<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fundamental Extension</title>
    <style>
        table ,th , td{
            border: 1px solid black;
            border-collapse: collapse;
        }
        th, td{
            padding:10px;
        }
    </style>
</head>
<body>
    <table >
        <tr>
            <th>Age/Member</th>
            <th>Discount</th>
        </tr>
        <tr>
            <td>Under 12</td>
            <td>50%</td>
        </tr>
        <tr>
            <td>Under 18</td>
            <td>25%</td>
        </tr>
        <tr>
            <td>Over 65</td>
            <td>25%</td>
        </tr>
        <tr>
            <td>Member</td>
            <td>10% - in addition to any other discount.</td>
        </tr>
    </table>
    <p>Please enter your details:</p>
    <form action ="tc.php" method ="post">
        <label for ="age">Age: </label>
        <input type = "text" id = "age" name = "age"><br><br>
        <label for ="membership">Membership </label><br />
        <input type="radio" id="yes" name="membership" value="yes">
        <label for="yes">Yes</label><br>
        <input type="radio" id="no" name="membership" value="no">
        <label for="no">No</label><br><br>
        <input type="submit" value="Submit" name = "submit">
    </form>

    <?php
        $total = 25;
        $discount = 0;

        if(isset($_POST['submit']) ){
            $age = $_POST['age'];
            $member = $_POST['membership'];

            if($age<12){
                if($member == 'yes'){
                    $discount = (65/100)*25;
                }
                else{
                    $discount = (50/100)*25;
                }
            }
           
            elseif($age>12 AND $age<18){
                if($member == 'yes'){
                    $discount = (35/100)*25;
                   
                }
                else{
                    $discount = (25/100)*25;
                }
            }
            elseif($age>65){
                if($member == 'yes'){
                    $discount = (35/100)*25;
                }
                else{
                    $discount = (25/100)*25;
                }
            }
            else{
                $discount =0;
            }
            echo 'Total = '. ($total-$discount);    
        }
      
        
    ?>
</body>
</html>