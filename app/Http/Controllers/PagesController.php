<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Search;
use App\Content;

class PagesController extends Controller
{
    //index funtion.. front page
    public function index(){
    //setting title of project
    $data = array(

        'searches' => Search::all(),
        'title' => 'WiTrucks',
        'phrase' => ' a trucking platform'
    );
    return view('pages.index')->with($data);
    }

    //Our Services, Company information
    public function our_services(){
    $data = array(
        'title' => 'Our Services',
        'phrase' => ' a trucking platform',
        'services' => ['Fast', 'Efficient','Secure']
    );
        return view('pages.our_services')->with($data);
    }

    //career funtion.. information regarding jobs
    public function careers(){
    $data = array(
        'title' => 'Careers',
        'phrase' => ' a trucking platform'
    );
        return view('pages.careers')->with($data);
    }

    //company contacts
    public function contacts(){
    $data = array(
        'title' => 'Contacts',
        'phrase' => ' a trucking platform'
    );
        return view('pages.contacts')->with($data);
    }

   
    //footer pages
    public function events(){
    $data = array(
        'title' => 'Coming Events',
        'phrase' => ' a trucking platform'
    );
        return view('pages.events')->with($data);
    }


    public function teams(){
    $data = array(
        'title' => 'Our Teams',
        'phrase' => ' a trucking platform'
    );
        return view('pages.teams')->with($data);
    }


    public function mentors(){
    $data = array(
        'title' => 'Our Team Mentors',
        'phrase' => ' a trucking platform'
    );
        return view('pages.mentors')->with($data);
    }


    public function gallery(){
    $data = array(
        'title' => 'Special Gallery',
        'phrase' => ' a trucking platform'
    );
        return view('pages.gallery')->with($data);
    }



    public function collections(){
    $data = array(
        'title' => 'Our Collection',
        'phrase' => ' a trucking platform'
    );
        return view('pages.collections')->with($data);
    }


    public function companies(){
    $data = array(
        'title' => 'Related Companies',
        'phrase' => ' a trucking platform'
    );
        return view('pages.companies')->with($data);
    }


    public function terms_and_conditions(){
    $data = array(
        'title' => 'Our Terms',
        'phrase' => ' a trucking platform'
    );
        return view('pages.terms_and_conditions')->with($data);
    }

}
