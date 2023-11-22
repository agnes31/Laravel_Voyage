<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VoyageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about()
    {
        return view('about');
    }   

    public function projects()
    {
        return view('projects');
    }  

    public function contact()
    {
        return view('contact');
    }

    public function contactForm(Request $request)
    {
        // return $request->name; // pour afficher les données du formulaire
        return view('contact', ['data' => $request]);
    } 
}
