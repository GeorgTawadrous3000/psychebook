<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>


<h1><?= $title; ?></h1>
<?= view_cell("\App\Libraries\Blog::postItem", ['post_title' => $post_title, 'post_content' => $post_content, 'post_id' => $post_id]) ?>

<?= $this->endSection(); ?>
