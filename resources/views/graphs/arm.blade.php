<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>TrainingNote</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    </head>
    <body>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/lodash@4.17.15/lodash.min.js"></script>
        
        @include("commons.navbar")
        
        
        <div class="container">
            @include("trainings.navtabs")
            <canvas id="myLine" width="1200px" height="450px"></canvas>
        </div>
        
        <script src="{{ asset('/js/armgraph.js') }}"></script>
        
        <div class="container">
            @include("datas.armdata")
        </div>
    </body>
</html>
