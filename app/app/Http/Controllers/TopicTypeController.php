<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TopicTypeModel;
use DB;

class TopicTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topictype = TopicTypeModel::all();
        return view('topictype.index',compact('topictype'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $topictype = DB::table('TopicType')->get();
        return view('topictype.create',compact('topictype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topictype = new TopicTypeModel;

        $request->validate([
            'name'=>'required',
        ]);

        $topictype->name = $request->name;

        $topictype->save();
        return redirect('topic');
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
        $topictype = DB::table("TopicType")
        ->where('id','=',$id)
        ->get();
        return view('topictype/edit',compact('topictype'));


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
        $request->validate([
            'name'=>'required',
        ]);
        DB::table('TopicType')
            ->where('id','=',$id)
            ->update([
            'name' => $request->name,

        ]);

        return redirect('topic');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('TopicType')->where('id','=',$id)->delete();
        return redirect('topic');
    }
}
