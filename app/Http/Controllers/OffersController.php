<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Offer;

class OffersController extends Controller
{
    public function create() {

        return view('createoffer');
    }

    public function store(Request $request) {

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required|min:10',
            'valid' => 'required'
        ]);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/offers', $filenameToStore);
        } else {
            $path = 'images/offers/default' . rand(1, 4) . '.jpg';
        }

        $offer = new Offer;

        $offer->title = $request['title'];
        $offer->valid = $request['valid'];
        $offer->detail = $request['detail'];
        $offer->img = $path;

        $offer->save();
        return redirect('admin')->with('success', 'Offer Added Successfully');
    }

    public function edit($id) {

        $offer = Offer::findorfail($id);

        return view('editoffer')->with('offer', $offer);

    }

    public function update(Request $request, $id) {

        $this->validate($request, [
            'title' => 'required',
            'detail' => 'required|min:10',
            'valid' => 'required'
        ]);

        $offer = Offer::find($id);

        if ($request->file('img')) {
            $filenameWithExt = $request->file('img')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('img')->getClientOriginalExtension();
            $filenameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('img')->move('images/offers', $filenameToStore);

            $offer->img = $path;

        } 
        // else {
        //     $path = 'images/offers/default' . rand(1, 4) . '.jpg';
        // }

        

        $offer->title = $request['title'];
        $offer->valid = $request['valid'];
        $offer->detail = $request['detail'];
        

        $offer->save();
        return redirect('admin')->with('success', 'Offer Added Successfully');

    }

    public function destroy($id) {

        $offer = Offer::find($id);

        $offer->delete();

        return redirect('admin')->with('success', 'Item deleted successfully');
    }
}
