<?php

namespace App\Http\Controllers;

use App\Models\AboutUs;
use App\Models\Feedback;
use App\Models\Mission;
use App\Models\SolideEx;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index()
    {
        $about = AboutUs::first();
        $missions = Mission::orderby('id','ASC')->get();
        $solides = SolideEx::orderby('id','ASC')->get();

        return view('backend.about.index', compact(['about','missions','solides']));
    }
    public function aboutUpdate(Request $request)
    {
        $about = AboutUs::first();
        $status = $about->update([
            'heading' => $request->heading,
            'content' => $request->content,
            'image' => $request->image,
            'video' => $request->video,
            'address' => $request->address,
            'phone' => $request->phone,
            'email' => $request->email,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'linkedin' => $request->linkedin,
            'twitter' => $request->twitter,
            'youtube' => $request->youtube,
            'mot_president' => $request->mot_president,
            'desc_mot_president' => $request->desc_mot_president,
            'nom_mot_president' => $request->nom_mot_president,
            'poste_mot_president' => $request->poste_mot_president,
            'photo_mot_president' => $request->photo_mot_president,
            'video_mot_president' => $request->video_mot_president,
            'solide_desc' => $request->solide_desc,
            'mission_desc' => $request->mission_desc,
            'catalogue' => $request->catalogue,
        ]);

        if ($status) {
            return redirect()->back()->with('success', 'Modifié avec succès');
        } else {
            return back()->with('error', 'something went wrong!');
        }
    }



}