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
}
