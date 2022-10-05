</main>
<footer class="bg-dark">
        <div class="container-fluid g-0">
            <div class="row row-col-3 row-cols-sm-3 row-cols-lg-6 g-0 position-relative">
                <?php 
                $args =[
                    "colClass" => "col-4 col-sm-4 col-lg-2 position-relative social-actions",
                    "imgName" => ["coach_1", "coach_2", "coach_3", "coach_1", "coach_2", "coach_3"],
                    "imgClass" => "w-100",
                    "overlayClass" => "position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered",
                    "firstIconClass" => "fa-solid fa-heart fs-sm-7",
                    "secondIconClass" => "fa-solid fa-comment fs-sm-7",
                    "iconTextClass" => "m-0 d-inline-block",
                    "firstIconText" => ["146", "12", "289", "33", "105", "804"],
                    "secondIconText" => ["350", "142", "17", "28", "65", "940"]
                ];

                addImg(6, $args);
                

                ?>
                <!-- <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_1.jpg" class="w-100" alt="">
                    <div class="position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_2.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_3.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_1.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_2.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div>
                <div class="col-4 col-sm-4 col-lg-2 position-relative social-actions">
                    <img src="./assets/img/coach/coach_3.jpg" class="w-100" alt="">
                    <div class="social-actions position-absolute h-100 w-100 top-50 start-50 translate-middle gap-3 social-actions-hovered">
                        <i class="fa-solid fa-heart fs-sm-7">
                            <p class="m-0 d-inline-block">146</p>
                        </i>
                        <i class="fa-solid fa-comment fs-sm-7">
                            <p class="m-0 d-inline-block">6</p>
                        </i>
                    </div>
                </div> -->
                <div class="col-5 position-absolute top-50 start-50 translate-middle text-center social-link">
                    <a href="" class="btn btn-light rounded-0 text-uppercase fw-bold">@studiobiarritz</a>
                </div>
            </div>
        </div>
        <div class="container pt-5 pb-5">
            <div class="row row-cols-1 row-cols-sm-3 row-cols-lg-3 align-items-center">
                <div class="col-3 col-sm-3 col-lg-3 text-light">
                    <img src="./assets/img/logo_footer.png" class="d-inline-block me-4" alt="">
                    <h5 class="d-inline-block text-uppercase fw-bolder">à propos</h5>
                    <p class="m-0">2018 Studio Sport Biarritz</p>
                    <p class="m-0">Salle de sport, de fitness et de crossfit à biarritz Pays basques.</p>
                    <p class="m-0">RCS : 000 000 000</p>
                    <a class="text-decoration-underline text-white" href="#">Mentions légales</a>
                </div>
                <div class="col-3 col-sm-3 col-lg-3 text-light fw-bolder">
                    <h5 class="text-uppercase fw-bolder">studio sport corporate</h5>
                    <a class="d-block footer-link" href="">Studio Center : créez votre studio</a>
                    <a class="d-block footer-link" href="">Offres Spéciales C.E.</a>
                    <a class="d-block footer-link" href="">Devenir partenaire</a>
                </div>
                <div class="col-6 col-sm-6 col-lg-6 text-light fw-bolder">
                    <h5 class="text-uppercase fw-bolder">fitness, crossfit et training au pays basque</h5>
                    <a class="footer-link" href="#">Coach personnel de sport à Biarritz</a>,
                    <a class="footer-link" href="#">Coach personnel de sport à Anglet</a>,
                    <a class="footer-link" href="#">Salle de sport BAB</a>,
                    <a class="footer-link" href="#">Fitness à Biarritz</a>,
                    <a class="footer-link" href="#">Sessions de fitness à Anglet</a>,
                    <a class="footer-link" href="#">Fitness sur le BAB</a>,
                    <a class="footer-link" href="#">Autre mot-clé+ville</a>,
                    <a class="footer-link" href="#">Autre mot-clé+ville</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black text-light p-4 d-flex justify-content-center align-items-center">
            <p class="mw-lg-10 text-end mb-0 me-2">Un site créé par <span class="text-uppercase fw-bold">l'agence 364 com'</span></p>
            <img src="./assets/img/364.png" alt="">
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>