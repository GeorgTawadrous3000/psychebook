<?= $this->extend('layouts/main'); ?>
<?= $this->section('content'); ?>


<h1>Form Validation</h1>
    <?php if(isset($validation)) : ?>
        <div class="text-danger">
            <?= $validation->listErrors(); ?>
        </div>
    <?php endif; ?>
    <form method="post" action="/form">
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                   placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" type="password" class="form-control" id="exampleInputPassword1"
                   placeholder="Password">
        </div>
        <br>
        <div class="form-group">
            <label for="exampleInputPassword1">Category</label>
            <select name="category" class="form-control">
                <?php foreach ($categories as $cat) : ?>
                    <option value="<?= $cat ?>"><?= $cat ?></option>
                <?php endforeach; ?>
            </select>
            <br>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>


<?= $this->endSection(); ?>