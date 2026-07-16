<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use Illuminate\Http\Request;

class SubscriberController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email'=>'required|email|unique:subscribers,email',
         ]);
        
        Subscriber::create($data);

        // return back()->with('status' ,'Email Ajouter Avec Success');

        return back()->with([
    'status' => 'Email ajouté avec succès',
    'status2' => 'Merci pour votre inscription.',
]);
    }
}
