@extends('layouts.app')

@section('content')
@foreach($registers as $register)
@endforeach
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">แก้ไขข้อมูลลงทะเบียน ID :{{$register->RegisID}}&nbsp;&nbsp;
                <a href="{{ route('registers.index') }}"> ลงทะเบียนทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('registers.update',$register->RegisID) }} " method="post" >
                {{csrf_field()}}
                @method('PUT')
                <div class="form-group my-3">
                    <label>&nbsp; ชื่อผู้เข้าร่วมกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" value = "{{ $register->fname}} {{ $register->lname}}" readonly>
                </div>


                <div class="form-group my-3">
                    <label>&nbsp; ชื่อกิจกรรม <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="id_activity" readonly>
                            @foreach($activity as $acti)
                                @if ($acti->id == $register->id_activity)
                                    <option selected value = "{{$register->id_activity}}">
                                        {{$acti->activity}}
                                    </option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; สถานะ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="status" id="status" placeholder="นามสกุล " value="{{ $register->status }}">
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
