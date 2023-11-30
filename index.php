<?php
include __DIR__ . '/partials/header.php';


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

?>

<main class="container">

    <form method="GET">
        <div class="mb-3">
            <label for="passwordLength" class="form-label">Lunghezza password:</label>
            <input type="number" class="form-control" id="passwordLength" name="passwordLength">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>