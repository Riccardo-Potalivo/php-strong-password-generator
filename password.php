<?php
include __DIR__ . '/partials/header.php';

if (!isset($_SESSION['password'])) {
    header('Location: index.php');
    exit;
}
?>

<main class="container">

    <h2>
        Password:
        <?php echo $_SESSION['password'] ?>
    </h2>

</main>

<?php include __DIR__ . '/partials/footer.php'; ?>