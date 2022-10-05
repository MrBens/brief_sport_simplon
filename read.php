<?php if (isset($_GET['success'])) : ?>
    <?php $success = $_GET['success'] ?>
    <?php if ($success == 0) : ?>
        <div>
            Veuillez renseigner tous les champs !
        </div>
    <?php else : ?>
        <div>
            SUCCESS!
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php require_once 'db.php';
$getId = $_GET['id'];
$sql = "SELECT * FROM messages WHERE id = $getId";
$query = mysqli_query($sqli, $sql);
$result = mysqli_fetch_assoc($query);
?>

<?php if ($query) :
    session_start();
    $_SESSION['id'] = $result['id']; ?>
    <div>
        <h1>Sujet: <?= $result['sujet'] ?></h1>
        <p>Message: <?= $result['message'] ?></p>
        <h2>Infos:</h2>
        <p>Mail: <?= $result['mail'] ?></p>
        <p>Tel: <?= $result['tel'] ?></p>
        <p>Le: <?= $result['date'] ?></p>
        <a href="/contact.php?action=update">Modifier</a>
        <a href="/checker.php?action=delete">delete</a>
    </div>
<?php endif ?>