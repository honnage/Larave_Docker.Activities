<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ParticipantModel;
use DB;


class ParticipantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $participants =  ParticipantModel::all();
        return view('participants.index',compact('participants'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $participants = DB::table('Participants')->get();
        return view('participants.create',compact('participants'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $participants = new ParticipantModel;

        $request->validate([
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'zip'=>'required',
        ]);
        $participants->fname = $request->fname ;
        $participants->lname = $request->lname ;
        $participants->gender = $request->gender ;
        $participants->phone = $request->phone ;
        $participants->email = $request->email ;
        $participants->address = $request->address ;
        $participants->zip = $request->zip ;

        $participants->save();
        return redirect('participants');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $participants = ParticipantModel::find($id);
        // return view('participants.show',compact('participants'));

        $participants = DB::table('Participants')->get();
        return view('participants.show',compact('participants'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $participants = ParticipantModel::find($id);
        // return view('participants/edit',['participants'=>$participants]);
        $participants = DB::table("Participants")
        ->where('id','=',$id)
        ->get();
        return view('participants/edit',compact('participants'));
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
            'fname'=>'required',
            'lname'=>'required',
            'gender'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'address'=>'required',
            'zip'=>'required',
        ]);
        DB::table('Participants')
            ->where('id','=',$id)
            ->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'gender' => $request->gender,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'zip' => $request->zip,

        ]);
        return redirect('participants');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $participants = ParticipantModel::find($id);
        $participants->delete();
        return redirect()
        ->route('participants.index');
    }
}
