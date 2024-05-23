@extends('layouts.app')

@section('title', 'Trains')

@section('content')
<main>
        <h2>List of Trains</h2>
        <table>
            <thead>
                <tr>
                    <th>Company</th>
                    <th>Departure Station</th>
                    <th>Arrival Station</th>
                    <th>Departure Time</th>
                    <th>Arrival Time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trains as $train)
                <tr>
                    <td>{{ $train->company }}</td>
                    <td>{{ $train->departure_station }}</td>
                    <td>{{ $train->arrival_station }}</td>
                    <td>{{ $train->departure_time }}</td>
                    <td>{{ $train->arrival_time }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </main>

@endsection
