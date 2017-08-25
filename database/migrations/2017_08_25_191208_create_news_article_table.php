<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

/**
 * Handles creation of `news_article` table.
 */
class CreateNewsArticleTable extends Migration
{
    /**
     * @var string Migration table name.
     */
    public $tableName = 'news_article';
    /**
     * @var string Reference table name.
     */
    public $refTableName = 'news_category';


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tableName, function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('category_id')->nullable();
            $table->string('title');
            $table->text('content');
            $table->timestamps();

            $table->foreign('category_id', 'news_article-news_category-fk')
                ->references('id')
                ->on($this->refTableName)
                ->onUpdate('CASCADE')
                ->onDelete('SET NULL');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop($this->tableName);
    }
}
