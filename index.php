<?php
include __DIR__ . '/partials/header.php';

passwordGenerator();
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