<div class="container">
    <div class="row justify-content-center m-3">
        <div class="col-6">
            <form action="">
                <input type="text" class="form-control" placeholder="Поиск. Введи название и нажмите Enter">
            </form>
        </div>
    </div>
    <div class="row justify-content-center m-3">
        <ul class="list-group list-group-horizontal justify-content-center">
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Путешествия</a></li>
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Наука и технологии</a></li>
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Лайфхаки</a></li>
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Мотивация</a></li>
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Переводы песен</a></li>
            <li class="list-group-item bg-dark"><a class="text-white" href="#">Фильмы и сериалы</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <img src="<?= $post['img_url']?>" class="card-img-top card" alt="...">
                <div class="card-body">
                    <span class="text-secondary"><?= $post['category'] ?></span>
                    <h1 class="card-title"><?= $post['title'] ?></h1>
                    <p><?= $post['description']?></p>
                    <a href="/edit" class="btn btn-primary">Редактировать</a>
                    <a href="#" class="btn btn-danger">Удалить</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <h4 class="pt-2">Комментарии</h4>
        </div>
    </div>
    <div class="row pt-3">
        <div class="col">
            <form method="post" action="">
                <div class="mb-3 form-group">
                    <label for="text" class="sr-only">Комментарий</label>
                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Оставьте комментарий..." required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success mb-2">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row py-2 justify-content-center comments">
        <p>К этому посту никто ещё не оставлял комментариев. Станьте первым!</p>
        <div class="col-12 comment">
            <hr>
            <p class="m-0 text-secondary">22.03.21</p>
            <h5 class="pt-2"><b>Кент Василий</b></h5>
            <p>Читал бы и читал. The Best!</p>
        </div>
        <div class="col-12 comment">
            <hr>
            <p class="m-0 text-secondary">20.03.21</p>
            <h5 class="pt-2"><b>John Doe</b></h5>
            <p>What?!</p>
        </div>
    </div>
</div>
