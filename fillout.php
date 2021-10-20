<!DOCTYPE html>
<?php  ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Fillout</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body >
        
    <center><h1 class="head">Tshimologong Survey</h1></center>
        <form method="Post" action="action.php" class="body">

            <h1>Personal Details</h1></br>

            Surname       :<input type="text" name="surname"  required></br></br>
            First Names   :<input type="text" name="name"  required></br></br>
            Contact Number:<input type="text" name="contact"  required></br></br>
            Date          :<input type="date" value="" name="date" ></br></br>
            Age           :<input type="text" name="age"  required></br></br>
            <label>What is your favorite food? (You can choose more than 1 answer) </label></br>
            <input type="checkbox" name="fav_food[]" value="pizza">Pizza
            <br>
            <input type="checkbox" name="fav_food[]" value="pasta">Pasta
            <br>
            <input type="checkbox" name="fav_food[]" value="pap_and_wors">Pap_and_wors 
            <br>
            <input type="checkbox" name="fav_food[]" value="chicken_stir_fry">Chicken_stir_fry 
            <br>
            <input type="checkbox" name="fav_food[]" value="beef_stir_fry"> beef_stir_fry
            <br><br>
            </div>
            					
            <table  class="table2">
                <thead >
                    <tr>
                        <th></th>
                        <th>Strongly Agree(1)</th>
                        <th>Agree(2)</th>
                        <th>Neutral(3)</th>
                        <th>Disagree(4)</th>
                        <th>Strongly Disagree(5)</th>
                    </tr>
                </thead>
                <tbody>

                    <tr class="tr1">
                        <td>

                            <h3>I like to eat out</h3>

                        </td>
                        <td>
                            <input type="radio" name="eat_out" value="Strongly Agree(1)">
                        </td>
                        <td>
                            <input type="radio" name="eat_out" value="Agree(2)">
                        </td>
                        <td>
                            <input type="radio" name="eat_out" value="Neutral(3)">
                        </td>
                        <td>
                            <input type="radio" name="eat_out" value="Disagree(4)">
                        </td>
                        <td>
                            <input type="radio" name="eat_out" value="Strongly Disagree(5)">
                        </td>
                    </tr>
                    <tr >
                        <td>

                            <h3>I like to watch movies</h3>

                        </td>
                        <td>
                            <input type="radio" name="movies" value="Strongly Agree(1)">
                        </td>
                        <td>
                            <input type="radio" name="movies" value="Agree(2)">
                        </td>
                        <td>
                            <input type="radio" name="movies" value="Neutral(3)">
                        </td>
                        <td>
                            <input type="radio" name="movies" value="Disagree(4)">
                        </td>
                        <td>
                            <input type="radio" name="movies" value="Strongly Disagree(5)">
                        </td>
                    </tr>
                    <tr class="tr1">
                        <td>

                            <h3>I like to watch TV</h3>

                        </td>
                        <td>
                            <input type="radio" name="tv" value="Strongly Agree(1)">
                        </td>
                        <td>
                            <input type="radio" name="tv" value="Agree(2)">
                        </td>
                        <td>
                            <input type="radio" name="tv" value="Neutral(3)">
                        </td>
                        <td>
                            <input type="radio" name="tv" value="Disagree(4)">
                        </td>
                        <td>
                            <input type="radio" name="tv" value="Strongly Disagree(5)">
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <h3>I like to listen to the radio</h3>

                        </td>
                        <td>
                            <input type="radio" name="radio" value="Strongly Agree(1)">
                        </td>
                        <td>
                            <input type="radio" name="radio" value="Agree(2)">
                        </td>
                        <td>
                            <input type="radio" name="radio" value="Neutral(3)">
                        </td>
                        <td>
                            <input type="radio" name="radio" value="Disagree(4)">
                        </td>
                        <td>
                            <input type="radio" name="radio" value="Strongly Disagree(5)" >
                        </td>
                    </tr>

                </tbody>
            </table>
            <center><h1><input class="btn  " type="submit" name="submit" value="SUBMIT"  ></h1></center>
        </form>
    
    </body>
</html>
