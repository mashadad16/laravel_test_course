@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="iksweb">
                        <thead style="text-align: center;">
                        <tr>
                            <th>Имя фамилия</th>
                            <th>Электронная почта</th>
                            <th>Количество просмотренных уроков</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($name as $fio)
                            <tr>
                                <td>{{ $fio->name }}</td>
                                <td>{{ $fio->email }}</td>
                                <td style="text-align: center;">{{ $fio->progress }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
