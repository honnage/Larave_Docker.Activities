@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">เพื่มรายชื่อ &nbsp;&nbsp;
                <a href="{{ route('topic.index') }}"> หัวข้อประเภทงานทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('topic.store') }} " method="post" >
                {{csrf_field()}}

                <div class="form-group my-3">
                    <label>&nbsp; ประเภทกิจกรรม <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="name" id="name" placeholder="เช่น สัมมนา ">
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
