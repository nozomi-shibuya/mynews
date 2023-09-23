<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        $this->validate($request, Profile::$rules);
        
        $news = new Profile;
        $form = $request->all();
    }

    public function edit(Request $request)
    {
        // News Modelからデータを取得する
        $profile = Profile::find($request->id);
        if (empty($news)) {
            abort(404);
        }
        return view('admin.profile.edit', ['profile_form' => $profile]);
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
