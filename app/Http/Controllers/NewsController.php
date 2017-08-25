<?php

namespace App\Http\Controllers;

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
        return $this->render('news.index');
    }

    /**
     * Renders news category.
     *
     * @param int $id Category ID.
     * @return string
     */
    public function category($id)
    {
        return 'News category #' . $id;
    }

    /**
     * Renders news article.
     *
     * @param int $id Article ID.
     * @return string
     */
    public function article($id)
    {
        return $this->render('news.article', ['id' => $id]);
    }
}
