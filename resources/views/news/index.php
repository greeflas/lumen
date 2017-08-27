<?php
/**
 * View file for article controller.
 * @see \App\Http\Controllers\NewsController
 *
 * @var \App\Models\Entities\NewsCategory[] $categories
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>
<?php foreach ($categories as $category): ?>
<div>
    <h2><?= $category->label ?></h2>
    <p><?= $category->description ?></p>
    <a href="<?= route('category', ['id' => $category->id]) ?>">Read more</a>
</div>
<?php endforeach ?>
