<nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
    <div class="container px-5">
        <a class="navbar-brand h2 text-primary">saunakokokara</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="bi-list"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            @if (Route::has('login'))
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    @auth
                    @else
                        <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('login') }}">ログイン</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a class="nav-link me-lg-3" href="{{ route('register') }}">新規登録</a></li>
                        @endif
                    @endauth
                </ul>
            @endif

            {{-- <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal"> --}}
                <span class="d-flex align-items-center">
                    {{-- <i class="bi-chat-text-fill me-2"></i> --}}
                    <span class="small">ログインしないで使用</span>
                </span>
            {{-- </button> --}}
        </div>
    </div>
</nav>
