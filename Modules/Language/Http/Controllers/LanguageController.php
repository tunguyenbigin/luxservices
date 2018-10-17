<?php

namespace Modules\Language\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function index($language)
    {
        Session::put('language', $language);
        Session::save();
        return redirect()->back();
    }
}
