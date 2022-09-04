<!-- carousel -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="<?= base_url('assets/') ?>img/tes.webp" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>img/tes1.webp" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="<?= base_url('assets/') ?>img/tes2.webp" class="d-block w-100" alt="..." />
            <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
<!-- end carousel -->
<div class="news mb-4" id="news">
    <div class="container">
        <h2 class="text-center fw-bolder mb-4 fs-3">Latest News</h2>
        <hr />
        <div class="content">
            <div class="row">
                <?php foreach ($news as $data) : ?>
                    <div class="col-md-12 col-sm-12 col-lg-12 d-flex justify-content-center">
                        <div class="card mb-4 w-50">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="<?= base_url('assets/') ?>img/<?= $data['foto']; ?>" class="img-fluid rounded-start h-100 w-100" alt="Images" />
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title text-capitalize">
                                            <a class="text-decoration-none" href="<?= base_url('home/detail/' . $data['id']) ?>"><?= $data['title']; ?></a>
                                        </h5>
                                        <p class="card-text">
                                            <?= word_limiter($data['description'], 15); ?>
                                        </p>
                                        <p class="card-text">
                                            <small class="text-muted"><?= $data['name']; ?> | <?= indonesia_date($data['publish_date']); ?></small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>