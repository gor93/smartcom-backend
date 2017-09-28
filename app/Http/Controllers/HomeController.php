<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Created by PhpStorm.
 * User: Hovo
 * Date: 28.09.2017
 * Time: 20:51
 */
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
}
