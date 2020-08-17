<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Process;

class SaleOperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $process = Process::all();
        return view('sales.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sales.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['dcf', 'image', 'document']);

        if($request->hasFile('dcf')){
            $path = $request->file('dcf')->store('dcf');
            $data['dcf'] = $path;
        }

        if($request->hasFile('image')){
            $path = $request->file('image')->store('images');
            $data['image'] = $path;
        }

        if($request->hasFile('document')){
            $path = $request->file('document')->store('documents');
            $data['document'] = $path;
        }
        Process::create($data);

        return redirect('sale-operation');
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
        $item = Process::find($id);
        return view('sales.edit', compact('item'));
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
        $process = Process::find($id);
        $data = $request->except(['dcf', 'image', 'document']);

        if($request->hasFile('dcf')){
            $path = $request->file('dcf')->store('dcf');
            $data['dcf'] = $path;
        }

        if($request->hasFile('image')){
            $path = $request->file('image')->store('images');
            $data['image'] = $path;
        }

        if($request->hasFile('document')){
            $path = $request->file('document')->store('documents');
            $data['document'] = $path;
        }
        $process->update($data);

        return redirect('sale-operation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Process::find($id)->delete();

        return back();
    }
}
