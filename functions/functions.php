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
        while (strlen($newPassword) < $passwordLength) {
            $charactersList = $symbols . $letters . $upLetters . $numbers;
            $newCharacter = $charactersList[rand(0, strlen($charactersList) - 1)];
            if (!str_contains($newPassword, $newCharacter)) {
                $newPassword .= $newCharacter;
            }
        }
        var_dump($_GET['passwordLength']);
        var_dump($newPassword);
    }
}

?>