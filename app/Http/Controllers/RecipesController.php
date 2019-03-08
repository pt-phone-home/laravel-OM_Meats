<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Recipe;

class RecipesController extends Controller
{

    public function show($id) {

        $recipe = Recipe::find($id);

        return view('recipeitem')->with('recipe', $recipe);
    }

    public function create() {
        return view('createrecipe');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required|min:10',
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/recipes', $filenameToStore);
        } else {
            $path = 'images/recipes/default' . rand(1, 4) . '.jpg';
        }

        $recipe = new Recipe;

        $recipe->title = $request['title'];
        $recipe->detail = $request['detail'];
        $recipe->img = $path;
        

        $recipe->save();
        return redirect('admin')->with('success', 'Recipe Added Successfully');
    }

    public function edit($id) {
        $recipe = Recipe::find($id);

        return view('editrecipe')->with('recipe', $recipe);
    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required|min:10',
        ]);

        $recipe = Recipe::find($id);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/recipes', $filenameToStore);

            $recipe->img = $path;

        } 
        // else {
        //     $path = 'images/recipes/default' . rand(1, 4) . '.jpg';
        // }

        

        $recipe->title = $request['title'];
        $recipe->detail = $request['detail'];
        

        $recipe->save();
        return redirect('admin')->with('success', 'Recipe Updated Successfully');

    }

    public function destory($id) {

        $recipe = Recipe::find($id);

        $recipe->delete();

        return redirect('admin')->with('success', 'Item deleted successfully');
    }
}
