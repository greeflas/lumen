<?php

namespace App\Http\Controllers;

/**
 * Blog controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class NewsController extends Controller
{
    public function index()
    {
        return $this->render('index');
    }

    public function category($id)
    {
        return 'News category #' . $id;
    }

    public function article($id)
    {
        return $this->render('article', ['id' => $id]);
    }
}
