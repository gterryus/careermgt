<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">

        {{-- Navbar Brand --}}
        <a class="navbar-brand" href="#">
            <div class="brand-container">
                <img src="{{ url('img/logo.png') }}" class="brand" alt="AL Ittihad" />
            </div>
            <div class="brand-caption">
                <p class="title">Pondok Pesantren Al-Ittihad</p>
                <p class="caption">Karang Tengah Cianjur</p>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Lowongan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Artikel</a>
                </li>
            </ul>
        </div>

    </div>
</nav>