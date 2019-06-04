<?php foreach ($books as $book): ?>
    <div class="book-item">
        <div class="poster">
            <img src="<?= $book['poster'] ?>" alt="<?= $book['name'] ?>" class="media-object">
        </div>
        <div>
            <h4 class="book-title">
                <?= $book['name'] ?>
            </h4>

            <p><b>ISBN</b>: <?= $book['ISBN']?> </p>
            <p><b>Price</b>: <span style="color: #3c763d;"><?= $book['price']?>$</span></p>
            <?php if (isset($book['tags'])): ?>
                <p>
                    <b>Tags</b>:
                    <?php foreach ((array)$book['tags'] as $tag): ?>
                        <span class="badge badge-pill badge-info"><?= $tag ?></span>
                    <?php endforeach; ?>
                </p>
            <?php endif; ?>
            <p><b>URL</b>: <a href="<?= $book['url']?>" target="_blank"><?= $book['url']?></a> </p>

        </div>
    </div>
<?php endforeach; ?>

<div class="pagination-page">
    <?php
    $pages = ceil($criteria['total'] / $criteria['limit']);
    $current = ($criteria['offset'] / $criteria['limit']);
    ?>
    <ul class="pagination">
        <?php for ($i = 0; $i < $pages; $i++): ?>
            <li class="<?= $i == $current ? 'active' : '' ?> page-item">
                <?php
                $params = array_filter(array_merge($_GET, ['page' => $i]), function ($value) {
                    return !empty($value);
                });
                $page = !empty($params) ? \core\router\generate('books') . '?' . http_build_query($params) : \core\router\generate('books');
                ?>
                <a href="<?= $page ?>" class="page-link">
                    <?= ($i + 1) ?>
                </a>
            </li>
        <?php endfor; ?>
    </ul>
</div>
