<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>View</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <?php
          include 'Function.php';
   
$con = mysqli_connect("localhost", "root", "", "Tshimologong");
//getting the total number of surveys
$query_num_rows = "select* from survey ";
$result = mysqli_query($con, $query_num_rows);
$num_surveys = mysqli_num_rows($result);

//Calculating the average age
$query_avg_age = "SELECT AVG(age) AS average FROM survey";
$query_resultavg = mysqli_query($con, $query_avg_age);
while ($row = mysqli_fetch_assoc($query_resultavg)) {
    $average_age = $row['average'];
    $average_age = round($average_age, 1);
}

//Getting the oldest person in the database
$query_oldest_person = "SELECT MAX(age) AS age FROM survey";
$oldest_person_result = mysqli_query($con, $query_oldest_person);

while ($row = mysqli_fetch_assoc($oldest_person_result)) {
    $oldest_person = $row['age'];
}
//Getting the youngest person in the database
$query_youngest_person = "SELECT MIN(age) AS age FROM survey";
$query_results = mysqli_query($con, $query_youngest_person);

while ($row = mysqli_fetch_assoc($query_results)) {
    $youngest_person = $row['age'];
}


//People who like to eat out
$query_eat = 'SELECT * FROM `survey` WHERE eat_out="Strongly Agree(1)" OR eat_out="Agree(2)"';
$resultEat = mysqli_query($con, $query_eat);
$numEat = mysqli_num_rows($resultEat);

$eatave = round($numEat / $num_surveys, 1);
$resultavge = 'SELECT AVG(age) AS average FROM survey WHERE eat_out="Strongly Agree(1)" OR eat_out="Agree(2)" OR eat_out="Neutral(3)"';
$query_resultavge = mysqli_query($con, $resultavge);
while ($row = mysqli_fetch_assoc($query_resultavge)) {
    $averagee = $row['average'];
    $averagee = round($averagee, 1);
}
//People who like to watch movies

$query_movies = "SELECT * FROM `survey` WHERE like_movies='Strongly Agree(1)' OR like_movies='Agree(2)' OR like_movies='Neutral(3)'";
$resultMovies = mysqli_query($con, $query_movies);
$numMovies = mysqli_num_rows($resultMovies);

//People who like to watch TV
$TV = 'SELECT * FROM `survey` WHERE like_tv="Strongly Agree(1)" OR like_tv="Agree(2)" OR like_tv="Neutral(3)" ';
$resultTV = mysqli_query($con, $TV);
$numTV = mysqli_num_rows($resultTV);


//People who like to listen to radio
$radio = 'SELECT * FROM `survey` WHERE like_radio="Strongly Agree(1)" OR like_radio="Agree(2)" OR like_radio="Neutral(3)"';
$resultradio = mysqli_query($con, $radio);
$numradio = mysqli_num_rows($resultradio);

$object = new Calculator();
$pizza = $object->average_for_food("Pizza");
$pasta = $object->average_for_food("Pasta");
$papandwors = $object->average_for_food("pap_and_wors");
        
        ?>


    <center><h1 class="head">Tshimologong Survey</h1></center>
    <center><table  border="3" class="table" class="td">
            <tr class="bg">
                <td>
                    <h3>Total number of surveys:</h3>
                </td>
                <td>
                    <h3><?php echo $num_surveys ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>average age:</h3>
                </td>
                <td>
                    <h3><?php echo $average_age; ?></h3>
                </td>
            </tr>
            <tr class="bg">
                <td>
                    <h3>Oldest person who participated in survey :</h3>
                </td>
                <td>
                    <h3><?php echo $oldest_person ;?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>Youngest person who participated in survey:</h3>
                </td>
                <td>
                    <h3><?php echo $youngest_person; ?></h3>
                </td>
            </tr>            
            <tr class="bg">
                <td>
                    <h3>Percentage of people who like Pizza:</h3>
                </td>
                <td>
                    <h3><?php echo round($pizza,1) . "%" ?></h3>
                </td>
            </tr>
            <tr>

                <td>
                    <h3>Percentage of people who like Pasta :</h3>
                </td>
                <td>
                    <h3><?php echo round($pasta,1) . "%" ?> </h3>
                </td>
            </tr>
            <tr class="bg">
                <td>
                    <h3>Percentage of people who like Pap and Wors:</h3>
                </td>
                <td>
                    <h3><?php echo round($papandwors,1) . "%" ?></h3>
                </td>
            </tr>
            <tr>

                <td>
                    <h3>People like to eat out:</h3>
                </td>
                <td>
                    <h3><?php echo $eatave ?></h3>
                </td>
            </tr>
            <tr class="bg">
                <td>
                    <h3>People like to watch movies:</h3>
                </td>
                <td>
                    <h3><?php echo $numMovies ?></h3>
                </td>
            </tr>
            <tr>
                <td>
                    <h3>People like to watch TV:</h3>
                </td>
                <td>
                    <h3><?php echo $numTV ?></h3>
                </td>
            </tr>
            <tr class="bg">
                <td>
                    <h3>People like to listen to the radio:</h3>
                </td>
                <td>
                    <h3><?php echo $numradio ?></h3>
                </td>
            </tr> 

        </table>
        <h1 class="btn"><a href="index.php">OK</a></h1></center>
</body>
</html>
