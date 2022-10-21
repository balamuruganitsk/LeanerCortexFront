<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() 
    {
        return view('index');
    }

    public function leadregister() 
    {
        return view('leadregister');
    }

    public function bulk() 
    {
        return view('bulk');
    }

    public function leadsource() 
    {
        return view('leadsource');
    }

    public function leadstatus() 
    {
        return view('leadstatus');
    }

    public function leadbranch() 
    {
        return view('leadbranch');
    }

    public function leadchecklist() 
    {
        return view('leadchecklist');
    }

    public function intake() 
    {
        return view('intake');
    }
    
    public function userrole() 
    {
        return view('userrole');
    }

    public function userpermission() 
    {
        return view('userpermission');
    }

    public function user() 
    {
        return view('user');
    }

    public function country() 
    {
        return view('country');
    }

    public function state() 
    {
        return view('state');
    }

    public function district() 
    {
        return view('district');
    }

    public function city() 
    {
        return view('city');
    }

    public function address() 
    {
        return view('address');
    }

    public function adsopkeywords() 
    {
        return view('adsopkeywords');
    }
    public function adsoptopics() 
    {
        return view('adsoptopics');
    }
    public function adsopquestions() 
    {
        return view('adsopquestions');
    }
    public function adsopattribute() 
    {
        return view('adsopattribute');
    }
    public function studentenroll() 
    {
        return view('studentenroll');
    }
    public function sop() 
    {
        return view('sop');
    }
    public function questionaries() 
    {
        return view('questionaries');
    }

    public function student() 
    {
        return view('student');
    }
    public function studentlogin() 
    {
        return view('studentlogin');
    }



}





