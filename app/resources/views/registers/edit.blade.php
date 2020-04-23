@extends('layouts.app')

@section('content')
@foreach($registers as $regis)
@endforeach
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">แก้ไขข้อมูลกิจกรรม ID:{{$regis->id}}  &nbsp;&nbsp;
                <a href="{{ route('registers.index') }}"> รายชื่อทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('registers.update',$regis->id) }} " method="post" >
                {{csrf_field()}}
                @method('PUT')

                <div class="form-group my-3">
                    <label>&nbsp; ชื่อผู้เข้าร่วมกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" value = "{{ $regis->fname}} {{ $regis->lname}}" readonly>
                </div>


                <div class="form-group my-3">
                    <label>&nbsp; ชื่อกิจกรรม <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_activity">

                            {{-- <option value= "" ><label style="color:brown" >-----</label></option> --}}
                            @foreach($activity as $acti)
                                {{-- <option value = "{{$acti->id}}">
                                    {{$acti->activity}}
                                </option> --}}

                                @if ($acti->id == $regis->id_activity)
                                    <option selected value = "{{$regis->id_activity}}">
                                        ชื่อกิจกรรมเดิม: {{$acti->activity}}
                                    </option>
                                @else
                                    <option value = "{{$regis->id_activity}}">
                                        เปลี่ยนกิจกกรม {{$acti->activity}}
                                    </option>
                                @endif

                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">

                    <label>&nbsp; สถานะ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="status" id="stutีs" placeholder="สัมมนา " value = "{{ $regis->status}}">

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
