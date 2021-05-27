@extends('layouts.master')
@section('header')
    @parent
    <title>Education</title>
    <meta name="description" content="Put your description here.">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
@endsection

@section('content')
    <div class="col-lg-6 col-md-12 col-sm-12">
        @if (isset($lab))
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $lab->name }}</h2>
            </div>
            @foreach ($lab->posts as $post)
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
                                <a href="{{ $post->postable->slug }}">{{ $post->postable->name }}</a>
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @elseif (isset($assignment))
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $assignment->name }}</h2>
            </div>
            @foreach ($assignment->posts as $post)
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
                                'change'
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @elseif (isset($note))
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $note->name }}</h2>
            </div>
            @foreach ($note->posts as $post)
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
                                'change'
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @elseif (isset($book))
            <div id="section-title" class="section-title p-1 pt-3">
                <h2 class="text-center fw-bold">{{ $note->name }}</h2>
            </div>
            @foreach ($note->posts as $post)
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
                                'change'
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        
        @else
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
                                'change'
                            </small>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
        <nav class="mt-3" aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
@endsection