<?php

namespace App\Http\Controllers;

/**
 * Blog controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class NewsController extends Controller
{
    public function category($id)
    {
        return 'News category #' . $id;
    }
}
