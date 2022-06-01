<?php

namespace App\Http\Controllers;

use App\Models\Site;
use App\Models\Theme;
use Illuminate\Http\Request;

class SiteController extends Controller
{

    public function index()
    {
        $mySites = Site::with('theme')->where('user_id', auth()->user()->id)->get();
        return view('sites.index')->with(['sites' => $mySites]);
    }

    public function create(Request $request)
    {
        $theme = Theme::where('slug', $request->theme)->first();
        return view('sites.create')->with(['theme' => $theme]);
    }

    public function store(Request $request)
    {
        $request->validate([
            '*' => 'required',
        ]);

        $newSite = [
            'slug' => $request->slug,
            'company_name' => $request->company_name,
            'headline' => $request->headline,
            'subheadline' => $request->subheadline,
            'about_us' => $request->about_us,
            'service1' => $request->service1,
            'service2' => $request->service2,
            'service3' => $request->service3,
            'email' => $request->email,
            'phone' => $request->phone,
            'instagram' => $request->instagram,
            'is_public' => $request->has('is_public'),
            'user_id' => auth()->user()->id,
            'theme_id' => $request->theme_id,
        ];

        $site = Site::create($newSite);
        if (!$site->exists) {
            return abort(500);
        }

        return redirect('/dashboard/sites')->with('create-success', 'Site created successfuly !');
    }

    public function show($slug)
    {
        $site = Site::with('theme')->where('slug', $slug)->first();
        if (!$site) {
            return abort(404);
        } else if (!$site->is_public) {
            return abort(403);
        }

        return view('templates.' . $site->theme->slug)->with(['site' => $site]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
