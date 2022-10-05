<?php
require_once 'functions.php';
if (isActionSet()) {
    if (getAction() == 'update') {
        session_start();
    }
}
require_once "header.php";
?>

<section id="contact">
    <div class="container">
        <div class="row w-75 mx-auto mt-5 pb-5">
            <div class="col-12 col-lg-4">
                <h3 class="mb-0 text-uppercase">nos coordonées</h3>
                <img src="./assets/img/bg_titre.jpg" alt="">
                <div class="container g-0 ms-3 ps-5">
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bolder my-0 pt-3">Studio sport & Coaching</p>
                            <p class="my-0">01 Allée Marie Politzer</p>
                            <p class="my-0">64200 Biarritz</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bolder my-0 pt-3">Téléphone</p>
                            <p class="my-0">05 59 47 84 18</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bold my-0 pt-3">Horraires</p>
                            <p class="my-0">Du lundi au vendredi</p>
                            <p class="my-0">de 8h à 14h, de 16h à 21h</p>
                            <p class="my-0">Le samedi</p>
                            <p class="my-0">de 10h à 13h</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <p class="fw-bolder my-0 pt-3">Email</p>
                            <p class="my-0">contact (at) studioniarritz.com</p>
                            <p class="my-0">ou via ce formulaire</p>
                        </div>
                    </div>
                </div>
                <ul>

                </ul>
            </div>

            <div class="col-12 col-lg-8">
                <h3 class="mb-0 text-uppercase">formulaire de contact</h3>
                <img src="./assets/img/bg_titre.jpg" alt="">

                <?php
                $mail = '';
                $nom = '';
                $prenom = '';
                $tel = '';
                $sujet = '';
                $msg = '';

                if (isActionSet()) {
                    if (getAction() == 'update') {
                        require_once 'db.php';
                        $id = $_SESSION['id'];
                        $sql = "SELECT * FROM messages WHERE id = $id";
                        $query = mysqli_query($sqli, $sql);
                        if ($query) {
                            if (mysqli_num_rows($query) > 0) {
                                $result = mysqli_fetch_assoc($query);
                                $mail = $result['mail'];
                                $nom = $result['nom'];
                                $prenom = $result['prenom'];
                                $tel = $result['tel'];
                                $sujet = $result['sujet'];
                                $msg = $result['message'];
                            }
                        }
                        $redirect = 'checker.php?action=update';
                    }
                } else {
                    $redirect = 'checker.php?action=create';
                }
                ?>

                <form id="contact-form" action="<?= $redirect ?>" method="POST">
                    <div class="container g-0">
                        <div class="row g-0 mt-3">
                            <div class="col-sm-12 col-lg-7 mt-3">
                                <input id="nom" type="mail" class="form-control text-uppercase g-1 bg-light" name='nom' placeholder="votre nom" value="<?= $nom ?>">
                            </div>
                            <div class="col-sm-12 col-lg-4 offset-lg-1 mt-3">
                                <input id="prenom" type="text" class="form-control text-uppercase g-1 bg-light" name='prenom' placeholder="votre prénom" value="<?= $prenom ?>">
                            </div>
                        </div>
                        <div class="row g-0 mt-3">
                            <div class="col-sm-12 col-lg-4 mt-3">
                                <input id="num" type="text" class="form-control text-uppercase g-1 bg-light" name='num' placeholder="votre numéro" value="<?= $tel ?>">
                            </div>
                            <div class="col-sm-12 col-lg-7 offset-lg-1 mt-3">
                                <input id="mail" type="mail" class="form-control text-uppercase g-1 bg-light" name='mail' placeholder="votre mail" value="<?= $mail ?>">
                            </div>
                        </div>
                        <div class="row g-0 mt-3">
                            <div class="col-12">
                                <input id="sujet" type="text" class="form-control text-uppercase g-1 bg-light" name='sujet' placeholder="sujet" value="<?= $sujet ?>">
                            </div>
                        </div>
                        <div class="row g-0 mt-3">
                            <textarea id="message" class="form-control text-uppercase col-12 resize-none" name="message" rows="10" name='message' placeholder="message"><?= $msg ?></textarea>
                        </div>
                        <input type="submit" class="form-control btn btn-primary text-white text-uppercase fw-bolder bg-gold mt-3" name="submitContactForm" value="envoyer">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<?php require_once "footer.php" ?>