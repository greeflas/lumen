<?php
/**
 * View file for news controller.
 * @see \App\Http\Controllers\NewsController
 *
 * @var \App\Models\Entities\NewsCategory[] $categories
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
?>
<section>
    <h2>Create news category</h2>
    <form action="<?= route('create-category') ?>" method="post">
        <p>
            <input type="text" name="label" placeholder="Label">
        </p>
        <p>
            <textarea name="description"cols="30" rows="10" placeholder="Description"></textarea>
        </p>
        <button type="submit">Create</button>
    </form>
</section>
<hr>
<section>
    <h2>Create news article</h2>
    <form action="<?= route('create-article') ?>" method="post">
        <p>
            <select name="categoryId">
            <?php foreach ($categories as $category): ?>
                <option value="<?= $category->id ?>">
                    <?= $category->label ?>
                </option>
            <?php endforeach ?>
            </select>
        </p>
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="content" cols="30" rows="10" placeholder="Content"></textarea>
        </p>
        <button type="submit">Create</button>
    </form>
</section>
