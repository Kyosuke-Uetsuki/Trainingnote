@extends("layouts.app")
@section("content")
    
    <div class="container">
        <div class="text-center">
            <p class=" border-bottom pl-5">登録情報の変更</p>
            {!! Form::model($user, ['route' => ['users.update', $user->id], 'method' => 'put']) !!}
            <div class="row justify-content-center">
                <div class="col-6">
                    <ul class="list-unstyled">
                        <li>
                            <div class="form-group row m-0 p-0">
                                {!! Form::label("name", "名前:",["class" => "pt-2 col-3"]) !!}
                                {!! Form::text("name", null,["class" => "form-control col-4"]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="form-group row m-0 p-0">
                                {!! Form::label("height", "身長:",["class" => "pt-2 col-3"]) !!}
                                {!! Form::text("height", null,["class" => "form-control col-4"]) !!}
                                {!! Form::label("height","cm",["class" => "pt-2"]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="form-group row m-0 p-0">
                                {!! Form::label("body_weight", "体重:",["class" => "pt-2 col-3"]) !!}
                                {!! Form::text("body_weight", null,["class" => "form-control col-4"]) !!}
                                {!! Form::label("body_weight","kg",["class" => "pt-2"]) !!}
                            </div>
                        </li>
                        <li>
                            <div class="form-group row m-0 p-0">
                                {!! Form::label("fat_percentage", "体脂肪率:",["class" => "pt-2 col-3"]) !!}
                                {!! Form::text("fat_percentage", null,["class" => "form-control col-4"]) !!}
                                {!! Form::label("fat_percentage","%",["class" => "pt-2"]) !!}
                            </div>
                        </li>
                    </ul>
                </div> 
                <div class="col-2  d-flex align-items-end mb-3">
                    {!! Form::submit('変更', ['class' => 'btn btn-sm btn-outline-success rounded-0 mr-2']) !!}
                    {!! link_to_route('trainings.index', '戻る', ['user' => $user->id], ['class' => 'btn btn-sm btn-outline-primary rounded-0']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>

@endsection