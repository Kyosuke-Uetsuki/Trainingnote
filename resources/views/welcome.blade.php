@extends("layouts.app")

@section("content")

    @if (Auth::check())
        <div class="container">
            {!! Form::open(['route' => 'trainings.store']) !!}
            <div class="row">
                <div class="form-group row" style="width:250px;">
                    {!! Form::label('training_date', '日付:',["class" => "mr-2 pt-2"]) !!}
                    {!! Form::date('training_date', date('Y-m-d'),["class" => "form-control col-8"]) !!}   
                </div>
                <div class="form-group">
                    {!! Form::label("part", "部位:",["class" => "mr-2 pt-2"]) !!}
                    {!! Form::select("part", [null,"胸", "背中", "肩","腕","脚"]) !!}
                </div>
            </div>
            <div class="row">
                <div class="form-group row col-3 m-0 p-0">
                    {!! Form::label("content", "種目:",["class" => "pt-2"]) !!}
                    {!! Form::text("content", null,["class" => " form-control"]) !!}
                    {!! Form::label("content",null,["class" => "pt-2"]) !!}
                </div>
                <div class="form-group row m-0 p-0 " >
                    {!! Form::label("weight", "重量:",["class" => " pt-2"]) !!}
                    {!! Form::text("weight", null,["class" => "form-control"]) !!}
                    {!! Form::label("weight", "kg",["class" => "pt-2"]) !!}
                </div>
                <div class="form-group row m-0 p-0">
                    {!! Form::label("reps", "回数:",["class" => "pt-2"]) !!}
                    {!! Form::text("reps", null,["class" => "form-control"]) !!}
                    {!! Form::label("reps", "reps",["class" => "pt-2"]) !!}
                </div>
                <div class="form-group row m-0 p-0">
                    {!! Form::label("sets", "セット数:",["class" => "pt-2"]) !!}
                    {!! Form::text("sets", null,["class" => "form-control"]) !!}
                    {!! Form::label("sets", "sets",["class" => "pt-2"]) !!}
                </div>
            </div>
                
                    {{Form::radio('mark', 2)}}
                    {!! Form::label("mark", "よく行うトレーニングに追加する") !!}
                    {{Form::radio('mark', 1)}}
                    {!! Form::label("mark", "しない",null,["class" => "ml-0"]) !!}
                
                
                    {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
        
    @include("trainings.note")
    @else
    
    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" id="top">
            <h1 class="text-light">Training Note</h1>
            {!! link_to_route("signup.get", "Create Account", [], ["class" =>"btn  btn-outline-light rounded-0"])!!}
        </div>
    </div>
    @endif
@endsection