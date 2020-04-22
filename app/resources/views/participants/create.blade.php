@extends('layouts.app')

@section('content')
<div class="container">
    {{-- <div class="row justify-content-center"> --}}
    <div class="col-md-12">
        <div class="card">

        <div class="table-responsive">
            <div class="card-header">ลงทะเบียนรายชื่อ &nbsp;&nbsp;
                <a href="{{ route('participants.index') }}"> รายชื่อทั้งหมด </a>&nbsp;&nbsp;
            </div>

            <form action=" {{ route('participants.store') }} " method="post" enctype="multipart/form-data">
                {{csrf_field()}}

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; ชื่อ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="fname" id="fname" placeholder="ชื่อ ">
                </div>

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; นามสกุล <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="lname" id="lname" placeholder="นามสกุล ">
                </div>

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; เพศ <label style="color:red;"> * </label></label>
                    <div class = "">
                        <select class="form-control " name="gender">
                            <option value="">โปรดกรอกเพศของท่าน</option>
                            <option value="เพศชาย">เพศชาย</option>
                            <option value="เพศหญิง">เพศหญิง</option>
                        </select>
                    </div>
                </div>

                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; เบอร์โทรศัพท์ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="เบอร์โทรศัพท์ ">
                </div>


                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; อีเมล <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="email" id="email" placeholder="อีเมล ">
                </div>


                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; ที่อยู่ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="address" id="address" placeholder="ที่อยู่ ">
                </div>


                <div class="form-group my-3">
                    <label for="Name_TH">&nbsp; รหัสไปรษณีย์ <label style="color:red;"> * </label></label>
                    <input type="text" class="form-control" name="zip" id="zip" placeholder="รหัสไปรษณีย์  ">
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
