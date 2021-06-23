@extends('layouts.master')
@section('header')
    @parent
    <title>Note Lagbe</title>
    <meta name="description" content="Put your description here.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
@endsection

@section('content')
    <div class="col-lg-6 col-md-12 col-sm-12">
        @isset($lab)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $lab->course->short_name." ".$lab->name }}</h2>
            </div>
            @foreach ($lab->posts()->paginate(5) as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                0 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                0 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                <a href="{{ $post->postable->slug }}">{{ $post->postable->name }}</a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $lab->posts()->paginate(5)->links('pagination.default') }}
            </nav>
        @endisset
        @isset($assignment)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $assignment->name }}</h2>
            </div>
            @foreach ($assignment->posts()->paginate(5) as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                0 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                0 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                0 Reations
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $assignment->posts()->paginate(5)->links('pagination.default') }}
            </nav>
        @endisset
        @isset($note)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $note->name }}</h2>
            </div>
            @foreach ($note->posts()->paginate(5) as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="post-detail.html">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                47 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                10 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                0 Reations
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $note->posts()->paginate(5)->links('pagination.default') }}
            </nav>
        @endisset
        @isset($book)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $book->name }}</h2>
            </div>
            @foreach ($book->posts()->paginate(5) as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="post-detail.html">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                47 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                10 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                0 Reations
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $book->posts()->paginate(5)->links('pagination.default') }}
            </nav>
        @endisset

        @isset($assessment)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $assessment->name }}</h2>
            </div>
            @foreach ($assessment->posts()->paginate(5) as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="post-detail.html">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                47 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                0 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                0 Reations
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $assessment->posts()->paginate(5)->links('pagination.default') }}
            </nav>
        @endisset
        @isset($posts)
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">All Post</h2>
            </div>
            @foreach ($posts as $post)
                <div class="card bg-light shadow bg-body rounded-3 mb-2">
                    <div class="card-body">
                        <h2 class="card-title">
                            <a href="{{ route('post.show', ['post' => $post->slug]) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="card-text">{{ $post->metadescription }}</p>
                        <div class="d-flex text-center border-top border-1 pt-2">
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-heart" viewBox="0 0 16 16">
                                    <path
                                        d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z" />
                                </svg>
                                0 Reactions
                            </small>
                            <small class="pt-2 pb-2 me-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" fill="currentColor"
                                    class="bi bi-chat-left-dots" viewBox="0 0 16 16">
                                    <path
                                        d="M14 1a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H4.414A2 2 0 0 0 3 11.586l-2 2V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12.793a.5.5 0 0 0 .854.353l2.853-2.853A1 1 0 0 1 4.414 12H14a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z" />
                                    <path
                                        d="M5 6a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                </svg>
                                0 Comments
                            </small>
                            <small class="pt-2 pb-2 me-2 ms-auto">
                                @if (Str::lower(str_replace('App\\Models\\', '', $post->postable_type)) == 'lab')
                                <a href="{{ route('lab.show', ['lab' => $post->postable->slug]) }}">{{ Str::upper($post->postable->course->course_code) }}</a>
                                    <a href="{{ route('lab.show', ['lab' => $post->postable->slug]) }}">{{ Str::upper($post->postable->name) }}</a>
                                @elseif (Str::lower(str_replace("App\\Models\\","",$post->postable_type)=='assignment') )
                                    <a href="{{ $post->postable->slug }}">else</a>
                                @endif

                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
            <nav class="mt-3" aria-label="Page navigation example">
                {{ $posts->links('pagination.default') }}
            </nav>
        @endisset

    </div>
@endsection
@section('rightsidebar')
    <div class="col-lg-3 col-md-12 col-sm-12">
        <div class="sticky-top">
            <div class="card rounded-3 shadow-lg mb-3">
                <div class="card-body">
                    <img src="assets/img/ads1.png" height="117" width="279" class="card-img-top" alt="...">
                </div>
            </div>
            <div class="bg-light shadow bg-body rounded-3 mb-3">
                <div class="card-header bg-primary bg-gradient text-white fw-bold fs-5">
                    Varsities
                </div>
                <ul class="list-group list-group-flush mb-2">
                    @foreach ($varsities as $varsity)
                        <li class="list-group-item">
                            <a href="{{ route('varsity.show', ['varsity' => $varsity->slug]) }}">{{ $varsity->name }}</a>
                        </li>
                    @endforeach

                </ul>
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
