<?php

function passwordGenerator()
{
    $symbols = '!?&%$<>^+-\*/()[]{}@#_=';
    $letters = 'qwertyuiopasdfghjklzxcvbnm';
    $upLetters = 'QWERTYUIOPASDFGHJKLZXCVBNM';
    $numbers = '0123456789';

    if (isset($_POST['passwordLength'])) {
        $passwordLength = $_POST['passwordLength'];
        $maxLength = 50;
        $newPassword = '';
        $charactersList = null;
        // if (!isset($_POST['passwordLength'])) {
        //     return 'aaa';
        // }
        if (!isset($_POST['characterType'])) {
            return 'selectValue';
        }
        if (in_array('symbols', $_POST['characterType'])) {
            $charactersList .= $symbols;
        }
        if (in_array('letters', $_POST['characterType'])) {
            $charactersList .= $upLetters .= $letters;
        }
        if (in_array('numbers', $_POST['characterType'])) {
            $charactersList .= $numbers;
        }


        // $charactersList = $symbols . $letters . $upLetters . $numbers;
        while (strlen($newPassword) < $passwordLength) {
            $newCharacter = $charactersList[rand(0, strlen($charactersList) - 1)];
            if ($passwordLength > strlen($charactersList) && $_POST['characterRepeat'] === 'n' || $passwordLength > $maxLength) {
                return 'maxLength';
            }
            if (!str_contains($newPassword, $newCharacter) && $_POST['characterRepeat'] === 'n') {
                $newPassword .= $newCharacter;
            } elseif ($_POST['characterRepeat'] === 'y') {
                $newPassword .= $newCharacter;
            }
        }
        // var_dump($_POST['characterRepeat']);
        // var_dump($newPassword);
        $_SESSION['password'] = $newPassword;

        return $newPassword;
    }
}

?>