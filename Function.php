<?php

include 'config.php';

class Calculator {

    public function average_for_food($value) {
        $object = new Db();
        $object = $object->getConnection();
        $sql = "SELECT food from survey ";
        $stmt = $object->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();


        $var = "";
        foreach ($result as $row) {
            $var = $var . $row['food'] . ",";
        }

        $tot = substr_count($var, ",");

        $occur = substr_count($var, $value);

        return ($occur / $tot) * 100;
    }

}

?>