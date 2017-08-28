<?php

namespace App\Http\Controllers;

/**
 * Secret controller.
 *
 * @author Vladimir Kuprienko <vldmr.kuprienko@gmail.com>
 */
class SecretController extends Controller
{
    public function index()
    {
        return $this->render('secret.index');
    }

    public function details()
    {
        return $this->render('secret.details');
    }

    public function notAllowed()
    {
        return 'Not allowed.';
    }
}
