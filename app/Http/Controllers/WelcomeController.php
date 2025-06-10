<?php

namespace App\Http\Controllers;

use App\Models\AboutMe;
use App\Models\Education;
use App\Models\Experience;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $aboutMe = AboutMe::first();
        if (!$aboutMe) {
            $aboutMe = new AboutMe();
            $aboutMe->full_name = 'Reski Kara';
            $aboutMe->job_title = 'Web Developer & Designer';
            $aboutMe->bio = 'Saya adalah seorang web developer yang passionate dengan teknologi modern';
            $aboutMe->skills = ['Laravel', 'PHP', 'JavaScript', 'UI/UX Design'];
            $aboutMe->save();
        }
        
        return view('welcome', compact('aboutMe'));
    }

    public function about()
    {
        $aboutMe = AboutMe::first();
        $educations = Education::orderBy('start_date', 'desc')->get();
        $experiences = Experience::orderBy('start_date', 'desc')->get();
        
        return view('about', compact('aboutMe', 'educations', 'experiences'));
    }
} 