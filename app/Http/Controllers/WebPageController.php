<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\Recentsnew;
use Illuminate\Http\Request;


class WebPageController extends Controller
{
    public function home()
    {
        // Récupère les recentsnews dynamiques
        $recentsnews = Recentsnew::latest()->take(5)->get();
        return view('layouts.pages.home', compact('recentsnews'));
    }

    public function presentation()
    {
        $recentsnews = Recentsnew::latest()->take(5)->get();
        return view('layouts.pages.about', compact('recentsnews'));
    }


    public function faqs()
    {
        $recentsnews = Recentsnew::latest()->take(5)->get();
        $faqs = Faq::all();
        return view('layouts.pages.faqs', compact('recentsnews', 'faqs'));
    }

    public function actualites()
    {
        $recentsnews = Recentsnew::latest()->take(5)->get();

        return view('layouts.pages.actualites', compact('recentsnews'));
    }

    public function contact()
    {
        $recentsnews = Recentsnew::latest()->take(5)->get();
        return view('layouts.pages.contact', compact('recentsnews'));
    }
}
