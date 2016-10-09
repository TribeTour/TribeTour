<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class StudentPagesController extends Controller
{
    public function getStudentJoinedTour() {

    	return view ('/students/joined_tour');
    }

    public function getStudentMyNoticeBoard() {

    	return view ('/students/my_noticeboard');
    }

    	public function getStudentMyStory() {

    	return view ('/students/mystory');
    }

    public function getStudentProfile() {

    	return view ('/students/profile');
    }
}
