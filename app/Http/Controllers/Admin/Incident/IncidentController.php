<?php

namespace App\Http\Controllers\Admin\Incident;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Category\Category;

class IncidentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $incidents = Category::paginate(10);

        return view('admin.backend.incident.index')->withIncidents($incidents);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.incident.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
            'category_name' => 'required|string|max:191',
            'point' => 'required|string|max:191',
        ));

        

        $incident = new Category();

        $incident->category_name = $request->category_name;
        $incident->point = $request->point;


        $incident->save();

        return redirect()->route('admin.incident.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $incident = Category::find($id);

        return view('admin.backend.incident.update')->withIncident($incident);
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
        // $this->validate($request,array(
        //     'category_name' => 'required|string|max:191',
        //     'point' => 'required|string|max:191',
        // ));

        

        $incident = Category::find($id);

        $incident->category_name = $request->category_name;
        $incident->point = $request->point;

        $incident->save();

        return redirect()->route('admin.incident.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $incident = Category::find($id);

        $incident->delete();

        return redirect()->back();
    }
}
