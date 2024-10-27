<?php include "header.php"; ?>

<main>
    <section id="breadcrumb-section" class="my-3">
        <div class="container">
            <div class="row justify-content-center">
                <div class="d-none d-md-block col-12">
                    <nav class="mybreadcrumb" style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php"><i class="fa-solid fa-house "></i></a>
                            </li>
                            <li class="breadcrumb-item  fw-bold" aria-current="page"><a
                                    class="text-decoration-none text-dark" href="store.php">
                                    المنتجات</a></li>
                            <li class="breadcrumb-item  fw-bold" aria-current="page"><a
                                    class="text-decoration-none text-dark" href="services.php">
                                    منتجات تعليمية</a></li>
                            <li class="breadcrumb-item active fw-bold" aria-current="page"> منهج دربة</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <h3 class="pro-title text-white my-3 p-2"> منهج دربة</h3>
                </div>
            </div>
        </div>
    </section>

    <section id="product-section">
        <div class="container pb-5">
            <div class="row justify-content-center gx-0">
                <div class="col-12">
                    <div class="myRow p-3 pb-5">

                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="img-container position-relative mb-3">
                                    <img src="" alt="image">
                                    <i class="fa-solid fa-magnifying-glass fa-flip-horizontal fa-xl zoom-icon" style="color: #ffffff;"></i>
                                </div>
                                <div class="d-flex flex-wrap gap-1">
                                    <div class="test-img">
                                        <img src="./imgs/product1.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product2.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product3.jpg" alt="image">
                                    </div>
                                    <div class="test-img">
                                        <img src="./imgs/product4.jpg" alt="image">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="demo">
                                    <p class="pri">35,00$</p>
                                    <p>في حال تود الاستفسار عن المنتج راسلنا عبر الواتس آب 00905537338097</p>
                                    <input class="count text-center" min="1" type="number">
                                    <a href="shopping.php" class="btnAdd">إضافة إلى السلة</a>
                                    <p class="p-1 mt-3 bg-white">التصنيف: <span>منتجات تعليمية</span></p>
                                    <p class="p-1 bg-white">الوسوم: <span></span><a href="">أغاني, </a><a href=""></a>قواعد, </a><a href=""></a><a href="">لغة عربية, </a><a href="">قواعد صرفية ...</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">الوصف</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">معلومات إضافية</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show bg-white p-2 active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <h5 class="mt-4">الوصف</h5>
                            <p>– عبارة عن 3 كتب بثلاثة مستويات . <br>– كتب دندنة تعلم القواعد دون التعرض للطريقة التقليدية .. فالمتعلم سيغني ويخزن وبالتالي ينتج اللغة الصحيحة .. <br>– الشريحة المستهدفة : متعلمي اللغة العربية سواء ناطقين بها أم غير ناطقين ..</p>
                        </div>
                        <div class="tab-pane bg-white fade p-2" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                            <h5 class="mt-4">معلومات إضافية</h5>
                            <hr class="opacity-25">
                            <strong class="me-5">الأبعاد</strong>
                            <span> 21 × 21 × 1 سنتيميتر</span>
                            <hr class="opacity-25">
                        </div>
                    </div>
                </div>

                <div class="col-12">
                    <h3 class="mt-4">منتجات ذات صلة</h3>
                </div>

                <div class="col-12">
                    <div class="row gx-xl-5">
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="add text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى السلة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row gx-0 justify-content-center">
                <div class="accounts p-3 myRow mt-4 ">
                    <p class="fw-bold">شارك الآن</p>
                    <div class="d-flex gap-2">
                        <a href="https://wa.me/+905537338097"> <i class="fab fa-whatsapp fa-2xl"></i></a>
                        <a href="#"> <i class="fab fa-x-twitter fa-2xl"></i></a>
                        <a href="https://www.facebook.com/fenmaktoob"> <i class="fab fa-facebook fa-2xl"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        const image = document.querySelector('#product-section .img-container img');
        const imgContainer = document.querySelector('#product-section .img-container');

        imgContainer.addEventListener('mousemove', (e) => {
            const rect = imgContainer.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;
            image.style.transformOrigin = `${x}px ${y}px`;
            image.style.transform = 'scale(1.3)';
        });

        imgContainer.addEventListener('mouseleave', () => {
            image.style.transform = 'scale(1)';
        });

        // ----------------------------------
        const imgList = document.querySelectorAll(".test-img img");
        const container = document.querySelector("#product-section .img-container img");

        container.src = "./imgs/product1.jpg";

        for (let i = 0; i < imgList.length; i++) {
            if (i === 0) {
                imgList[i].style.opacity = 1;
            } else {
                imgList[i].style.opacity = 0.5;
            }
        }

        for (let i = 0; i < imgList.length; i++) {
            imgList[i].addEventListener("click", function() {
                container.src = imgList[i].src;
                for (let j = 0; j < imgList.length; j++) {
                    if (i !== j) {
                        imgList[j].style.opacity = 0.5;
                    } else {
                        imgList[i].style.opacity = 1;
                    }
                }
            });
        }
    </script>
</main>

<?php include "footer.php"; ?>