
@extends('layouts.app')

@section('content')
@foreach($topictype as $type)
@endforeach
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">เพื่มประเภทกิจกรรม &nbsp;&nbsp;
                <a href="{{ route('topic.index') }}"> หัวข้อประเภทงานทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action="{{ route('topic.update',$type->id) }}" method="post" >
                {{csrf_field()}}
                @method('PUT')

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; ประเภทกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="สัมมนา " value="{{ $type->name }}">
                </div>


                <center>
                    <button type="submit" name="submit" class="btn btn-success">อัพเดท</button>
                    <button class="btn btn-secondary " type="reset">ยกเลิก</button>
                </center>
            </form>
        </div>
        </div>
    </div>
</div>
@endsection
