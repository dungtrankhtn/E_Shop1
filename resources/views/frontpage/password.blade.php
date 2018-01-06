@extends('frontpage.layout.frontpage')
@section('content')
<section>
<div class="row">    
    <div class="panel panel-success" style="margin: 1em;">
        <div class="panel-heading">
                <h3 class="panel-title">Change Passwork</h3>
        </div>
        <form action="">
            <div class="panel-heading">
                <h3 class="panel-title">UserName</h3>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" name="UserName" id=""
                value="" readonly>
            </div>
            <div class="panel-heading">
                <h3 class="panel-title">Password</h3>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" name="Password" id=""
                value="" readonly>
            <div class="panel-heading">
                <h3 class="panel-title">New Password</h3>
            </div>
            <div class="panel-body">
                <input type="text" class="form-control" name="Newpassword" id=""
                value="" readonly>
            </div>
            <div class="panel-heading">
                <h3 class="panel-title">
                    <div class="panel-body">
                        <button type="submit" class="signupbtn" name="btnEdit">Lưu</button>
                    </div>
                </h3>
            </div>
            </div>
        </form>
    </div>
</div>
</section>
@endsection