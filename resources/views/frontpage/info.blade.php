@extends('frontpage.layout.frontpage')
@section('content')
<section>
<div class="row">
    
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked admin-menu" >
            <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-userb"></i> Profile</a></li>
            <li><a href="" data-target-id="change-password"><i class="glyphicon glyphicon-lock"></i> Change Password</a></li>
            <li><a href="" data-target-id="settings"><i class="glyphicon glyphicon-cog"></i> Settings</a></li>
            <li><a href="" data-target-id="logout"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
        </ul>
    </div>
    <div class="col-md-6   admin-content" id="profile">
        <form action="" method="post">
            <div class="panel panel-success" style="margin: 1em;">
                <div class="panel-heading">
                    <h3 class="panel-title">Name</h3>
                </div>
                <div class="panel-body">
                    <!-- load data -->
                    <input type="text" class="form-control" name="txt-FName" id=""
                    value="{{$user->name}}">
                </div>
            </div>
            <div class="panel panel-success" style="margin: 1em;">
                <div class="panel-heading">
                    <h3 class="panel-title">Email</h3>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control" name="txtEmail" id=""
                    value="{{$user->email}}">
                </div>
            </div>
            <div class="panel panel-success" style="margin: 1em;">
                <div class="panel-body">
                    <button type="submit" class="signupbtn" name="btnEdit">Lưu</button>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
@endsection