<?php
include __DIR__ . '/partials/header.php';

$password = passwordGenerator();


?>

<main class="container d-flex flex-column align-items-center gap-3 pt-5 ">
    <h1>Strong Password Generator</h1>
    <h2>Genera una password sicura</h2>

    <div class="card p-4">
        <form method="POST">
            <div class="row g-3">
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
        <div class="alert alert-danger">
            Scegli caratteri da utilizzare
        </div>
    <?php } elseif ($password === '') { ?>
        <div class="alert alert-danger">
            Scegli lunghezza password
        </div>
    <?php } elseif ($password === 'maxLength') { ?>
        <div class="alert alert-danger">
            Scegli una password più corta
        </div>
    <?php } elseif ($password) { ?>
        <div class="alert alert-success">
            Password:
            <?php echo $password ?>
        </div>
    <?php } ?>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>