<?php

namespace App\Http\Controllers\Admin\CreateReporter;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

// use reporter model

use App\Models\Repoter\Repoter;

class CreateReporter extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $reporters = Repoter::paginate(10);

        return view('admin.backend.create_reporter.index')->withReporters($reporters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.backend.create_reporter.create');
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
            'name' => 'required|string|max:191',
            'position' => 'required|string|max:191',

            'email' => 'required|string|email|max:191|unique:repoters',
            'password' => 'required|string|min:6|confirmed|',
        ));

        

        $reporter = new Repoter();

        $reporter->name = $request->name;

        $reporter->position = $request->position;
        $reporter->email = $request->email;
        $reporter->password = bcrypt($request->password);

        $reporter->save();

        return redirect()->route('admin.create_reporter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $reporter = Repoter::find($id);

        return view('admin.backend.create_reporter.update')->withReporter($reporter);
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
        //     'name' => 'required|string|max:191',
        //     'position' => 'required|string|max:191',
        //     'email' => 'required|string|email|max:191|unique:repoters',
        // ));

        

        $reporter = Repoter::find($id);

        $reporter->name = $request->name;
        $reporter->position = $request->position;
        $reporter->email = $request->email;

        $reporter->save();

        return redirect()->route('admin.create_reporter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reporter = Repoter::find($id);

        $reporter->delete();

        return redirect()->back();
    }
}
