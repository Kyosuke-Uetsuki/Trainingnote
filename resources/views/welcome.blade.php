@extends("layouts.topapp")

@section("content")

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center" id="top">
            <h1 class="text-light">Training Note</h1>
            {!! link_to_route("signup.get", "ユーザー登録", [], ["class" =>"btn  btn-outline-light rounded-0"])!!}
        </div>
    </div>

@endsection