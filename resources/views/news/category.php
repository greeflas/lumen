<?php
use Illuminate\Support\Str;

/**
 * View file for news controller.
 * @see \App\Http\Controllers\NewsController
 *
 * @var \App\Models\Entities\NewsCategory $category
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>
<h1><?= $category->label ?></h1>
<hr>
<?php foreach ($category->articles as $article): ?>
    <article>
        <h2><?= $article->title ?></h2>
        <time>
            <?= $article->created_at ?>
        </time>
        <p>
            <?= Str::limit($article->content, 255) ?>
        </p>
    </article>
<?php endforeach ?>
