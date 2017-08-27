<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for `news_article` table.
 *
 * @property int $id
 * @property int $category_id
 * @property string $title
 * @property string $content
 * @property int $created_at
 * @property int $updated_at
 *
 * @property NewsCategory $category
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class NewsArticle extends Model
{
    /**
     * @inheritdoc
     */
    protected $table = 'news_article';
    /**
     * @inheritdoc
     */
    protected $hidden = [
        self::UPDATED_AT,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function category()
    {
        return $this->hasOne(NewsCategory::class, 'id', 'category_id');
    }
}
