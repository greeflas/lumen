<?php

namespace App\Http\Controllers;

use App\Models\Entities\NewsArticle;
use App\Models\Entities\NewsCategory;
use Illuminate\Http\Request;

/**
 * News controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class NewsController extends Controller
{
    /**
     * Index action.
     *
     * @return string
     */
    public function index()
    {
        $categories = NewsCategory::with('articles')->get();
        return $this->render('news.index', compact('categories'));
    }

    /**
     * Renders news category.
     *
     * @param int $id Category ID.
     * @return string
     */
    public function category($id)
    {
        $category = NewsCategory::findOrFail($id);
        $category->load('articles'); // lazy load of relation
        return $this->render('news.category', compact('category'));
    }

    /**
     * Renders news article.
     *
     * @param int $id Article ID.
     * @return string
     */
    public function article($id)
    {
        $article = NewsArticle::findOrFail($id);
        $article->load('category'); // lazy load of relation
        return $this->render('news.article', compact('article'));
    }

    /**
     * Creates news category.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createCategory(Request $request)
    {
        $category = new NewsCategory();
        $category->label = $request->input('label');
        $category->description = $request->input('description');
        $category->save();

        return redirect()->route('news');
    }

    /**
     * Creates news article.
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createArticle(Request $request)
    {
        $article = new NewsArticle();
        $article->category_id = $request->input('categoryId');
        $article->title = $request->input('title');
        $article->content = $request->input('content');
        $article->save();

        return redirect()->route('category', [
            'id' => $article->category_id
        ]);
    }

    /**
     * Renders forms for creation of categories and articles.
     *
     * @return string
     */
    public function create()
    {
        $categories = NewsCategory::all(['id', 'label']);
        return $this->render('news.create', compact('categories'));
    }
}
