<?php include "header.php"; ?>

<main>
    <section id="breadcrumb-section" class="mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-none d-md-block col-12 col-xl-11">
                    <nav class="mybreadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house "></i></a>
                            </li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page">اتصل بنا</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <div id="main-section" class="mt-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <h3 class="text-center mt-2">اتصل بنا</h3>
                    <div class="line mt-3 mb-5">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="row justify-content-center">
                        <div class="col-12 col-md-6">
                            <form action="">
                                <input type="text" placeholder="الاسم الكامل" required>
                                <input class="text-start" type="email" placeholder="البريد الاكتروني" required>
                                <input class="text-start" type="tel" placeholder="الهاتف" required>
                                <textarea name="" id="" rows="3" placeholder="نص الرسالة"></textarea>
                                <button type="submit" class="btnSend text-white fw-bold border-0 d-block mx-auto"><i
                                        class="fa-solid fa-share-from-square fa-flip-horizontal me-2"></i>أرسل</button>
                            </form>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="info mt-5 mt-md-0 d-flex flex-column align-items-center gap-2">
                                <span><i class="fa-solid fa-phone-flip fa-xl"></i></span>
                                <p dir="ltr">+905537338097
                                </p>
                            </div>
                            <div class="info d-flex flex-column align-items-center">
                                <span><i class="fa-solid fa-envelope fa-xl"></i></span>
                                <p class="mt-2"> info@fenmaktoob.com
                                </p>
                            </div>
                            <div class="info d-flex flex-column align-items-center">
                                <span><i class="fa-solid fa-location-dot fa-xl"></i></span>
                                <p class="mt-2 text-center"> canada . 2 Bursill Rd. Winnipeg, MB / R2J3X6
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="dashed-line my-5"></div>
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "footer.php"; ?>