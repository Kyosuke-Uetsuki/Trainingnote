@extends("layouts.app")

@section("content")
    <div class="container">
        <div class="row">
            <div class="col-md-6 pl-5 ml-5" style="">
                {!! Form::open(['route' => 'trainings.store']) !!}
                
                <div class="form-group row ">
                    {!! Form::label('training_date', '日付:',["class" => "pt-2 col-md-2"]) !!}
                    {!! Form::date('training_date', date('Y-m-d'),["class" => "form-control col-md-4"]) !!}   
                </div>
                <div class="form-group row">
                    {!! Form::label("part", "部位:",["class" => "col-md-2 pt-2"]) !!}
                    {!! Form::select("part", [null => null,"胸" => "胸", "背中" => "背中", "肩" => "肩","腕" => "腕","脚" => "脚"],null,["class" => "form-control col-md-4"]) !!}
                </div>
            
                
                    <div class="form-group row">
                        {!! Form::label("content", "種目:",["class" => "pt-2 col-md-2"]) !!}
                        <input type="text" list="favorite_list" name="content" class="form-control col-4" value="{{ old('content') }}">
                            <datalist id="favorite_list">
                                @foreach($favorites as $favorite)
                                    <option value="{{ $favorite->content }}">
                                @endforeach
                            </datalist>
                    </div>
                    <div class="form-group row" >
                        {!! Form::label("weight", "重量:",["class" => "pt-2 col-md-2"]) !!}
                        {!! Form::text("weight",old("weight"),["class" => "form-control col-md-4"]) !!}
                        {!! Form::label("weight", "kg",["class" => "pt-2 ml-2"]) !!}
                    </div>
                    <div class="form-group row">
                        {!! Form::label("reps", "回数:",["class" => "pt-2 col-md-2"]) !!}
                        {!! Form::text("reps", old("reps"),["class" => "form-control col-md-4"]) !!}
                        {!! Form::label("reps", "reps",["class" => "pt-2 ml-2"]) !!}
                    </div>
                    <div class="form-group row">
                        {!! Form::label("sets", "セット:",["class" => "pt-2 col-md-2"]) !!}
                        {!! Form::text("sets", old("sets"),["class" => "form-control col-md-4"]) !!}
                        {!! Form::label("sets", "sets",["class" => "pt-2 ml-2"]) !!}
                    </div>
                    <div class="row">
                        <div class="col-md-8">
                            {{Form::radio('mark',2 , false, array('id' => '2'))}}
                            {!! Form::label("2", "よく行うトレーニングに追加する") !!}
                        
                            {{Form::radio('mark', 1, true , array('id' => '1'))}}
                            {!! Form::label("1", "しない",null,["class" => "ml-0"]) !!}
                        </div>
                        
                        <div class="col-md-2">
                            {!! Form::submit('投稿', ['class' => 'btn btn-sm btn-outline-primary rounded-0 ']) !!}
                        </div>
                    </div>
                    
                {!! Form::close() !!}
            </div>
            
            <div class="col-md-5 pr-5">
                <p class="text-center border-bottom">登録情報</p>
                <div class="d-flex justify-content-between">
                    <div class="col-md-6 pl-5">
                        <ul class="list-unstyled">
                            <li>ユーザー: {{$user->name}}</li>
                            <li class="mt-1">身長: {{$user->height}} cm</li>
                            <li class="mt-1">体重:  {{$user->body_weight}} kg</li>
                            <li class="mt-1">体脂肪率: {{$user->fat_percentage}} %</li>
                        </ul>
                    </div>
                    <div class="col-md-6 mt-3 ">
                        <div class="mr-2 pl-5">{!! link_to_route('users.edit', '編集', ['user' => $user->id], ['class' => 'btn btn-sm btn-outline-success rounded-0']) !!}</div>
                        <div class="mt-2 pl-5">
                             {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                             {!! Form::submit('退会', ['class' => 'btn btn-sm btn-outline-dark rounded-0']) !!}
                             {!! Form::close() !!}
                         </div>
                    </div>
                </div>
                
                <div class="mb-0 mt-4">
                    <p class="text-center border-bottom">よく行うトレーニングリスト</p>
                    <div class="container mt-0 overflow-auto" style="width:100%; height:100px">
                        <ul class=" list-unstyled">
                            @foreach($favorites as $favorite)
                                <li class="mt-1">
                                    <div class="d-flex justify-content-between">
                                        <div class="ml-3">{{ $favorite->content }}</div>
                                        <div>{!! Form::open(['route' => ['trainings.update', $favorite->id], 'method' => 'put']) !!}
                                             {!! Form::submit('取消', ['class' => 'btn btn-sm btn-outline-dark rounded-0 mr-3']) !!}
                                             {!! Form::close() !!}
                                        </div>
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
    @include("trainings.note")
    </div>
    
@endsection