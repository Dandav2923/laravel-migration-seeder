@extends('layouts.base')

@section('content')

    @foreach ($trains as $item)
        <div class="container">
            <h2>{{$item->Stazione_di_partenza}}</h2>
            <h2>{{$item->Stazione_di_arrivo}}</h2>
            <h2>{{$item->Oraio_di_partenza}}</h2>
            <h2>{{$item->Orario_di_arrivo}}</h2>
            <h2>{{$item->Codice_treno}}</h2>
            <h2>{{$item->Numero_carrozze}}</h2>
            <h2>{{$item->In_orario}}</h2>
            <h2>{{$item->Cancellato}}</h2>
        </div>
    @endforeach    

@endsection