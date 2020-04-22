@extends('layouts.app')
@section('content')

@foreach($participants as $part)
@endforeach

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">ข้อมูลผู้ใช้ &nbsp;&nbsp;
                <a href="{{ route('participants.index') }}"> รายชื่อทั้งหมด </a>&nbsp;&nbsp;
                {{-- <a  class="btn btn-success mr-2 "
                    style="position:absolute ; right:0 ; top:5px"
                    href="{{ route('participants.create') }}" >เพิ่มรายชื่อ
                </a> --}}
            </div>
        @csrf
        <body {{--class="text-center"--}} style="">
        <div class="row">
            <div class="col-lg-12 margin-tb">
            <table class="table" border="0">
                <tr>
                    <td>ชื่อ-นามสกุล</td>
                    <td> {{ $part->fname }} &nbsp;&nbsp;{{ $part->lname }} </td>
                </tr>
                <tr>
                    <td>เพศ</td>
                    <td>{{ $part->gender }}</td>
                </tr>
                <tr>
                    <td>เบอร์โทร</td>
                    <td>{{ $part->phone }}</td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>{{ $part->email }}</td>
                </tr>

                <tr>
                    <td>ที่อยู่</td>
                    <td>{{ $part->address }}</td>
                </tr>

                <tr>
                    <td>รหัสไปรษณีย์</td>
                    <td>{{ $part->zip }}</td>
                </tr>

            </table>
            </div>
        </div>
        </body>
        </div>
        </div>
    </div>
</div>
@endsection
