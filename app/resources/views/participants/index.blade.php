@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">ข้อมูลผู้ใช้ &nbsp;&nbsp;
                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="{{ route('participants.create') }}" >เพิ่มรายชื่อ
                </a>
            </div>
        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อ</center></th>
                        <th><center>นามสกุล</center></th>
                        <th><center>เพศ</center></th>
                        <th><center>เบอร์โทร</center></th>
                        <th><center>email</center></th>
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($participants as $participant)
                    <tbody>
                    <tr>
                        <td>{{ $participant->id}}</td>
                        <td>{{ $participant->fname }}</td>
                        <td>{{ $participant->lname }} </td>
                        <td>{{ $participant->gender }} </td>
                        <td>{{ $participant->phone }} </td>
                        <td>{{ $participant->email }} </td>


                        <td>
                            <center>
                            <form action="{{ route('participants.destroy',$participant->id)	}}" method="POST">
                                <a class="btn btn-primary" href="{{ route('participants.show',$participant->id) }}" >Show</a>
                                <a class="btn btn-warning" href="{{ route('participants.edit',$participant->id) }}" >Edit</a>

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
