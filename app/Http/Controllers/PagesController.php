<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    /**
     * 指向 pages 模块下的 root 页面
     *
     * @return string
     */
    public function root()
    {
        return view('pages.root');
    }
}
