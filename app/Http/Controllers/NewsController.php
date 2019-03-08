<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\News;

class NewsController extends Controller
{

    public function show($id) {

        $newsitem = News::find($id);

        return view('newsitem')->with('newsitem', $newsitem);
    }

    public function create() {

        return view('createnewsitem');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'title' => 'required | max:30',
            'headline' => 'required',
            'body' => 'required|min:40'
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/news', $filenameToStore);
        } else {
            $path = 'images/news/default' . rand(1, 4) . '.jpg';
        }

        $newsitem = new News;

        $newsitem->title = $request['title'];
        $newsitem->headline = $request['headline'];
        $newsitem->body = $request['body'];
        $newsitem->img = $path;

        $newsitem->save();

        return redirect('admin')->with('success', 'News Item Added Successfully');
        
    }

    public function edit($id) {

        $newsitem = News::find($id);

        return view('editnewsitem')->with('newsitem', $newsitem);

    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'headline' => 'required',
            'body' => 'required|min:40'
        ]);

        $newsitem = News::find($id);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/news', $filenameToStore);
     
            $newsitem->img = $path;
        } 
    // else {
        //     $path = 'images/news/default' . rand(1, 4) . '.jpg';
        // }

        

        $newsitem->title = $request['title'];
        $newsitem->headline = $request['headline'];
        $newsitem->body = $request['body'];
        // $newsitem->img = $path;

        $newsitem->save();

        return redirect('admin')->with('success', 'News Item Updated Successfully');

    }

    public function destroy($id) {

        $newsitem = News::find($id);

        $newsitem->delete();

        return redirect('admin')->with('success', 'Item deleted successfully');
    }

    
}
