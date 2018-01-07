@extends('frontpage.layout.frontpage')
@section('content')
<section>
<div class="row">
    
    <div class="col-md-3">
        <ul class="nav nav-pills nav-stacked admin-menu" >
            <li class="active"><a href="" data-target-id="profile"><i class="glyphicon glyphicon-userb"></i>Infomation</a></li>
        </ul>
    </div>
    <div class="col-md-6   admin-content" id="profile">
        <form action="/change-info/{{$user->id}}" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}" />
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
                    <button type="submit" class="signupbtn" name="btnEdit">Cập nhật</button>
                </div>
            </div>
        </form>
    </div>
</div>
</section>
@endsection