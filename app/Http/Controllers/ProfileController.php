<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Candidate;
use Illuminate\Support\Facades\Storage;


class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id = 0)
    {
        if ($id) {

            return $id;
        }

        return 'index';
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return dd($request->request);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user =   User::join('candidates', 'users.id', '=', 'candidates.user_id')->find(Auth::id());

        return view('profileEdit')->withUser($user)->withExam(json_decode($user->education));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {


        $user_id = Auth::id();

        $candidate                     = Candidate::find($user_id);
        $user                          = User::find($user_id);

        $user->name                    = $request->name;
        $candidate->father             = $request->father;
        $candidate->present_address    = $request->present_address;
        $candidate->parmanent_address  = $request->parmanent_address;
        $candidate->fb_id              = $request->fb_id;
        $candidate->religion           = $request->religion;
        $candidate->blood_group        = $request->blood_group;
        $candidate->height             = $request->height;
        $candidate->weight             = $request->weight;
        $candidate->body_color         = $request->body_color;
        $candidate->phone              = $request->phone;
        $candidate->profession         = $request->profession;
        $candidate->education          = $request->exam;
        $candidate->father_profession  = $request->father_profession;
        $candidate->father_phone       = $request->father_phone;
        $candidate->mother_profession  = $request->mother_profession;
        $candidate->mother_phone       = $request->mother_phone;
        $candidate->siblings           = $request->siblings;
        $candidate->extra_virtue       = $request->extra_virtue;
        $candidate->images             = $request->images;
        $candidate->gender             = $request->gender;
        $candidate->premarried         = $request->premarried || 0;
        $candidate->pre_spouse_name    = $request->premarried ? $request->pre_spouse_name : null;
        $candidate->pre_spouse_father  = $request->premarried ? $request->pre_spouse_father : null;
        $candidate->divorce_details    = $request->premarried ? $request->divorce_details : null;
        $candidate->pre_spouse_address = $request->premarried ? $request->pre_spouse_address : null;
        $candidate->dob                = $request->dob;


        if ($request->hasFile('profile_photo')) {
            $fileName = 'profile_id_' . $user_id . '_' . time() . '.' . $request->profile_photo->extension();
            $request->profile_photo->storeAs('public/images/profile_photo/', $fileName);
            $url = Storage::url("images/profile_photo/" . $fileName);
            $candidate->profile_photo = $url;
        }

        if ($request->delete_profile_photo) {
            $candidate->profile_photo = null;
        }

        $user->save();
        $candidate->save();

        $request->session()->flash('status', 'Profile updated successfully');

        return redirect()->route('profile-edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
