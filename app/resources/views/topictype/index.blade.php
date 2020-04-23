@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="form-inline ">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <a class="btn btn-outline-secondary col-sm-2" style="background: #F9E54E; color: black" href="{{ route('activity.index') }}" >กิจกรรมที่จัด</a>
                        <a class="btn btn-outline-secondary col-sm-2" style="background: #F8981D; color: white" href="{{ route('topic.index') }}" >หัวข้อประเภทงาน</a>
                        <a class="btn btn-outline-secondary col-sm-2" style="background: #E12E4B; color: white" href="{{ route('registers.index') }}" >ลงทะเบียนเข้าร่วมกิจกรรม</a>
                        <a class="btn btn-outline-secondary col-sm-2" style="background: #5BBDC8; color: white" href="{{ route('participants.index') }}" >ผู้เข้าร่วมกิจกรรม</a>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="card-header"><strong>หัวข้อประเภทงาน </strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a  class="btn btn-success mr-2 "href="{{ route('topic.create') }}" >เพิ่มหัวข้อ</a>
                    </div>
                </div>
            </div>

        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อหัวข้อ</center></th>
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($topictype as $type)
                    <tbody>
                    <tr>
                        <td>{{ $type->id}}</td>
                        <td>{{ $type->name }}</td>

                        <td>
                            <center>
                            <form action="{{ route('topic.destroy',$type->id)	}}" method="POST">
                                <a class="btn btn-warning" href="{{ route('topic.edit',$type->id) }}" >Edit</a>

                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" >Delete</button>
                            </form>
                            </center>
                        </td>


                    </tr>
                    @endforeach
                    </tbody>
                </table>

            </body>
        </div>
    </div>
</div>
</div>
@endsection
