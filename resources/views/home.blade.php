@extends('layouts.guest')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-4 text-uppercase text-white">Laravel Treni</h1>
            </div>
            <div class="col-12">
                <table class="table table-success table-striped mt-3">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Compagnia</th>
                            <th>Stazione di partenza</th>
                            <th>Stazione di arrivo</th>
                            <th>Orario di partenza</th>
                            <th>Orario di arrivo</th>
                            <th>Codice Treno</th>
                            <th>Numero dei vagoni</th>
                            <th>In orario</th>
                            <th>Cancellato</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->id }}</td>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->departure_station }}</td>
                                <td>{{ $train->arrival_station }}</td>
                                <td>{{ $train->departure_time }}</td>
                                <td>{{ $train->arrival_time }}</td>
                                <td>{{ $train->code }}</td>
                                <td>{{ $train->train_wagons }}</td>
                                <td>{{ $train->on_time ? 'Si' : 'No' }}</td>
                                <td>{{ $train->cancelled ? 'Si' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection