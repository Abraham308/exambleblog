<!doctype html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Бложик</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/utility.css">
</head>
<body class="d-flex flex-column">
<header>
    <div class="container">
        <div class="row bg-dark text-white p-3 align-items-center text-center">
            <div class="col-md-4 text-md-left text-start">
                <h1>Блог обо всем</h1>
            </div>
            <div class="col-md-8 text-md-right text-end">
                <?php if    ($isAuth == true): ?>
                    <a class="btn btn-success" href="add-post.php" role="button">Добавить пост</a>
                    <a class="btn btn-warning" href="#" role="button">Мои посты</a>
                    <a class="btn btn-secondary" href="/auth" role="button">Выйти</a>
                <?php else: ?>
                    <a class="btn btn-primary" href="/auth" role="button">Регистрация</a>
                    <a class="btn btn-primary" href="/auth" role="button">Войти</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<main class="m-2 flex-grow-1">
    <?= $content ?>
</main>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-12 bg-dark text-white p-3">
                <p class="text-center align-self-center mb-0">Все права соблюдены 2021</p>
            </div>
        </div>
    </div>
</footer>
</body>
</html>
