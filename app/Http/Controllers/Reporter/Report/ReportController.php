<?php

namespace App\Http\Controllers\Reporter\Report;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use App\Models\Category\Category;

class ReportController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:reporter');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers = User::all();
        $incidents = Category::all();

        return view('reporter.backend.report.index')
                ->withDrivers($drivers)
                ->withIncidents($incidents);
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
        // dd($request);

        $driver = User::find($request->driver);
        $value = Category::find($request->incident);
        
        $driver->point -= $value->point;

        $sms = "test sms";
        
        // dd($driver->point);
        
        $driver->save();

        return redirect()->back();
    }

    public function forSms($id){

        $driver = User::find($id);

        if($driver->point <= 0 ){
            return "yes";
        } else{
            return false;
        }

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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
