<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BoardController extends Controller
{
    /**
     * 一覧表示
     *
     * @return view
     */
    public function showList()
    {
        return view('board.list');
    }
}
