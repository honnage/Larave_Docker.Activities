<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ActivityModel;
use DB;
use App\ParticipantModel;
use App\TopicTypeModel;

class ActivityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $activity = ActivityModel::all();
        return view('activity.index',compact('activity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $activity = DB::table('Activity')->get();
        $topictype = TopicTypeModel::orderBy('id')->get();
        $participants = ParticipantModel::orderBy('id')->get();
        return view('activity.create',compact('activity','topictype','participants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $activity = new ActivityModel;

        $request->validate([
            'activity'=>'required',
            'description'=>'required',
            'number'=>'required',
            'EventDate'=>'required',
            'StartTime'=>'required',
            'Endtime'=>'required',

            'id_TopicType'=>'required',
            'id_Participants'=>'required',
        ]);
        $activity->activity = $request->activity;
        $activity->description = $request->description;
        $activity->number = $request->number;
        $activity->EventDate = $request->EventDate;
        $activity->StartTime = $request->StartTime;
        $activity->Endtime = $request->Endtime;
        // $activity->status = $request->status;
        $activity->id_TopicType = $request->id_TopicType;
        $activity->id_Participants = $request->id_Participants;

        $activity->save();
        return redirect('activity');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activity = ActivityModel::find($id);
        $activity->delete();
        return redirect()
        ->route('activity.index');
    }
}
