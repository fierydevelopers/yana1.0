<?php

namespace App\Http\Controllers;

use App\Test;
use Illuminate\Http\Request;
use App\Http\Requests;
use DB;

class TestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
//    public function index()
//    {
//        return view('welcome');
//    }

    public function index()
    {
        return view('home');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function check()
    {
        $hos_median_time_list = DB::select("select * from campus");

        $response= $hos_median_time_list;// changed4

        $responseNGO = DB::select("select * from NGO_CASAs");
        $responsePolice = DB::select("select * from victoria_police");
        $responseSOC = DB::select("select * from victoria_police_SOCIT");
        $responseOther = DB::select("select * from other_support");


        if(count($response)){
            return view('support')->with('response', $response)->with('responseNGO',$responseNGO)->with('responsePolice',$responsePolice)
                ->with('responseSOC',$responseSOC)->with('responseOther',$responseOther);
        }
        else{
            \Session::flash('message','No data found.');
            \Session::flash('alert-class', 'alert-success');
            return back();
        }

    }

    public static function gmaps()
    {
        $campus = DB::table('campus')->get();
        $calyton_police = DB::table('victoria_police')->where('Campus_Campus_id', '3')->get();
        $calyton_ngo=DB::table('NGO_CASAs')->where('Campus_Campus_id', '3')->get();
        $calyton_socit=DB::table('victoria_police_SOCIT')->where('Campus_Campus_id', '3')->get();
        $calyton_health=DB::table('other_support')->where([['issue_no', '2'],['Campus_Campus_id', '3']])->get();
        $calyton_legal=DB::table('other_support')->where([['issue_no', '1'],['Campus_Campus_id', '3']])->get();

        $caulfield_police=DB::table('victoria_police')->where('Campus_Campus_id', '2')->get();
        $caulfield_ngo=DB::table('NGO_CASAs')->where('Campus_Campus_id', '2')->get();
        $caulfield_socit=DB::table('victoria_police_SOCIT')->where('Campus_Campus_id', '2')->get();
        $caulfield_health=DB::table('other_support')->where([['issue_no', '2'],['Campus_Campus_id', '2']])->get();
        $caulfield_legal=DB::table('other_support')->where([['issue_no', '1'],['Campus_Campus_id', '2']])->get();

        $parkville_police=DB::table('victoria_police')->where('Campus_Campus_id', '1')->get();
        $parkville_ngo=DB::table('NGO_CASAs')->where('Campus_Campus_id', '1')->get();
        $parkville_socit=DB::table('victoria_police_SOCIT')->where('Campus_Campus_id', '1')->get();
        $parkville_health=DB::table('other_support')->where([['issue_no', '2'],['Campus_Campus_id', '1']])->get();
        $parkville_legal=DB::table('other_support')->where([['issue_no', '1'],['Campus_Campus_id', '1']])->get();

        $peninsula_police=DB::table('victoria_police')->where('Campus_Campus_id', '4')->get();
        $peninsula_ngo=DB::table('NGO_CASAs')->where('Campus_Campus_id', '4')->get();
        $peninsula_socit=DB::table('victoria_police_SOCIT')->where('Campus_Campus_id', '4')->get();
        $peninsula_health=DB::table('other_support')->where([['issue_no', '2'],['Campus_Campus_id', '4']])->get();
        $peninsula_legal=DB::table('other_support')->where([['issue_no', '1'],['Campus_Campus_id', '4']])->get();
        //print_r($police);
        return view('support',compact('campus','calyton_police','calyton_ngo','calyton_socit','calyton_health','calyton_legal','caulfield_police','caulfield_ngo','caulfield_socit','caulfield_health','caulfield_legal','parkville_police','parkville_ngo','parkville_socit','parkville_health','parkville_legal','peninsula_police','peninsula_ngo','peninsula_socit','peninsula_health','peninsula_legal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function edit(Test $test)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        //
    }
}
