<?php

function passwordGenerator()
{
    $symbols = '!?&%$<>^+-\*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '0123456789';

    if (isset($_GET['passwordLength'])) {
        $passwordLength = $_GET['passwordLength'];
        $newPassword = '';
        $charactersList = null;
        // if (!isset($_GET['passwordLength'])) {
        //     return 'aaa';
        // }
        if (!isset($_GET['characterType'])) {
            return 'selectValue';
        }
        if (in_array('symbols', $_GET['characterType'])) {
            $charactersList .= $symbols;
        }
        if (in_array('letters', $_GET['characterType'])) {
            $charactersList .= $upLetters .= $letters;
        }
        if (in_array('numbers', $_GET['characterType'])) {
            $charactersList .= $numbers;
        }


        // $charactersList = $symbols . $letters . $upLetters . $numbers;
        while (strlen($newPassword) < $passwordLength) {
            $newCharacter = $charactersList[rand(0, strlen($charactersList) - 1)];
            if (!str_contains($newPassword, $newCharacter)) {
                $newPassword .= $newCharacter;
            }
        }
        // var_dump($_GET['passwordLength']);
        // var_dump($newPassword);
        $_SESSION['password'] = $newPassword;

        return $newPassword;
    }
}

?>