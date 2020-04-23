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
                        <div class="card-header"><strong>ลงทะเบียนเข้าร่วมกิยกรรม</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                        <a  class="btn btn-success mr-2 "href="{{ route('registers.create') }}" >ลงทะเบียน</a>
                    </div>
                </div>
            </div>
        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อ</center></th>
                        <th><center>นามสกุล</center></th>
                        <th><center>กิจกรรมที่ลงทะเบียน</center></th>
                        <th><center>สถานะ</center></th>
                        <th><center>วันที่-เวลาที่ลงทะเบียน</center></th>
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($registers as $register)
                    <tbody>
                    <tr>
                        <td>{{ $register->RegisID}}</td>
                        <td>{{ $register->fname }}</td>
                        <td>{{ $register->lname }}</td>
                        <td>{{ $register->activity }}</td>
                        <td><center>{{ $register->statusRegis }}</center></td>
                        <td><center>{{ $register->RegisAt }}</center></td>
                        <td>
                            <center>
                            <form action="{{ route('registers.destroy',$register->RegisID)	}}" method="POST">
                                <a class="btn btn-warning" href="{{ route('registers.edit',$register->RegisID) }}" >Edit</a>

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
