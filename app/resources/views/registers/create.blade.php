@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">ลงทะเบียนรายชื่อ &nbsp;&nbsp;
                <a href="{{ route('registers.index') }}"> รายชื่อทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('registers.store') }} " method="post" >
                {{csrf_field()}}

                <div class="form-group my-3">
                    <label>&nbsp; ผู้เข้าร่วมกิจกรรม <label style="color:red;"> * </label></label>
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
                    <div class = "">
                        <select class="form-control " name="id_activity">
                            <option value="" ><label style="color:brown" >กรุณาเลือกกิจกรรมที่จะเข้าร่วม</label></option>
                            @foreach($activity as $acti)
                            <option value = "{{$acti->id}}">
                                {{$acti->activity}}
                            </option>
                            @endforeach
                        </select>
                    </div>
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
