@extends("layouts.app")
@section("content")
<div class="container">
    <h2 class="">Mypage</h2>
    
    <div class="row">
        <div class="border col-sm-6">
            <p class="text-center">登録情報</p>
            <ul class="list-unstyled">
                <li>名前:{{$user->name}}</li>
                <li>身長:{{$user->height}}cm</li>
                <li>体重:{{$user->body_weight}}kg</li>
                <li>体脂肪率:{{$user->fat_percentage}}%</li>
            </ul>
            <div class="row">
                <div class="mr-2">{!! link_to_route('users.edit', '編集', ['user' => $user->id], ['class' => 'btn btn-success']) !!}</div>
                <div>
                     {!! Form::model($user, ['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                     {!! Form::submit('退会', ['class' => 'btn btn-danger']) !!}
                     {!! Form::close() !!}
                 </div>
            </div>
        </div>
        <div class="border col-sm-6">
            <p class="text-center">よく行うトレーニングリスト</p>
            <div class="container mt-5 border overflow-auto">
                @foreach($favorites as $favorite)
                    {{ $favorite->content }}
                @endforeach
            </div>
        </div>
    </div>
</div>

@endsection