@extends('layouts.main_layout')

@section('content')
    <h1>Movies</h1>
    <table class="table table-primary">
        <thead>
            <tr>
                <th>Title</th>
                <th>Original title</th>
                <th>Nationality</th>
                <th>Date</th>
                <th>Vote</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($movies as $movie)
                <tr>
                    <td>{{$movie -> title}}</td>
                    <td>{{$movie -> original_title}}</td>
                    <td>{{$movie -> nationality}}</td>
                    <td>{{$movie -> date}}</td>
                    <td>{{$movie -> vote}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection