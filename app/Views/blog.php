<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>


<h1><?= $title; ?></h1>

<div class="row">
    <?= $this->include('partials/sidebar.php'); ?>
    <div class="col-12 col-sm-9">
        <div class="row">
            <?php foreach ($posts as $post): ?>
                <?= view_cell("\App\Libraries\Blog::postItem", ['post_title' => $post['post_title'], 'post_content' => $post['post_content'], 'post_id' => $post['post_id']]) ?>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?= $this->endSection(); ?>