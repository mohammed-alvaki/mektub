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
                            <li class="breadcrumb-item active fw-bold" aria-current="page"> لاقتناء المنتجات </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="store-section" class="mt-3 mb-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <h3 class="text-center mt-2"> لاقتناء المنتجات </h3>
                    <div class="line mt-3 mb-4">
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="d-flex flex-wrap justify-content-between mb-4">
                        <p>عرض جميع النتائج 14</p>
                        <select name="orderby" class="orderby ms-auto" style="width: 200px;" aria-label="نظام المتجر">
                            <option value="menu_order" selected='selected'>الترتيب الافتراضي</option>
                            <option value="popularity">ترتيب حسب الشهرة</option>
                            <option value="rating">ترتيب حسب معدل التقييم</option>
                            <option value="date">ترتيب حسب الأحدث</option>
                            <option value="price">ترتيب حسب: الأدنى سعراً للأعلى</option>
                            <option value="price-desc">ترتيب حسب: الأعلى سعراً للأدنى</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-xl-11">
                    <div class="row gx-xl-5">
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product1.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                        السلة</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="pr mb-4">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product4.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                        السلة</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="pr discount position-relative">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product3.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                        السلة</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-3">
                            <div class="pr discount position-relative">
                                <a href="product.php">
                                    <div class="img-cont"><img src="./imgs/product2.jpg" class="img-fluid" alt=""></div>
                                </a>
                                <div class="dis p-3 text-center">
                                    <h5 class="fw-bold">سلسلة دندنة</h5>
                                    <span class="np"><s>105,00$</s></span> <span class="op">79,00$</span>
                                    <a href="shopping.php" class="btnAdd text-white fw-bold d-block mx-auto p-1 mt-2">إضافة إلى
                                        السلة</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
</main>

<?php include "footer.php"; ?>