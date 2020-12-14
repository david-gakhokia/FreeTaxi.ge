<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\Post;
use App\Taxi;


class HomeController extends Controller
{
    public function index()
    {
        $Taxis = Taxi::latest()->paginate(3);
        $Clients = Client::latest()->paginate(3);
        $Posts = Post::latest()->paginate(4);

        return view('index', compact (['Clients','Posts','Taxis']));
    }
}
