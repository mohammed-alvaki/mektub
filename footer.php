<footer class="pt-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-11">
                <div class="row justify-contnent-center">
                    <div class="col-12 col-md-6 col-lg-4 col-xl-3">
                        <div class="mb-4 mb-md-0">
                            <h5 class="text-center">الاشتراك بالقائمة البريدية</h5>
                            <div class="hr mb-3"></div>
                            <form action="">
                                <div class="input-group mb-3">
                                    <div class="input-group-text" id="btnGroupAddon">@</div>
                                    <input type="text" class="form-control text-center" placeholder="البريد الاكتروني"
                                        aria-label="البريد الاكتروني" aria-describedby="btnGroupAddon">
                                </div>
                                <button type="submit" class="btn-subscribe mx-auto d-block text-white border-0 py-1 px-3 fw-bold"><i
                                        class="fa-solid fa-plus"></i>
                                    اشتراك</button>
                            </form>
                        </div>
                    </div>
                    <div class="d-none d-md-block col-md-6 col-lg-4 ms-lg-auto"><img class="d-block ms-md-auto " src="./imgs/fenmaktoob.png" alt="logo"
                            style="width: 220px;">
                    </div>
                    <div class="col-12 d-none d-md-block">
                        <div class="footer-menu-container d-flex justify-content-center flex-wrap text-center my-3">
                            <a href="index.php">الرئيسية</a>
                            <a href="aboutus.php">عن فنمكتوب</a>
                            <a href="privacy.php">سياسة الخصوصية</a>
                            <a href="contactus.php">اتصل بنا</a>
                            <a href="wholesale.php">لطلبات الجملة </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="rights text-center py-3 fw-bold">
        &copy; جميع الحقوق محفوظة
        <a href="index.php" title="فنمكتوب">فنمكتوب</a>
        |
        برمجة وتصميم :
        <a href="https://planet-www.com" target="_blank" title="بلانت للبرمجة والتصميم">Planet WWW</a>
    </div>

    <div class="whatsapp rounded-pill">
        <a href="https://wa.me/+905537338097" target="_blank"
            class="d-flex align-items-center gap-1 text-decoration-none text-white fw-bold">
            <img src="./imgs/whatsapp-icon.png" alt="Whatsapp" />
            مباشر
        </a>
    </div>

    <div class="back">
        <span class="d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-angle-up fa-xl"></i></span>
    </div>

    <script>
        const btnBack = document.querySelector(".back");

        window.addEventListener("scroll", function() {
            if (window.scrollY > 10) {
                btnBack.style.display = "block";
            } else {
                btnBack.style.display = "none";
            }
        });
        btnBack.addEventListener("click", function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</footer>

</body>

</html>