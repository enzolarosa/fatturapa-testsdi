<?php

namespace FatturaPa\Ui;

use App\Http\Controllers\Controller;
use FatturaPa\Core\Actors\Base;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function index(Request $request)
    {
        return view('ui::index', ['actors' => Base::getActors()]);
    }

    public function sdi(Request $request)
    {
        return view('ui::sdi', ['actors' => Base::getActors()]);
    }

    public function td(Request $request, $id)
    {
        return view('ui::td', ['actor' => $id, 'actors' => Base::getActors()]);
    }

    public function channels(Request $request)
    {
        return view('ui::channels', ['actors' => Base::getActors()]);
    }
}
