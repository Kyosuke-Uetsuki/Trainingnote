@if(count($errors) > 0)
    <div class="fixed-bottom text-center" style="width:300px; margin:auto;">
        <ul class="alert alert-warning list-unstyled" role="alert">
            @foreach($errors->all() as $error)
                <li class="ml-4">{{ $error }}</li>
            @endforeach
    </div>
@endif