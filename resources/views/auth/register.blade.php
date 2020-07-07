@extends("layouts.topapp")

@section("content")
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5 text-light  border-light" id="top" style="width:400px; height:550px;">
        <div class="text-center  my-3 border-bottom">
            <h5>新規登録</h5>
        </div>
        
        <div class="mx-auto col-sm-10 ">
            
            {!! Form::open(["route" => "signup.post"]) !!}
                <div class = "form-group">
                    {!! Form::label("name", "名前") !!}
                    {!! Form::text("name", old("name"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("email", "メールアドレス") !!}
                    {!! Form::email("email", old("email"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("password", "パスワード") !!}
                    {!! Form::password("password", ["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("password_confirmation", "パスワード（確認）") !!}
                    {!! Form::password("password_confirmation", ["class" => "form-control"]) !!}
                </div>
                <div class = "text-center mt-5">
                    {!! Form::submit("登録", ["class" => "btn btn-outline-light rounded-0  btn-block"])!!}
                </div>
                
            {!! Form::close() !!}
        
        </div>
    
</div>
    </div>
@endsection