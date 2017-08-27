<?php

namespace App\Models\Entities;

use Illuminate\Database\Eloquent\Model;

/**
 * Model class for `news_category` table.
 *
 * @property int $id
 * @property string $label
 * @property string $description
 * @property int $created_at
 * @property int $updated_at
 *
 * @property NewsArticle[] $articles
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class NewsCategory extends Model
{
    /**
     * @inheritdoc
     */
    protected $table = 'news_category';
    /**
     * @inheritdoc
     */
    protected $hidden = [
        self::CREATED_AT,
        self::UPDATED_AT,
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function articles()
    {
        return $this->hasMany(NewsArticle::class, 'category_id', 'id');
    }
}
