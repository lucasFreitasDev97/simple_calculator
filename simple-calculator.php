<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $number01 = $_POST['number01'];
    $number02 = $_POST['number02'];
    $operator = $_POST['operator'];

    if (is_numeric($number01) && is_numeric($number02)){
        switch ($operator){
            case '+':
                $result = $number01 + $number02;
                break;
            case '-':
                $result = $number01 - $number02;
                break;
            case 'x':
                $result = $number01 * $number02;
                break;
            case '÷':
                if ($number02 != 0){
                    $result = $number01 / $number02;
                }else{
                    $result = "Error: Division By 0 is not permited";
                }
                break;
            default:
                $result = "Invalid Operation";
        }

        echo "<strong>$number01 $operator $number02  = $result</strong>";
    }else{
        echo "Please, insert valid numbers.";
    }
}