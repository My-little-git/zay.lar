    <!-- Start Top Nav -->
    <nav class="navbar navbar-expand-lg bg-dark navbar-light d-none d-lg-block" id="templatemo_nav_top">
        <div class="container text-light">
            <div class="w-100 d-flex justify-content-between">
                <div>
                    <i class="fa fa-envelope mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="mailto:info@company.com">info@company.com</a>
                    <i class="fa fa-phone mx-2"></i>
                    <a class="navbar-sm-brand text-light text-decoration-none" href="tel:010-020-0340">010-020-0340</a>
                </div>
                <div>
                    <a class="text-light" href="https://fb.com/templatemo" target="_blank" rel="sponsored"><i class="fab fa-facebook-f fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://twitter.com/" target="_blank"><i class="fab fa-twitter fa-sm fa-fw me-2"></i></a>
                    <a class="text-light" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin fa-sm fa-fw"></i></a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Close Top Nav -->


    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light shadow">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand text-success logo h1 align-self-center" href="/index.php">
                Zay
            </a>

            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#templatemo_main_nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="align-self-center collapse navbar-collapse flex-fill  d-lg-flex justify-content-lg-between" id="templatemo_main_nav">
                <div class="flex-fill">
                    <ul class="nav navbar-nav d-flex justify-content-between mx-lg-auto">
                        {{-- <?//php if (isset($_SESSION['admin']) && $_SESSION['admin']): ?>
                            <li class="nav-item">
                                <a href="/admin/products.php" class="nav-link">Товары</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/categories.php" class="nav-link">Категории</a>
                            </li>
                            <li class="nav-item">
                                <a href="/admin/users.php" class="nav-link">Пользователи</a>
                            </li>
                        <?//php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="/index.php">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about.php">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/shop.php">Каталог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact.php">Контакты</a>
                            </li>
                        <?//php endif; ?> --}}
                        @auth
                           <li class="nav-item">
                                <a class="nav-link" href="/index.php">Главная</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about.php">О нас</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/shop.php">Каталог</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/contact.php">Контакты</a>
                            </li> 
                        @endauth
                    </ul>
                </div>
                <div class="navbar align-self-center d-flex">
                    <div class="d-lg-none flex-sm-fill mt-3 mb-4 col-7 col-sm-auto pr-3">
                        <div class="input-group">
                            <input type="text" class="form-control" id="inputMobileSearch" placeholder="Search ...">
                            <div class="input-group-text">
                                <i class="fa fa-fw fa-search"></i>
                            </div>
                        </div>
                    </div>
                    <a class="nav-icon d-none d-lg-inline" href="#" data-bs-toggle="modal" data-bs-target="#templatemo_search">
                        <i class="fa fa-fw fa-search text-dark mr-2"></i>
                    </a>
                    @auth
                      <a class="nav-icon position-relative text-decoration-none" href="#">
                          <i class="fa fa-fw fa-cart-arrow-down text-dark mr-1"></i>
                          <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">7</span>
                      </a>
                      <a class="nav-icon position-relative text-decoration-none" href="#">
                          <i class="fa fa-fw fa-user text-dark mr-3"></i>
                          <span class="position-absolute top-0 left-100 translate-middle badge rounded-pill bg-light text-dark">+99</span>
                      </a>
                      <a href="{{ route('login.logout') }}" class="btn btn-danger text-white ms-3">Выйти</a>
                    @endauth

                    @guest
                      <a href="{{ route('login.show') }}" class="btn btn-success text-white">Войти</a>
                    @endguest
                </div>
            </div>

        </div>
    </nav>
    <!-- Close Header -->