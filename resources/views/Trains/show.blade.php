@extends('layouts.base')

@section('content')
        <div class="container">
            <h2>{{$train->Stazione_di_partenza}}</h2>
            <h2>{{$train->Stazione_di_arrivo}}</h2>
            <h2>{{$train->Oraio_di_partenza}}</h2>
            <h2>{{$train->Orario_di_arrivo}}</h2>
            <h2>{{$train->Codice_treno}}</h2>
            <h2>{{$train->Numero_carrozze}}</h2>
            <h2>{{$train->In_orario}}</h2>
            <h2>{{$train->Cancellato}}</h2>
        </div>
@endsection