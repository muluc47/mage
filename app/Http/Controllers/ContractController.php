<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contract;

class ContractController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $process = Contract::all();
        return view('contracts.index', compact('process'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contracts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except(['expertise']);

        if($request->hasFile('expertise')){
            $path = $request->file('expertise')->store('expertise');
            $data['expertise'] = $path;
        }

        Contract::create($data);

        return redirect('teminatlar');
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
        $item = Contract::find($id);
        return view('contracts.edit', compact('item'));
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
        $process = Contract::find($id);
        $data = $request->except(['expertise']);

        if($request->hasFile('expertise')){
            $path = $request->file('expertise')->store('expertise');
            $data['expertise'] = $path;
        }

        $process->update($data);

        return redirect('teminatlar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Contract::find($id)->delete();

        return back();
    }
}
