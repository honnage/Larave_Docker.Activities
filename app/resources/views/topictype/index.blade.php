@extends('layouts.app')
@section('content')


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">หัวข้อประเภทงาน &nbsp;&nbsp;


                <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="{{ route('topic.create') }}" >เพิ่มหัวข้อ
                </a>
            </div>
        @csrf

            <body {{--class="text-center"--}} style="">

                <table class="table" border="0">
                    <thead>
                        <th><center>#ID</center></th>
                        <th><center>ชื่อหัวข้อ</center></th>
                        <th><center>จำนวนรายการ</center></th>
                        <th><center>ดำเนินการ</center></th>
                    </thead>
                    @foreach($topictype as $type)
                    <tbody>
                    <tr>
                        <td>{{ $type->id}}</td>
                        <td>{{ $type->name }}</td>
                        <td> </td>

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
