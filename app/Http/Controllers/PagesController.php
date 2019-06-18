<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  public function index() {
    $title = 'Welcome To Laravel';
    //return view('pages.index', compact('title')); Lines 11 and 12 both accomplish same thing - This is a way to pass variables to the view from controller.
    return view('pages.index')->with('title', $title);
  }

  public function about() {
    $title = 'About Laravel';
    return view('pages.about')->with('title', $title);
  }

  public function services() {
    $data = array(
      'title' => 'Laravel Services Page',
      'services' => ['Web Design', 'Programming', 'SEO']
    );
      return view('pages.services')->with($data);
    }
  }
