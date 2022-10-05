<?php require_once 'db.php';
$sql = "SELECT * FROM messages";
$query = mysqli_query($sqli, $sql);
?>

<?php if ($query) : ?>
    <?php while($result = mysqli_fetch_assoc($query)) : ?>
        <div>
            <h1><a href="read.php/?id=<?= $result['id']?>"><?= $result['sujet'] ?></a></h1>
            <p><?= $result['message'] ?></p>
            <p><?= $result['tel'] ?></p>
            <p><?= $result['mail'] ?></p>
            <p><?= $result['date'] ?></p>
        </div>
    <?php endwhile; ?>
<?php endif; ?>


