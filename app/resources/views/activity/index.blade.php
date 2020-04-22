@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">กิจกรรมที่จัด &nbsp;&nbsp;


                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="{{ route('activity.create') }}" >เพิ่มกิจกรรม
                </a>
            </div>
        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อกิจกรรม</center></th>
                        {{-- <th><center>รายละเอียด</center></th> --}}
                        {{-- <th><center>จำนวนคนที่รองรับ</center></th> --}}
                        <th><center>วันที่จัดกิจกรรม</center></th>
                        <th><center>เวลาเริ่มกิจกรรม</center></th>
                        <th><center>เวลาเลิกกิจกกรม</center></th>
                        {{-- <th><center>ประเภทหัวข้อ</center></th>
                        <th><center>ผู้กิจกรรม</center></th> --}}
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($activity as $acti)
                    <tbody>
                    <tr>
                        <td>{{ $acti->id}}</td>
                        <td>{{ $acti->activity }}</td>
                        {{-- <td>{{ $acti->description }}</td> --}}
                        {{-- <td>{{ $acti->number }}</td> --}}
                        <td>{{ $acti->EventDate }}</td>
                        <td>{{ $acti->StartTime }}</td>
                        <td>{{ $acti->Endtime }}</td>

                        <td>
                            <center>
                            <form action="{{ route('activity.destroy',$acti->id)	}}" method="POST">
                                <a class="btn btn-primary" href="{{ route('activity.show',$acti->id) }}" >Show</a>
                                <a class="btn btn-warning" href="{{ route('activity.edit',$acti->id) }}" >Edit</a>

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
