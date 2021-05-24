<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Put your description here.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bisabos</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
</head>

<body>
    <header class="bg-body border-bottom border-primary fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 d-none d-lg-block">
                    <a href="index.html" class="d-flex  col-lg-4 mb-2 mb-lg-0 link-dark text-decoration-none"
                        data-label="Site logo">
                        <img src="assets/img/bisabos.png" height="40px" width="40px" alt="">
                    </a>
                </div>
                <div class="col-md-6 d-none d-lg-block">
                    <div class="d-flex align-items-center">
                        <form class="w-100 me-3">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="type something to start the search"
                                    aria-label="type something to start the search" aria-describedby="searchButton">
                                <button class="btn btn-primary" type="submit" id="searchButton"
                                    aria-label="searchButton">
                                    <span aria-hidden="true">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path
                                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                            </path>
                                        </svg>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
                @if (Route::has('login'))
                    @auth
                        <div class="col-md-3 d-none d-lg-block text-end">
                            <img class="rounded-circle z-depth-2" height="40px" alt="100x100" src="https://mdbootstrap.com/img/Photos/Avatars/img%20(31).jpg"
                            data-holder-rendered="true">
                            <a href="register.html" class="btn btn-primary">log Out</a>
                        </div>
                    @else
                        <div class="col-md-3 d-none d-lg-block text-end">
                            <a href="login.html" class="btn btn-light me-2">Login</a>
                            @if (Route::has('register'))
                            <a href="register.html" class="btn btn-primary">Create account</a>
                            @endif
                        </div>
                    @endauth
                @endif
            </div>
        </div>

        <!-- navbar on mobile -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light d-lg-none d-xl-none">
            <div class="container-fluid">

                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/bisabos.png" alt="Bisabos - Media Pemrograman Indonesia" height="40px"
                        width="40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Privacy Policy</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Disclaimer</a>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Logout</a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Create Account</a>
                                    </li>
                                @endif
                            @endauth
                        @endif
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                    </ul>
                    <form class="w-100 me-3">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="type something to start the search"
                                aria-label="type something to start the search" aria-describedby="searchBtn">
                            <button class="btn btn-primary" type="submit" id="searchBtn" aria-label="searchBtn">
                                <span aria-hidden="true">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-search" viewBox="0 0 16 16">
                                        <path
                                            d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z">
                                        </path>
                                    </svg>
                                </span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </header>
    <main class="mb-3">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 d-none d-lg-block">
                    <div class="sticky-top">
                        <div class="card mb-3 rounded-3">
                            <div class="card-body">
                                <a href="https://bisabos.com" target="_blank" rel="noreferrer"><img
                                        src="assets/img/ads.png" alt="Bisabos - Media Pemrograman Indonesia"
                                        height="300" width="279" class="card-img-top"></a>
                            </div>
                        </div>
                        <div class="d-flex flex-column p-3 bg-light mb-3 shadow">
                            <ul class="nav nav-pills flex-column mb-auto">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-house me-2" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd"
                                                d="M2 13.5V7h1v6.5a.5.5 0 0 0 .5.5h9a.5.5 0 0 0 .5-.5V7h1v6.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5zm11-11V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z">
                                            </path>
                                            <path fill-rule="evenodd"
                                                d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z">
                                            </path>
                                        </svg>
                                        Home
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-file-person me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M12 1a1 1 0 0 1 1 1v10.755S12 11 8 11s-5 1.755-5 1.755V2a1 1 0 0 1 1-1h8zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z">
                                            </path>
                                            <path d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"></path>
                                        </svg>
                                        About us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-person-lines-fill me-2"
                                            viewBox="0 0 16 16">
                                            <path
                                                d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zM11 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 0 1h-4a.5.5 0 0 1-.5-.5zm.5 2.5a.5.5 0 0 0 0 1h4a.5.5 0 0 0 0-1h-4zm2 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2zm0 3a.5.5 0 0 0 0 1h2a.5.5 0 0 0 0-1h-2z">
                                            </path>
                                        </svg>
                                        Contact us
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-shield-check me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M5.338 1.59a61.44 61.44 0 0 0-2.837.856.481.481 0 0 0-.328.39c-.554 4.157.726 7.19 2.253 9.188a10.725 10.725 0 0 0 2.287 2.233c.346.244.652.42.893.533.12.057.218.095.293.118a.55.55 0 0 0 .101.025.615.615 0 0 0 .1-.025c.076-.023.174-.061.294-.118.24-.113.547-.29.893-.533a10.726 10.726 0 0 0 2.287-2.233c1.527-1.997 2.807-5.031 2.253-9.188a.48.48 0 0 0-.328-.39c-.651-.213-1.75-.56-2.837-.855C9.552 1.29 8.531 1.067 8 1.067c-.53 0-1.552.223-2.662.524zM5.072.56C6.157.265 7.31 0 8 0s1.843.265 2.928.56c1.11.3 2.229.655 2.887.87a1.54 1.54 0 0 1 1.044 1.262c.596 4.477-.787 7.795-2.465 9.99a11.775 11.775 0 0 1-2.517 2.453 7.159 7.159 0 0 1-1.048.625c-.28.132-.581.24-.829.24s-.548-.108-.829-.24a7.158 7.158 0 0 1-1.048-.625 11.777 11.777 0 0 1-2.517-2.453C1.928 10.487.545 7.169 1.141 2.692A1.54 1.54 0 0 1 2.185 1.43 62.456 62.456 0 0 1 5.072.56z">
                                            </path>
                                            <path
                                                d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z">
                                            </path>
                                        </svg>
                                        Privacy Policy
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="nav-link link-dark">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                            fill="currentColor" class="bi bi-card-text me-2" viewBox="0 0 16 16">
                                            <path
                                                d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z">
                                            </path>
                                            <path
                                                d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z">
                                            </path>
                                        </svg>
                                        Disclaimer
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Left Sidebar -->
                        
                        <div class="d-flex flex-column bg-light bg-body shadow-lg rounded-3">
                            <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                Tags
                            </div>
                            <div class="p-3 overflow-auto" style="max-height: 42vh">
                                <div class="nav tag-cloud">
                                    <a href="https://laros.id/tags/laravel">Laravel</a>
                                    <a href="https://laros.id/tags/bisnis">Bisnis</a>
                                    <a href="https://laros.id/tags/blogging">Blogging</a>
                                    <a href="https://laros.id/tags/template">Template</a>
                                    <a href="https://laros.id/tags/bootstrap">Bootstrap</a>
                                    <a href="https://laros.id/tags/security">Security</a>
                                    <a href="https://laros.id/tags/nexmo">Nexmo</a>
                                    <a href="https://laros.id/tags/seo">SEO</a>
                                    <a href="https://laros.id/tags/toko-online">Toko Online</a>
                                    <a href="https://laros.id/tags/jivochat">Jivochat</a>
                                    <a href="https://laros.id/tags/plugin">Plugin</a>
                                    <a href="https://laros.id/tags/tawkto">Tawkto</a>
                                    <a href="https://laros.id/tags/tokopedia">Tokopedia</a>
                                    <a href="https://laros.id/tags/ruang-guru">Ruang Guru</a>
                                    <a href="https://laros.id/tags/stack">Stack</a>
                                    <a href="https://laros.id/tags/wfh">WFH</a>
                                    <a href="https://laros.id/tags/disqus">Disqus</a>
                                    <a href="https://laros.id/tags/katalon">Katalon</a>
                                    <a href="https://laros.id/tags/selenium">Selenium</a>
                                    <a href="https://laros.id/tags/vonage">Vonage</a>
                                    <a href="https://laros.id/tags/twilio">Twilio</a>
                                    <a href="https://laros.id/tags/xampp">Xampp</a>
                                    <a href="https://laros.id/tags/larablog">Larablog</a>
                                    <a href="https://laros.id/tags/tinymce">TinyMCE</a>
                                    <a href="https://laros.id/tags/animation">Animation</a>
                                    <a href="https://laros.id/tags/restapi">RestAPI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <!-- CONTENT -->
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12">
                    <div class="sticky-top">
                        <div class="card rounded-3 shadow-lg mb-3">
                            <div class="card-body">
                                <img src="assets/img/ads1.png" height="117" width="279" class="card-img-top" alt="...">
                            </div>
                        </div>
                        <!-- Right Sidebar -->
                        <div class="card text-dark bg-light shadow-lg bg-body rounded-3 mb-3">
                            <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                Newsletter
                            </div>
                            <div class="card-body">
                                <p>Get the latest information from us via email</p>
                                <form>
                                    <div class="mb-3">
                                        <input type="text" class="form-control" id="name" placeholder="Nama">
                                    </div>
                                    <div class="mb-3">
                                        <input type="email" class="form-control" id="email" placeholder="Email">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        
                        
                        <div class="bg-light shadow bg-body rounded-3 mb-3">
                            <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                Top Articles
                            </div>
                            <ul class="list-group list-group-flush mb-2">
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                                <li class="list-group-item">
                                    Integrasi Ckeditor dengan Laravel File Manager di Laravel 8
                                    <div>
                                        <small class="text-muted">27 April 2021,</small>
                                        <small class="text-muted">5500 views </small>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="d-flex flex-column mb-3 bg-light shadow bg-body rounded">
                            <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                Categories
                            </div>
                            <div class="overflow-auto" style="max-height: 42vh">
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Hot News
                                        <span class="badge bg-primary rounded-pill">3432</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Technology
                                        <span class="badge bg-primary rounded-pill">1423</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Lifestyle
                                        <span class="badge bg-primary rounded-pill">982</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Health
                                        <span class="badge bg-primary rounded-pill">743</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Ramadhan
                                        <span class="badge bg-primary rounded-pill">232</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Automotive
                                        <span class="badge bg-primary rounded-pill">232</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Finance
                                        <span class="badge bg-primary rounded-pill">231</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Travel
                                        <span class="badge bg-primary rounded-pill">172</span>
                                    </li>
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        Sport
                                        <span class="badge bg-primary rounded-pill">123</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div
                            class="d-flex flex-column bg-light bg-body shadow-lg rounded-3 d-md-none d-lg-none d-xl-none">
                            <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                                Tags
                            </div>
                            <div class="p-3 overflow-auto" style="max-height: 42vh">
                                <div class="nav tag-cloud">
                                    <a href="https://laros.id/tags/laravel">Laravel</a>
                                    <a href="https://laros.id/tags/bisnis">Bisnis</a>
                                    <a href="https://laros.id/tags/blogging">Blogging</a>
                                    <a href="https://laros.id/tags/template">Template</a>
                                    <a href="https://laros.id/tags/bootstrap">Bootstrap</a>
                                    <a href="https://laros.id/tags/security">Security</a>
                                    <a href="https://laros.id/tags/nexmo">Nexmo</a>
                                    <a href="https://laros.id/tags/seo">SEO</a>
                                    <a href="https://laros.id/tags/toko-online">Toko Online</a>
                                    <a href="https://laros.id/tags/jivochat">Jivochat</a>
                                    <a href="https://laros.id/tags/plugin">Plugin</a>
                                    <a href="https://laros.id/tags/tawkto">Tawkto</a>
                                    <a href="https://laros.id/tags/tokopedia">Tokopedia</a>
                                    <a href="https://laros.id/tags/ruang-guru">Ruang Guru</a>
                                    <a href="https://laros.id/tags/stack">Stack</a>
                                    <a href="https://laros.id/tags/wfh">WFH</a>
                                    <a href="https://laros.id/tags/disqus">Disqus</a>
                                    <a href="https://laros.id/tags/katalon">Katalon</a>
                                    <a href="https://laros.id/tags/selenium">Selenium</a>
                                    <a href="https://laros.id/tags/vonage">Vonage</a>
                                    <a href="https://laros.id/tags/twilio">Twilio</a>
                                    <a href="https://laros.id/tags/xampp">Xampp</a>
                                    <a href="https://laros.id/tags/larablog">Larablog</a>
                                    <a href="https://laros.id/tags/tinymce">TinyMCE</a>
                                    <a href="https://laros.id/tags/animation">Animation</a>
                                    <a href="https://laros.id/tags/restapi">RestAPI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="border-1 border-top border-primary">
        <div class="container-fluid py-4">
            <div class="copyright">
                © Copyright <strong><span>Blogobox</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                Designed by <a href="https://bisabos.com/">Bisabos</a>
            </div>
        </div>
    </footer>
    <!-- End Footer -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>

</body>

</html>