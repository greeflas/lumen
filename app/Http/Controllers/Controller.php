<?php

namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;

/**
 * Basic web controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class Controller extends BaseController
{
    /**
     * @var string Name of basic layout file.
     */
    protected $layoutName = 'main';
    /**
     * @var string Path to layouts catalog.
     */
    protected $layoutPath = 'layouts';


    /**
     * Renders view file in basic layout.
     *
     * @param string $viewName Name of view file.
     * @param array $params
     * @return string
     */
    protected function render($viewName, $params = [])
    {
        $content = view($viewName, $params)->render();
        $layout = $this->layoutPath . '.' . $this->layoutName;

        return view($layout, ['content' => $content])->render();
    }
}
