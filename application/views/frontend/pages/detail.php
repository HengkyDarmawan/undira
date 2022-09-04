<!-- detail -->
<div class="container detail mt-4">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 mb-5">
            <h1 class="text-center fw-bolder fs-3"><?= $news->title; ?></h1>
            <nav>
                <ol class="breadcrumb" style="float:right;">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="<?= base_url(); ?>">Teknik Informatika</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Detail</li>
                </ol>
            </nav>
            <img src="<?= base_url('assets/') ?>img/<?= $news->foto; ?>" class="rounded img-fluid mb-4" alt="Image" />
            <p class="text-justify" style="text-align: justify;"><?= nl2br($news->description); ?></p>
            <p class="text-end">Posted By <strong><?= $news->username; ?></strong> <?= indonesia_date($news->publish_date); ?></p>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
<!-- end detail -->