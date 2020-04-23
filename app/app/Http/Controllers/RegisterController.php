<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\RegisterModel;
use App\ParticipantModel;
use App\ActivityModel;
use DB;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $registers = DB::table('Registers')

        ->join('Activity','Activity.id','=','Registers.id_activity')
        ->join('Participants','Participants.id','=','Registers.id_Participants')
        ->select('*',"Registers.id as RegisID",'Registers.status as statusRegis','Registers.created_at as RegisAt')
        // ->where('Activity.id' ,'=',$id)
        // ->whereColumn('Activity.id','=','Registers.id_activity')
        // ->whereColumn('Participants.id','=','Registers.id_Participants')
        ->groupBy('Registers.id')
        ->orderBy('Registers.id', 'DESC')
        ->get();
        return view('registers.index',compact('registers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $registers = DB::table('Registers')->get();
        $activity = ActivityModel::orderBy('id')->get();
        $participants = ParticipantModel::orderBy('id')->get();
        return view('registers.create',compact('registers','activity','participants'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $registers = new RegisterModel;

        $request->validate([
            'id_activity'=>'required',
            'id_Participants'=>'required',
            // 'status'=>'required',
        ]);
        $registers->id_activity = $request->id_activity;
        $registers->id_Participants = $request->id_Participants;
        $registers->status = "ลงทะเบียนเข้าร่วมกิจกรรม";

        $registers->save();
        return redirect('registers');
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


        // $registers = DB::table('Registers')
        // ->join('Activity','Activity.id','=','Registers.id_activity')
        // ->join('Participants','Participants.id','=','Registers.id_Participants')
        // ->select('*',"Registers.id as RegisID",'Registers.status as statusRegis','Registers.created_at as RegisAt')
        // // ->groupBy('Registers.id')
        // // ->orderBy('Registers.id', 'DESC')
        // // ->orderBy('Registers.id_activity')

        // ->where('Registers.id' ,'=',$id)
        // ->get();

        // return view('registers.edit',compact('registers','register'));

        $activity = ActivityModel::orderBy('id')->get();
        $participants = ParticipantModel::orderBy('id')->get();
        $registers = DB::table('Registers')

        ->join('Activity','Activity.id','=','Registers.id_activity')
        ->join('Participants','Participants.id','=','Registers.id_Participants')
        ->select('*',"Registers.id as RegisID",'Registers.status as statusRegis','Registers.created_at as RegisAt')
        ->groupBy('Registers.id')
        ->orderBy('Registers.id', 'DESC')

        ->where('Registers.id' ,'=',$id)
        ->get();

        return view('registers.edit',compact('registers','activity','participants'));


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
        $registers = RegisterModel::find($id);
        $request->validate([
            // 'id_activity'=>'required',
            // 'id_Participants'=>'required',
            'status'=>'required',
        ]);
        DB::table('Registers')
            ->where('id','=',$id)
            ->update([
            // 'id_activity' => $request->id_activity,
            'status' => $request->status,

        ]);
        return redirect('registers');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $registers = RegisterModel::find($id);
        $registers->delete();
        return redirect()->route('registers.index');
    }
}
