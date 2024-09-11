<div class="col-md-4">
    <div class="card" style="width: 18rem;">
        <img src="/assets/images/last_supper.png" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?= $post_title ?></h5>
            <p class="card-text"><?= $post_content ?></p>
            <a href="/blog/post" class="btn btn-primary">Read More</a>
            <a href="/blog/delete/<?= $post_id ?>" class="btn btn-danger">Delete</a>
            <a href="/blog/edit/<?= $post_id ?>" class="btn btn-info">Edit</a>


        </div>
    </div>
</div>
