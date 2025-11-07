<?php

namespace App\Http\Controllers;

use App\Models\Announce;
use App\Models\Event;
use App\Models\Faq;
use App\Models\Gallery;
use App\Models\Recentsnew;
use App\Models\Testimonial;
use App\Models\Training;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;
use Ramsey\Uuid\Type\Integer;

class WebPageController extends Controller
{
    public function home()
    {
        // Récupère les recentsnews dynamiques
        $recentsnews = Recentsnew::latest()->take(5)->get();
        $testimonials = Testimonial::latest()->get();
        $trainings = Training::all();
        $numerique = Training::whereHas('category', function ($query) {
            $query->where('title', 'numérique');
        })->count();

        $paramedical = Training::whereHas('category', function ($query) {
            $query->where('title', 'paramédicale');
        })->count();

        $langue = Training::whereHas('category', function ($query) {
            $query->where('title', 'langue');
        })->count();

        return view('layouts.pages.home', compact('recentsnews', 'trainings', 'numerique', 'paramedical', 'langue', 'testimonials'));
    }

    public function presentation()
    {
        $trainings = Training::all();
        $testimonials = Testimonial::latest()->get();
        $recentsnews = Recentsnew::latest()->take(5)->get();
        return view('layouts.pages.about', compact('recentsnews', 'trainings', 'testimonials'));
    }


    public function faqs()
    {
        $trainings = Training::all();
        $recentsnews = Recentsnew::latest()->take(5)->get();
        $faqs = Faq::all();
        $testimonials = Testimonial::latest()->get();
        return view('layouts.pages.faqs', compact('recentsnews', 'faqs', 'trainings', 'testimonials'));
    }

    public function actualites()
    {
        $trainings = Training::all();
        $announces = Announce::latest()->get();
        $events = Event::latest()->get();
        $galleries = Gallery::latest()->get();
        $recentsnews = Recentsnew::latest()->take(5)->get();

        return view('layouts.pages.actualites', compact('recentsnews', 'trainings', 'announces', 'events', 'galleries'));
    }

    public function contact()
    {
        $trainings = Training::all();
        $recentsnews = Recentsnew::latest()->take(5)->get();
        return view('layouts.pages.contact', compact('recentsnews', 'trainings'));
    }

    public function trainingDetail($slug)
    {
        $recentsnews = Recentsnew::latest()->take(5)->get();
        $trainings = Training::all();

        $training1 = Training::with('modules.lessons')
            ->where('slug', $slug)
            ->firstOrFail();

        return view('layouts.pages.trainings.training-detail', compact('trainings', 'recentsnews', 'training1'));
    }
}
