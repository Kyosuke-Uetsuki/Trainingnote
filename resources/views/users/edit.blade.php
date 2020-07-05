@extends("layouts.app")
@section("content")
    
    <div class="container">
        <div class="col-6">
            <p>登録情報の変更</p>
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            <ul class="list-unstyled">
                <li>
                    <div class="form-group row m-0 p-0">
                        {!! Form::label("name", "名前:",["class" => "pt-2"]) !!}
                        {!! Form::text("name", null,["class" => "form-control col-6"]) !!}
                    </div>
                </li>
                <li>
                    <div class="form-group row m-0 p-0">
                        {!! Form::label("height", "身長:",["class" => "pt-2"]) !!}
                        {!! Form::text("height", null,["class" => "form-control col-8"]) !!}
                        {!! Form::label("height","cm",["class" => "pt-2"]) !!}
                    </div>
                </li>
                <li>
                    <div class="form-group row m-0 p-0">
                        {!! Form::label("body_weight", "体重:",["class" => "pt-2"]) !!}
                        {!! Form::text("body_weight", null,["class" => "form-control col-8"]) !!}
                        {!! Form::label("body_weight","kg",["class" => "pt-2"]) !!}
                    </div>
                </li>
                <li>
                    <div class="form-group row m-0 p-0">
                        {!! Form::label("fat_percentage", "体脂肪率:",["class" => "pt-2"]) !!}
                        {!! Form::text("fat_percentage", null,["class" => "form-control col-8"]) !!}
                        {!! Form::label("fat_percentage","%",["class" => "pt-2"]) !!}
                    </div>
                    <div class="row">
                        {!! Form::submit('変更', ['class' => 'btn btn-sm btn-outline-success rounded-0']) !!}
                        <div class="mr-2">{!! link_to_route('trainings.index', '戻る', ['user' => $user->id], ['class' => 'btn btn-sm btn-outline-primary rounded-0']) !!}</div>
                    </div>
                </li>
            </ul>
            {!! Form::close() !!}
        </div>
        
        
    </div>

@endsection