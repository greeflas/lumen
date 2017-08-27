<?php
/**
 * View file for news controller.
 * @see \App\Http\Controllers\NewsController
 *
 * @var \App\Models\Entities\NewsArticle $article
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>
<article>
    <h1>
        <?= $article->title ?>
    </h1>
    <time>
        <?= $article->created_at ?>
    </time>
    <p>
        <?= $article->content ?>
    </p>
    <a href="<?= route('category', ['id' => $article->category_id]) ?>">
        Back to <i><?= $article->category->label ?></i>
    </a>
</article>
