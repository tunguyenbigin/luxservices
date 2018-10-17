<?php

namespace Modules\Pages\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Response
     */
    public function home()
    {
        return view('pages::home');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function ourTeam()
    {
        return view('pages::ourTeam');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function gallery()
    {
        return view('pages::gallery');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function portfolio()
    {
        return view('pages::portfolio');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function faq()
    {
        return view('pages::faq');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function contact()
    {
        return view('pages::contact');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function about()
    {
        return view('pages::about');
    }

    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function blog()
    {
        return view('pages::blog');
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function login()
    {
        return view('pages::login');
    }


    /**
     * Show the form for creating a new resource.
     * @return Response
     */
    public function register()
    {
        Session::put('userTMP', ['verify' => false, 'step' => []]);
        Session::save();

        return view('pages::register');
    }

}
