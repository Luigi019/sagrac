<?php

namespace App\Http\Controllers;

use App\Models\bashis01;
use App\Models\basqyr01;
use App\Http\Requests\Storebashis01Request;
use App\Http\Requests\Updatebashis01Request;
use Illuminate\Http\Request;

class Bashis01Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bashis01 = bashis01::paginate();

        return view('panel.bashis01.index', compact('bashis01'))
        ->with('i', (request()->input('page', 1) - 1) * $bashis01->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bashis01 = new bashis01();
        return view('panel.bashis01.create', compact('bashis01'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\Storebashis01Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(basqyr01 $basqyr)
    {
        $collection = Collect($basqyr->toArray());
        $array = $collection->except('created_at', 'updated_at', 'id')->toArray();
        $bashis01 = bashis01::create($array);

        $basqyr->delete();

        return redirect()->route('admin.historica.index')
        ->with('success', 'Historia guardada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bashis01  $bashis01
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bashis01 = bashis01::find($id);

        return view('panel.bashis01.show', compact('bashis01'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bashis01  $bashis01
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bashis01 = bashis01::find($id);

        return view('panel.bashis01.edit', compact('bashis01'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\Updatebashis01Request  $request
     * @param  \App\Models\bashis01  $bashis01
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bashis01 $bashis01)
    {
        request()->validate(bashis01::$rules);

        $bashis01->update($request->all());

        return redirect()->route('admin.bashis01.index')
        ->with('success', 'Historia actualizada satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bashis01  $bashis01
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bashis01 = bashis01::find($id)->delete();

        return redirect()->route('admin.bashis01.index')
        ->with('success', 'Historia eliminada satisfactoriamente');
    }
    public function search(Request $request){
        $data = $request->data;
       $bashis01 =Bashis01::where("cedula", "like", "%$data%")->orWhere("name", "like", "%$data%")->paginate();

       return view('panel.bashis01.index', compact('bashis01'))
       ->with('i', (request()->input('page', 1) - 1) * $bashis01->perPage());
    }
}
