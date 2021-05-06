<?php

namespace App\Http\Controllers;

use App\week;
use Illuminate\Http\Request;

class WeekController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $weeks = week::latest()->paginate(5);
    
        return view('weeks.index',compact('weeks'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('weeks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'Day' => 'required',
            'Hour' => 'required',
            'Recycle'=>'required',
        ]);
    
        week::create($request->all());
     
        return redirect()->route('weeks.index')
                        ->with('success','Week created successfully.');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\week  $week
     * @return \Illuminate\Http\Response
     */
    public function show(week $week)
    {
        return view('weeks.show',compact('week'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\week  $week
     * @return \Illuminate\Http\Response
     */
    public function edit(week $week)
    {
        return view('weeks.edit',compact('week'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\week  $week
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, week $week)
    {
        $this->validate($request,[
            'Day' => 'required',
            'Hour' => 'required',
            'Recycle'=>'required',
        ]);
    
        $week->update($request->all());
     
        return redirect()->route('weeks.index')
                        ->with('success','Week updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\week  $week
     * @return \Illuminate\Http\Response
     */
    public function destroy(week $week)
    {
        $week->delete();
    
        return redirect()->route('weeks.index')
                        ->with('success','Week deleted successfully');
    }
}
