<?php
include __DIR__ . '/partials/header.php';

$password = passwordGenerator();


?>

<main class="container">

    <div class="card m-auto ">
        <form method="GET">
            <div class="row">
                <div class="col-7">
                    <label for="passwordLength" class="form-label">Lunghezza password:</label>
                </div>
                <div class="col-5">
                    <input type="number" class="form-control" id="passwordLength" name="passwordLength">
                </div>
                <div class="col-7">
                    <p>Consenti ripetizioni di uno o più caratteri:</p>
                </div>
                <div class="col-5">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="characterRepeat" id="characterRepeat1"
                            value="y" checked>
                        <label class="form-check-label" for="characterRepeatY">
                            Si
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="characterRepeat" id="characterRepeat2"
                            value="n">
                        <label class="form-check-label" for="characterRepeatN">
                            No
                        </label>
                    </div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="characterType[]" value="letters"
                            id="characterLetters">
                        <label class="form-check-label" for="characterLetters">
                            Lettere
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="characterType[]" value="numbers"
                            id="characterNumbers">
                        <label class="form-check-label" for="characterNumbers">
                            Numeri
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="characterType[]" value="symbols"
                            id="characterSymbols">
                        <label class="form-check-label" for="characterSymbols">
                            Simboli
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <?php if ($password === 'selectValue') { ?>
        <h2>
            Scegli caratteri da utilizzare
        </h2>
    <?php } elseif ($password === '') { ?>
        <h2>
            Scegli lunghezza password
        </h2>
    <?php } elseif ($password) { ?>
        <h2>
            <?php echo $password ?>
        </h2>
    <?php } ?>


</main>

<?php include __DIR__ . '/partials/footer.php'; ?>