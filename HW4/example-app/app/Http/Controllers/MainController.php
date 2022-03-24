<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home()
    {
        return view('global.home', [
            'newsList' => $this->newsList,
            'title' => 'Главная страница'
        ]);
    }

    public function about()
    {
        return view('global.about');
    }

    public function review()
    {
        $reviews = new Contact();

        return view('global.review', ['reviews' => $reviews->all()]);

        //dd($reviews->all());
        //return view('review');
    }

    public function reviewCheck(Request $request)
    {
        //dd($request);
        $valid = $request->validate([
            'email' => 'required|min:4|max:30',
            'subject' => 'required|min:4|max:120',
            'message' => 'required|min:15|max:300',
        ]);

        $review = new Contact();

        $review->email = $request->input('email');
        $review->subject = $request->input('subject');
        $review->message = $request->input('message');

        $review->save();

        return redirect()->route('global.review');
    }
}
