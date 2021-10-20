<?php

$con = mysqli_connect("localhost", "root", "", "Tshimologong");
if (isset($_POST['submit'])) {
    $surname = $_POST['surname'];
    $firstname = $_POST['name'];
    $contact = $_POST['contact'];
    $date = $_POST['date'];
    $age = $_POST['age'];
    $fav_food = $_POST['fav_food'];
    $eat_out = $_POST['eat_out'];
    $movies = $_POST['movies'];
    $tv = $_POST['tv'];
    $radio = $_POST['radio'];
    $errors[] = "";
    $errorsnum = 0;
    
    $favfood = "";
    foreach ($fav_food as $food) {
        $favfood.= $food . ",";
    }
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }
//Number validate

if(strlen($contact)>10 || strlen($contact)<10)
{
    $errors="Please enter valid  cellphone number length,the number must not be greater or less than 10";
    $errorsnum=$errorsnum+1;
}
//Age Validate
    if ($age < 5 or $age > 120) {
        $errors = "Please enter age equal to 5 or greater than 5 or less or equal to 120";
        $errorsnum = $errorsnum + 1;
    }
//Radio Validate
    if ($radio == "Strongly Agree(1)") {
        $errorsnum;
    } else if ($radio == "Agree(2)") {
        $errorsnum;
    } else if ($radio == "Neutral(3)") {
        $errorsnum;
    } else if ($radio == "Disagree(4)") {
        $errorsnum;
    } else if ($radio == "Strongly Disagree(5)") {
        $errorsnum;
    } else {
        $errors = "Please make sure that you select rate in radio";
        $errorsnum = $errorsnum + 1;
    }
//TV Validate
    if ($tv == "Strongly Agree(1)") {
        $errorsnum;
    } else if ($tv == "Agree(2)") {
        $errorsnum;
    } else if ($tv == "Neutral(3)") {
        $errorsnum;
    } else if ($tv == "Disagree(4)") {
        $errorsnum;
    } else if ($tv == "Strongly Disagree(5)") {
        $errorsnum;
    } else {
        $errors = "Please make sure that you select rate in Tv";
        $errorsnum = $errorsnum + 1;
    }
//Movies Validate
    if ($movies == "Strongly Agree(1)") {
        $errorsnum;
    } else if ($movies == "Agree(2)") {
        $errorsnum;
    } else if ($movies == "Neutral(3)") {
        $errorsnum;
    } else if ($movies == "Disagree(4)") {
        $errorsnum;
    } else if ($movies == "Strongly Disagree(5)") {
        $errorsnum;
    } else {
        $errors = "Please make sure that you select rate in movies";
        $errorsnum = $errorsnum + 1;
    }
//Eat_out Validate
    if ($eat_out == "Strongly Agree(1)") {
        $errorsnum;
    } else if ($eat_out == "Agree(2)") {
        $errorsnum;
    } else if ($eat_out == "Neutral(3)") {
        $errorsnum;
    } else if ($eat_out == "Disagree(4)") {
        $errorsnum;
    } else if ($eat_out == "Strongly Disagree(5)") {
        $errorsnum;
    } else {
        $errors = "Please make sure that you select rate in eat out";
        $errorsnum = $errorsnum + 1;
    }

    if ($errorsnum > 0) {
        echo $errors . '<br>';
    } else {
        $sql = "INSERT INTO survey(surname,first_name,contact_no,date_submitted,age,food,eat_out,like_movies,like_tv,like_radio)"
                . "VALUES('$surname','$firstname','$contact','$date','$age','$favfood','$eat_out','$movies','$tv','$radio')";
    }


}
if (mysqli_query($con,$sql)) {

        echo '<script type="text/javascript">alert("Survey submitted Succesfully");window.location=\'index.php\';</script>';
    } else {
        echo "Data not saved";
    }
    mysqli_close($con);

?>

