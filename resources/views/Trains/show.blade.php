@extends('layouts.base')

@section('content')
        <div class="container">
            <h2>{{$trains->Stazione_di_partenza}}</h2>
            <h2>{{$trains->Stazione_di_arrivo}}</h2>
            <h2>{{$trains->Oraio_di_partenza}}</h2>
            <h2>{{$trains->Orario_di_arrivo}}</h2>
            <h2>{{$trains->Codice_treno}}</h2>
            <h2>{{$trains->Numero_carrozze}}</h2>
            <h2>{{$trains->In_orario}}</h2>
            <h2>{{$trains->Cancellato}}</h2>
        </div>
@endsection