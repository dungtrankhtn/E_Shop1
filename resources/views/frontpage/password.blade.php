@extends('frontpage.layout.frontpage')
@section('content')
<section>
<div class="row">    
    <div class="panel panel-success" style="margin: 1em;">
        <div class="panel-heading">
                <h3 class="panel-title">Change Passwork</h3>
        </div>
        
        @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
        @endif
        <form action="changepass" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}"/>
                <div class="panel-heading">
                    <h3 class="panel-title">Password</h3>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control password" name="Password" id=""
                    value="" >
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">New Password</h3>
                </div>
                <div class="panel-body">
                    <input type="text" class="form-control password" name="passwordagain" id=""
                    value="" >
                </div>
                <div class="panel-heading">
                    <h3 class="panel-title">
                        <div class="panel-body">
                            <button type="submit" class="signupbtn" name="btnEdit">Lưu</button>
                        </div>
                    </h3>
                </div>
            </div>
            <script type="text/javascript">
                
            </script>
        </form>
    </div>
</div>
</section>
@endsection