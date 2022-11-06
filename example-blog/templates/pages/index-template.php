<div class="container">
    <div class="row justify-content-center m-3">
        <div class="col-6">
            <form action="">
                <input type="text" class="form-control" placeholder="Поиск. Введите название и нажмите Enter">
            </form>
        </div>
    </div>
    <div class="row justify-content-center m-3">
        <ul class="list-group list-group-horizontal justify-content-center">
            <?php foreach ($categories as $category): ?>
                <li class="list-group-item bg-dark"><a class="text-white" href="#"><?= $category['title']; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>
    <div class="posts row">
        <?php foreach ($posts as $post): ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?=$post['img_url'] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="text-secondary"><?=$post['category'] ?></p>
                        <h5 class="card-title"><?=$post['title'] ?></h5>
                        <a href="/single.php?id=<?=$post['id']?>" class="btn btn-primary">Подробнее</a>
                        <?php if ($isAuth == true): ?>
                            <div class="mt-2">
                                <a href="/single" class="btn btn-secondary">Редактировать</a>
                                <a href="/single" class="btn btn-danger">Удалить</a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>
