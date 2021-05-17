<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Dress;

class DressController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dresses = Dress::all();
        $data = [
            'dresses' => $dresses,
        ];
        return view('dresses.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {     
        $data = $request->all();

        $request->validate([
            'brand' => 'required|max:50',
            'type' => 'required|max:50',
            'size' => 'required|max:4',
            'price' => 'required||numeric',
        ]);

        $new_dress = new Dress();
        $new_dress->brand = $data['brand'];
        $new_dress->type = $data['type'];
        $new_dress->size = $data['size'];
        $new_dress->price = $data['price'];

        $new_dress->save();
        return redirect()->route('dresses.index');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if ($id) {
            $dress = Dress::find($id);
            // $data = [
            //     'dress' => $dress,
            // ];
            // return view('dresses.show', $data);
            return view('dresses.show', compact('dress'));

        }
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if ($id) {
            $dress = Dress::find($id);

            return view('dresses.edit', compact('dress'));

        }
        abort(404);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Dress $dress
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        $data = $request->all();
        
        $request->validate([
            'brand' => 'required|max:50',
            'type' => 'required|max:50',
            'size' => 'required|max:4',
            'price' => 'required||numeric',
        ]);

        $dress->update($data);
        return redirect()->route('dresses.index');
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
