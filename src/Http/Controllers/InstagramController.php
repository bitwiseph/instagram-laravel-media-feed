<?php

namespace Bitwiseph\InstagramMedia\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Services\InstagramBasicDisplay;
use Bitwiseph\InstagramMedia\Http\Services\InstagramService;

class InstagramController extends  Controller
{
    public function index()
    {
        $instagram= new InstagramService();
        $user_posts=(object) $instagram->getUsersMedia()['data'];
        return view('instagram-media::index',compact('user_posts'));
    }
}
