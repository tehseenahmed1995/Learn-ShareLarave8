<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllClients()
    {
        $res = Http::get('https://jsonplaceholder.typicode.com/posts');
        return $res->json();    
    }
}
