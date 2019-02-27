<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Careers;

class CareersController extends Controller
{

    public function show($id) {
        $career = Careers::findorfail($id);

        return view('careersitem')->with('career', $career);
    }
    public function create() {
        return view ('createcareer');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'overview' => 'required',
            'details' => 'required|min:40'
        ]);

        $career = new Careers;

        $career->title = $request['title'];
        $career->overview = $request['overview'];
        $career->details = $request['details'];
        $career->save();

        return redirect('admin')->with('success', 'Career Successfully Created');


    }

    public function edit($id) {

        $career = Careers::find($id);

        return view('editcareer')->with('career', $career);
    }


    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'overview' => 'required',
            'details' => 'required|min:40'
        ]);
        
        
        $career = Careers::findorfail($id);

        $career->title = $request['title'];
        $career->overview = $request['overview'];
        $career->details = $request['details'];
        $career->save();

        return redirect('admin')->with('success', 'Career Successfully Updated');
    }
}
