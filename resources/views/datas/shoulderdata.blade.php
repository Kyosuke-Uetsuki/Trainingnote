@if(count($trainings) > 0)
    <div class="container mt-5 border overflow-auto" style="width:100%; height:300px">
        <table class="table">
            <tr>
                <th class="text-center">/</th>
                <th class="">種目</th>
                <th class="">重量</th>
                <th class="">回数</th>
                <th class="">セット数</th>
                <th class="">ボリューム</th>
            </tr>
        @foreach($trainings as $training)
            @if($training->part == "肩")
            <tr>
                <td class="text-center">{{$training->training_date}}</td>
                <td>{{$training->content}}</td>
                <td>{{$training->weight}}kg</td>
                <td>{{$training->reps}}回</td>
                <td>{{$training->sets}}set</td>   
                <td>{{$training->volume}}kg</td>   
                <td>
                    <div>
                         {!! Form::model($training, ['route' => ['trainings.destroy', $training->id], 'method' => 'delete']) !!}
                         {!! Form::submit('削除', ['class' => "btn btn-outline-secondary rounded-0 btn-sm"]) !!}
                         {!! Form::close() !!}
                     </div>
                 </td>   
            </tr>
            @endif
        @endforeach
        </table>
    </div>
    {{ $trainings->links() }}
@endif