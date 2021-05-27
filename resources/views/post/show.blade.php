@extends('layouts.master')
@section('header')
    @parent
    <title>Education - {{ $post->title }}</title>
    <meta name="description" content="{{ $post->metadescription }}">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
@endsection

@section('content')
<div class="col-md-9 mobile-space">
    <div class="card border-primary mb-3">
        <div class="card-body text-dark">
            <h1 class="card-title mb-2">{{ $post->title }}</h1>
            <small class="text-muted">Written by <strong>{{ $post->user->name }}</strong>, published on {{ $post->created_at }}</small>
            {!! $post->body !!}
            <div class="entry-footer clearfix">
                <div class="mb-2 float-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-bookmarks" viewBox="0 0 16 16">
                        <path
                            d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z" />
                        <path
                            d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z" />
                    </svg>
                    <ul class="cats">
                        <li><a href="#">Web Development</a></li>
                    </ul>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-tags" viewBox="0 0 16 16">
                        <path
                            d="M3 2v4.586l7 7L14.586 9l-7-7H3zM2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586V2z" />
                        <path
                            d="M5.5 5a.5.5 0 1 1 0-1 .5.5 0 0 1 0 1zm0 1a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3zM1 7.086a1 1 0 0 0 .293.707L8.75 15.25l-.043.043a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 0 7.586V3a1 1 0 0 1 1-1v5.086z" />
                    </svg>
                    <ul class="tags">
                        <li><a href="#">Laravel</a></li>
                        <li><a href="#">PHP</a></li>
                        <li><a href="#">Javascript</a></li>
                    </ul>
                </div>
                <div class="d-flex border-top border-1 pt-2">
                    <small class="pt-2 pb-2 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                            fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                            <path
                                d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                        </svg>
                        47 Reactions
                    </small>
                    <small class="pt-2 pb-2 me-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                            fill="currentColor" class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                            <path
                                d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                            <path
                                d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                        </svg>
                        10 Comments
                    </small>
                    <small class="pt-2 pb-2 me-2 ms-auto">
                        <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em"
                            fill="currentColor" class="bi bi-bookmark" viewBox="0 0 16 16">
                            <path
                                d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z" />
                        </svg>
                    </small>
                </div>
            </div>
        </div>
    </div>
    <div class="card border-primary mb-3 d-md-none d-lg-none d-xl-none">
        <div class="p-2 border-bottom border-2">
            <div class="input-group mb-2">
                <input type="text" class="copyURL form-control"
                    value="https://bisabos.com/blog/cara-membuat-animasi-mengetik-teks-dengan-css-dan-javascript"
                    id="copyURL" readonly aria-label="URL Copy">
                <button class="btn btn-primary" id="copyButton" aria-label="URL Copy">
                    <span aria-hidden="true">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                            fill="currentColor" class="bi bi-clipboard" viewBox="0 0 16 16">
                            <path
                                d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z" />
                            <path
                                d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z" />
                        </svg>
                    </span>
                </button>
            </div>
        </div>
        <div class="card-body text-dark d-flex justify-content-between">
            <a href="https://www.facebook.com/sharer/sharer.php?u=PAGE_URL" target="_blank"
                rel="noreferrer" class="btn facebook text-white" title="Share this post on Facebook">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-facebook me-2" viewBox="0 0 16 16">
                    <path
                        d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                </svg>
                Share
            </a>
            <a href="whatsapp://send?text=Hello%20World!" target="_blank" rel="noreferrer"
                class="btn whatsapp text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-whatsapp me-2" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg>
                Share
            </a>
            <a href="https://twitter.com/intent/tweet?text=PAGE_TITLE&amp;url=PAGE_URL" target="_blank"
                rel="noreferrer" class="btn twitter text-white" title="Share this post on Twitter">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-twitter me-2" viewBox="0 0 16 16">
                    <path
                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z" />
                </svg>
                Share
            </a>
        </div>
    </div>
    <div class="card border-primary mb-3">
        <div class="card-body text-dark">
            <div class="contact-form article-comment">
                <div class="fw-bold fs-5 mb-2">Leave a Reply</div>
                <form id="contact-form" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="Name" id="username" placeholder="Name *"
                                    class="form-control" type="text" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="Email" id="userEmail" placeholder="Email *"
                                    class="form-control" type="email" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="message" id="message" placeholder="Your message *"
                                    rows="4" class="form-control" required></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="send">
                                <button class="btn btn-primary"><span>Submit</span></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection



@section('rightsidebar')
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="sticky-top">
            <div class="card rounded-3 shadow-lg mb-3">
                <div class="card-body">
                    <img src="{{ asset('assets/img/ads1.png') }}" height="117" width="279" class="card-img-top" alt="...">
                </div>
            </div>
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
            <div class="d-flex flex-column bg-light bg-body shadow-lg rounded-3 d-md-none d-lg-none d-xl-none">
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
@endsection