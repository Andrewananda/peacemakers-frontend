<?php

namespace App\Http\Controllers;

use App\Bulletin;
use App\Contact;
use App\Fellowship;
use App\Prayer_request;
use App\Sermon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ChurchController extends Controller
{


    public function index() {

        $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
        $bulletins = Bulletin::query()->limit(2)->get();
        $sermons = Sermon::query()->limit(3)->orderBy('id','DESC')->get();
        $fellowships = Fellowship::query()->limit(3)->orderBy('id','DESC')->get();
        $last_sermon = Sermon::query()->orderBy('id','desc')->limit(1)->first();
        return view('welcome',['bulletins'=>$bulletins,'sermons'=>$sermons,'fellowships'=>$fellowships,'base_url'=>$base_url,'latest_sermon'=>$last_sermon]);
    }

    public function getPrayerRequest() {
        return view('prayer-request');
    }

    public function createPrayerRequest(Request $request){
        $rules=['phone'=>'required','name'=>'required','description'=>'required'];
        $validation=Validator::make($request->all(),$rules);
        if ($validation->fails()){
            return redirect()->back()->with('warning','Fields Required');
        }
        $prayer_request= new Prayer_request();
        $prayer_request->name=$request->input('name');
        $prayer_request->email=$request->input('email');
        $prayer_request->phone=$request->input('phone');
        $prayer_request->description=$request->input('description');
        $prayer_request->save();

        return redirect()->back()->with('success','Prayer Request Sent Successfully We Will Get Back To You In A Few Minutes!');
    }

    public function getContactPage(){
        return view('contact');
    }

    public function postContact(Request $request) {

        $rules=['name'=>'required','phone'=>'required','description'=>'required'];
        $validation=Validator::make($request->all(),$rules);

        if ($validation->fails()){
            return redirect()->back()->with('warning','Inputs Required');
        }
        $contact = new Contact();
        $contact->name=$request->input('name');
        $contact->email=$request->input('email');
        $contact->phone=$request->input('phone');
        $contact->description=$request->input('description');

        $contact->save();
        return  redirect()->back()->with('success','Contact Sent Successfully');
    }


    public function singleFellowship($id) {

        $fellowship = Fellowship::where(['id'=>$id])->first();
        $sermons = Sermon::query()->orderBy('id','desc')->limit(4)->get();
        $last_sermon = Sermon::query()->orderBy('id','desc')->limit(1)->first();


        if (!$fellowship) {
            return redirect()->back();
        }else {
            $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
            return view('single-fellowship',['fellowship'=>$fellowship,'base_url'=>$base_url,'sermons'=>$sermons,'last_sermon'=>$last_sermon]);
        }

    }

    public function singleSermon($id) {
        $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
        $recent_sermons = Sermon::query()->orderBy('id','desc')->get();
        $sermon = Sermon::where(['id'=>$id])->first();
        $last_sermon = Sermon::query()->orderBy('id','desc')->limit(1)->first();
        return view('single-sermon',['base_url'=>$base_url,'sermon'=>$sermon,'sermons'=>$recent_sermons,'last_sermon'=>$last_sermon]);
    }

    public function singleBulletin($id) {
        $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
        $bulletin = Bulletin::where(['id'=>$id])->first();
        $recent_sermons = Sermon::query()->orderBy('id','desc')->get();
        $last_sermon = Sermon::query()->orderBy('id','desc')->limit(1)->first();
        return view('single-bulletin',['base_url'=>$base_url,'last_sermon'=>$last_sermon,'bulletin'=>$bulletin,'sermons'=>$recent_sermons]);
    }

    public function sermons() {
        $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
        $sermons = Sermon::query()->orderBy('id','desc')->limit(4)->get();
        return view('sermons',['base_url'=>$base_url,'sermons'=>$sermons]);
    }

    public function about() {
        $base_url = "http://localhost/PeacemakersAdmin/storage/app/public/";
        $sermons = Sermon::query()->orderBy('id','desc')->limit(4)->get();
        $last_sermon = Sermon::query()->orderBy('id','desc')->limit(1)->first();
        return view('about',['base_url'=>$base_url,'sermons'=>$sermons,'latest_sermon'=>$last_sermon]);
    }


}
