<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex() {

    	return view ('/pages/home');
    }

    public function getEventWall() {

    	return view ('/pages/event_wall');
    }

    public function getStory() {

    	return view ('/pages/story');
    }

   
}
