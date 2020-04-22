@extends('layouts.app')
@section('content')

@foreach($activity as $acti)
@endforeach

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
            <div class="card-header">รายละเอียดกิจกรรม &nbsp;&nbsp;
                <a href="{{ route('activity.index') }}"> กิจกรรมทั้งหมด </a>&nbsp;&nbsp;
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
                    <td>ชื่อผู้จัดกิจกกรม</td>
                    <td> {{ $acti->fname }} &nbsp;&nbsp;{{ $acti->lname }} </td>
                </tr>
                <tr>
                    <td>ชื่อกิจกรรม</td>
                    <td>{{ $acti->activity }}</td>
                </tr>

                <tr>
                    <td>หัวข้อประเภท</td>
                    <td>{{ $acti->name }}</td>
                </tr>

                <tr>
                    <td>รายละเอียด</td>
                    <td>{{ $acti->description }}</td>
                </tr>
                <tr>
                    <td>จำนวนคนที่รองรับ</td>
                    <td>{{ $acti->number }}</td>
                </tr>

                <tr>
                    <td>วันที่จัดกิจกรรม</td>
                    <td>{{ $acti->EventDate }}</td>
                </tr>

                <tr>
                    <td>เวลาเริ่มกิจกรรม</td>
                    <td>{{ $acti->StartTime }}</td>
                </tr>

                <tr>
                    <td>เวลาเลิกกิจกกรม</td>
                    <td>{{ $acti->Endtime }}</td>
                </tr>
                <tr>
                    <td>วันเวลาที่สร้างกิจกกรม</td>
                    <td>{{ $acti->created_at }}</td>
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
