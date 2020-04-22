@extends('layouts.app')

@section('content')
@foreach($activity as $acti)
@endforeach
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">รายละเอียดกิจกรรม  &nbsp;&nbsp;
                <a href="{{ route('activity.index') }}"> กิจกรรมทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('activity.update',$acti->id) }} " method="post" >

                {{csrf_field()}}
                @method('PUT')


                <div class="form-group my-3">
                    <label >&nbsp; ชื่อผู้จัดกิจกกรม<label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_Participants">
                            @foreach($participants as $part)

                            @if ($part->id == $acti->id_Participants)
                                <option selected value = "{{$part->id}}">
                                    --ผู้จัดกิจกกรม-- {{$part->fname}}
                                </option>
                            @else
                                <option value = "{{$dormitory->id}}">
                                    {{$part->fname}}
                                </option>
                            @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label >&nbsp; ชื่อกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="activity" id="activity" placeholder="ชื่อกิจกรรม " value=" {{ $acti->activity }}">
                </div>

                <div class="form-group my-3">
                    <label >&nbsp; หัวข้อประเภท <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_TopicType">
                            <option value="{{$acti->id_TopicType}}" ><label style="color:brown" >ปัจุบันคือ: {{ $acti->name }}</label></option>
                            @foreach($topictype as $type)
                            <option value = "{{$type->id}}">
                                แก้ไขเป็น: {{$type->name}}
                            </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label >&nbsp; รายละเอียด <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="description" id="description" placeholder="รายละเอียด " value=" {{ $acti->description }}">
                </div>


                <div class="form-group my-3">
                    <label >&nbsp; จำนวนคนที่รองรับ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="number" id="number" placeholder="จำนวนคนที่รองรับ " value=" {{ $acti->number }}">
                </div>


                <div class="form-group my-3">
                    <label >&nbsp; วันที่จัดกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="date" class="form-control" name="EventDate" id="EventDate" placeholder="วันที่จัดกิจกรรม " value="{{ $acti->EventDate }}">
                </div>

                <div class="form-group my-3">
                    <label >&nbsp; เวลาเริ่มกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="time" class="form-control" name="StartTime" id="StartTime" placeholder="เวลาเลิกกิจกกรม " value="{{ $acti->StartTime }}">

                </div>

                <div class="form-group my-3">
                    <label >&nbsp; เวลาเลิกกิจกกรม <label style="color:red;"> * </label></label>
                    <input type="time" class="form-control" name="Endtime" id="Endtime" placeholder="เวลาเลิกกิจกกรม " value="{{ $acti->Endtime }}">
                </div>



                <center>
                    <button type="submit" name="submit" class="btn btn-success">อัพเดท</button>
                    <button class="btn btn-secondary" type="reset">ยกเลิก</button>
                </center>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
