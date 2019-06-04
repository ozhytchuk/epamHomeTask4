<!doctype html>
<html lang="en">
<head>
    <title><?= $app['name'] ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css"/>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
          integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?= \core\router\generate('books') ?>">
            <i id="my-icon" class="fas fa-book-open"></i><?= $app['name'] ?></a>
        <form action="<?= \core\router\generate('books') ?>" class="form-inline" method="get">
            <input placeholder="Search by tag" name="tag" value="<?= isset($criteria['tag']) ? $criteria['tag'] : '' ?>" required
                   class="form-control mr-sm-2" id="search">
            <button class="btn btn-info">Find</button>
        </form>
        <form action="<?= \core\router\generate('books') ?>" class="form-inline" method="get">
            <input placeholder="Search by word" name="q" value="<?= isset($criteria['q']) ? $criteria['q'] : '' ?>" required
                   class="form-control mr-sm-2" aria-label="Search" id="search">
            <button class="btn btn-info">Search</button>
        </form>

    </div>
</nav>

<div class="container">
    <div class="sort-items">
        <b>Sort by: </b>
        <a href="?sort=price">Price</a>
        <a href="?sort=name">Name</a>
    </div>
    <?= $content ?>
</div>

<hr>

<footer class="footer">
    <div class="container">
        <p class="text-muted">© <?= date_format(date_create(), 'Y') ?> Company, Inc.</p>
    </div>
</footer>

</body>
</html>
