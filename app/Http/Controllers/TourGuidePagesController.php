<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TourGuidePagesController extends Controller
{
    public function getTourGuideJoinedTour() {

    	return view ('/tour_guide/joined_tour');
    }

    public function getTourGuideMyNoticeBoard() {

    	return view ('/tour_guide/my_noticeboard');
    }

    	public function getTourGuideMyStory() {

    	return view ('/tour_guide/mystory');
    }

    public function getTourGuideProfile() {

    	return view ('/tour_guide/profile');
    }
}
