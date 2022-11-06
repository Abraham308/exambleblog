<div class="container h-100">
    <div class="row justify-content-center align-items-center h-100">
        <form method="post" class="col-md-6 text-center" enctype="multipart/form-data">
            <div  class="form-group">
                <h1>Добавление поста</h1>
            </div>
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Введи название поста" name="title">
                <span class="text-danger"><?= $errors['title'] ?? "" ?></span>
            </div>
            <div class="form-group mt-4">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="category_id">
                    <option selected value="0">Выберите категорию</option>
                    <?php foreach ($categories as $category): ?>
                        <option value="<?= $category['id']?>"><?= $category['title']?></option>
                    <?php endforeach; ?>
                </select>
                <span class="text-danger"><?= $errors['category_id'] ?? "" ?></span>
            </div>
            <div class="form-group">
                <label class="font-weight-bold">Введите описание</label>
                <textarea class="form-control" cols="20" rows="10" name="description"></textarea>
                <span class="text-danger"><?= $errors['description'] ?? "" ?></span>
            </div>
            <div class="custom-file form-group mt-4">
                <input class="form-control form-control-lg" id="formFileLg" type="file" name="photo">
                <span class="text-danger"><?= $errors['photo'] ?? "" ?></span>
            </div>
            <button type="submit" class="btn btn-primary mt-3 w-100">Добавить</button>
        </form>
    </div>
</div>
