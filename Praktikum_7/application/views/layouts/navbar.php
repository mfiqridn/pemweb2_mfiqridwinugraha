<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= base_url() ?>">Praktikum CI</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-link active" aria-current="page" href="<?= base_url() ?>">Home</a>
                <a class="nav-link" href="<?= base_url("dosen"); ?>">Dosen</a>
                <a class="nav-link" href="<?= base_url("mahasiswa") ?>">Mahasiswa</a>
                <a class="nav-link" href="<?= base_url("mata_kuliah"); ?>">Matakuliah</a>
            </div>
        </div>
    </div>
</nav>