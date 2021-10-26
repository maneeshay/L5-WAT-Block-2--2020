<!DOCTYPE html>
<html lang="en">

<head>
    <title>Web Applications and Technologies</title>
    <link type="text/css" rel="stylesheet" href="main.css" />
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
    <header>
        <h1>Manisha Yadav C7227280</h1>
    </header>

    <section id="container">
        <h1>Fundamentals of PHP</h1>
        <h3>Selections</h3>
        <?php
            $day = date('l');
            echo 'It\'s '.$day;  //Print today's day.
            echo '<br />';
            //$day = 'wednesday';

            if($day == 'Wednesday'){
                echo 'It\'s midweek.';
            }
            else{
                echo 'It\'s not midweek.';
            }

            //24-hour time format 
            echo '<br />';
            $timeZone = 'Asia/Kathmandu';
            date_default_timezone_set($timeZone);
            $hour = date("H");
            $min = date("i");
            $sec = date("s");
            echo 'Current time is '.$hour .':'.$min.':'.$sec;
            echo '<br />';
            if($hour<12){
                echo 'Good Morning';
            }
            elseif($hour>=12 AND $hour<=18){
                echo 'Good Afternoon';
            }
            else{
                echo 'Good Night';
            }
            echo '<br />';
           
           
            $pass = 'password';
            if(strLen($pass)>4 AND strLen($pass)<10){
                echo 'Password length is valid';
            }
            else {
                echo 'password length is invalid';
            }

        ?>

        <?php
        echo '<h1>Arrays</h1>';
        echo '<br /><h3>Simple Array</h3>';
        
        //Displaying the array
        $products = array('t-shirt', 'Cap', 'mug');
        print_r ($products);
        echo '<br />';

        //Overwrite the item stored in any array
        $products[1] = 'shirt';
        print_r($products);
        echo '<br />';

        //Adding extra item in an array
        $products[] = 'skirt';
        print_r($products);
        echo '<br />';
        echo '<br />';

        echo 'Items in my Products array<br />';
        echo 'The item at index [0] :'.$products[0];
        echo '<br />The item at index [1] :'.$products[1];
        echo '<br />The item at index [2] :'.$products[2];
        echo '<br />The item at index [3] :'.$products[3];

        //Associative Array
        echo '<br /><h3>Associative Array</h3>';
        $customer = array('CustID'=>12, 'CustName'=> 'Sarah', 'CustAge' => 23, 'CustGender'=>'F');
        print_r($customer);
        echo '<br />';

        //Updating the value of age
        $customer['CustAge'] = 18;
        
        //Adding extra item in an array
        $customer['CustEmail'] = 'sarah@gmail.com';
        print_r($customer);
        echo '<br />';

        echo 'Items in my Customer array';
        echo '<br />The item at index [CustID] is: '.$customer['CustID'];
        echo '<br />The item at index [CustName] is: '.$customer['CustName'];
        echo '<br />The item at index [CustAge] is: '.$customer['CustAge'];
        echo '<br />The item at index [CustGender] is: '.$customer['CustGender'];
        echo '<br />The item at index [CustEmail] is: '.$customer['CustEmail'];
        echo '<br />';
        ?>
        <?php
            echo '<h3>Multi-Dimensional Array</h3>';
            $stock = array(
                'id1'=>array(
                    'description'=> 't-shirt',
                    'Price' => 9.99,
                    'stock' => 100,
                    'color' =>array('blue', 'green', 'red')
                ),
                'id2'=>array(
                    'description'=> 'Cap',
                    'Price' => 4.99,
                    'stock' => 50,
                    'color' =>array('blue', 'black', 'grey')
                ),
                'id3'=>array(
                    'description'=> 'mug',
                    'Price' => 6.99,
                    'stock' => 30,
                    'color' =>array('yellow', 'green', 'pink') 
                ),
            );
            echo '<br />';
            //print_r($stock);
           /* for($row =0;$row<4; $row++){
                echo '|'.$stock[$row]['description'].'|'.$stock[$row]['price'].'|'.$stock[$row]['stock'].'|'.$stock[$row]['color'];
                echo '<br />';
            }*/
            echo 'This is my order: <br />';
            echo $stock['id1']['color'][1].' '.$stock['id1']['description'];
            echo '<br />';
            echo 'Price: '.$stock['id1']['Price'];
            echo '<br />';
            echo $stock['id2']['color'][2].' '.$stock['id2']['description'];
            echo '<br />';
            echo 'Price: '.$stock['id2']['Price'];
            
        ?>
        <h1>Loops</h1>
        <?php
            echo '<h3>While Loop</h3>';
            $counter = 1;
            while($counter<6){
                echo 'Count = '.$counter;
                $counter++;
                echo '<br />';
            }  
            echo '<br />'; 
            echo '<br />';
        ?>

        <?php
            $shirtprice = 9.99;
            $counter = 1;
            
            echo '<table border= 1px solid black>';
                echo '<tr>';
                    echo '<th>Quantitiy</th>';
                    echo '<th>Price </th>';
                    while($counter <= 10){
                        $total = $counter*$shirtprice;
                        echo '<tr>';
                        echo '<td>'.$counter.'</td>';
                        echo '<td>£ '.$total.'</td>';
                        echo '</tr>';
                        //echo $counter.'- £'.$total;
                        $counter++;
                        echo '<br />';
                    }
            echo '</table>';
        ?>

        <?php
            echo '<h3>For Loops</h3>';
            $names = array("Shristi" , "Sweta", "Rima" , "Kabita" , "Manisha");
            for($i = 0; $i<5; $i++){
                echo $names[$i]. '<br />';
            }

            echo '<h3> Foreach Loop </h3>';
            $names = array("Shristi"=>"C7227293" , "Sweta" =>"C7727282", "Rima"=>"C7227234", "Kabita"=>"C7222789", "Manisha"=>"C7227280");
            foreach($names as $name=>$id){
                echo "Name : ".$name ."  ID : ".$id;
                echo '<br />';
            }
        ?>

        <?php
            $city=array('Peter'=>'LEEDS','Kat'=>'bradford','Laura'=>'wakeFIeld');
            echo '<br />';
                print_r($city);
                echo '<br />';
            foreach($city as $name => $place){
                $city[$name] = ucfirst(strtolower($place));
            }
            print_r($city);
                        
        ?>
        <br><br>

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

    </section>
    <footer>
        <strong> <a href="../watIndex.html">Home</a></strong>
    </footer>
</body>

</html>