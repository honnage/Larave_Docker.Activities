@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">ลงทะเบียนรายชื่อ &nbsp;&nbsp;
                <a href="{{ route('activity.index') }}"> รายชื่อทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('activity.store') }} " method="post" >
                {{csrf_field()}}

                <div class="form-group my-3">
                    <label>&nbsp; ผู้จัดกิจกรรม <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_Participants">
                            <option value="" ><label style="color:brown" >กรุณาเลือกชื่อผู้จัดกิจกรรม</label></option>
                            @foreach($participants as $part)
                            <option value = "{{$part->id}}">
                                {{$part->fname}} &nbsp;&nbsp;{{$part->lname}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; ชื่อกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="activity" id="activity" placeholder="ชื่อกิจกรรม ">
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; หัวข้อกิจกรรม <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_TopicType">
                            <option value="" ><label style="color:brown" >กรุณาเลือกหัวข้อกิจกรรม</label></option>
                            @foreach($topictype as $type)
                            <option value = "{{$type->id}}">
                                {{$type->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; รายละเอียด <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="รายละเอียด ">
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; จำนวนคนที่รองรับ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="number" id="number" placeholder="จำนวนคนที่รองรับ ">
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; วันที่จัดกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="date" class="form-control" name="EventDate" id="EventDate" placeholder="วันที่จัดกิจกรรม ">
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; เวลาเริ่มกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="time" class="form-control" name="StartTime" id="StartTime" placeholder="เวลาเริ่มกิจกรรม ">
                </div>

                <div class="form-group my-3">
                    <label>&nbsp; เวลาเลิกกิจกกรม <label style="color:red;"> * </label></label>
                    <input type="time" class="form-control" name="Endtime" id="Endtime" placeholder="เวลาเลิกกิจกกรม  ">
                </div>



                <center>
                    <button type="submit" name="submit" class="btn btn-success">เพื่มข้อมูล</button>
                    <button class="btn btn-secondary" type="reset">ยกเลิก</button>
                </center>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
