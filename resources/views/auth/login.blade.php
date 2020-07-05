@extends("layouts.topapp")

@section("content")
<div class="jumbotron jumbotron-fluid">
    <div class="container mt-5 text-light border-top border-light" id="top" style="width:400px; height:550px;">
        <div class="text-center  py-4">
            <h5>ログイン</h5>
        </div>
        
        <div class="mx-auto col-sm-10">
            
            {!! Form::open(["route" => "login.post"])!!}
                <div class ="form-group">
                    {!! Form::label("email", "メールアドレス")!!}
                    {!! Form::email("email", old("email"),["class" => "form-control"])!!}
                </div>
                
                <div class ="form-group mt-4">
                    {!! Form::label("password", "パスワード")!!}
                    {!! Form::password("password", ["class" => "form-control"])!!}
                </div>
                <div class="mt-5">
                {!! Form::submit("ログイン", ["class" => "btn btn-outline-light rounded-0  btn-block"])!!}
                </div>
            {!! Form::close() !!}
            
            <p class="mt-2"> {!! link_to_route("signup.get", "新規登録はこちら",[],["class" => "text-light"])!!}</p>
        </div>
        
    </div>
</div>
@endsection