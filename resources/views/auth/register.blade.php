@extends("layouts.app")

@section("content")
<div class="container bg-success mt-5" style="width:550px; height:800px;">
    <div class="text-center">
        <h4>アカウント作成</h4>
    </div>
    
    <div class="row">
        <div class="col-sm-6 offset-sm-3">
            
            {!! Form::open(["route" => "signup.post"]) !!}
                <div class = "form-group">
                    {!! Form::label("name", "Name") !!}
                    {!! Form::text("name", old("name"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("email", "Email") !!}
                    {!! Form::email("email", old("email"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("password", "Password") !!}
                    {!! Form::password("password", ["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("password_confirmation", "Confirmation") !!}
                    {!! Form::password("password_confirmation", ["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("height", "Height") !!}
                    {!! Form::text("height", old("height"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("body_weight", "Weight") !!}
                    {!! Form::text("body_weight", old("body_weight"),["class" => "form-control"]) !!}
                </div>
                
                <div class = "form-group">
                    {!! Form::label("fat_percentage", "Fat_percentage") !!}
                    {!! Form::text("fat_percentage", old("fat_percentage"),["class" => "form-control"]) !!}
                </div>
                
                {!! Form::submit("Sign up", ["class" => "btn btn-primary btn-block"])!!}
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection