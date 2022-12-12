@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <table class="iksweb">
                        <thead style="text-align: center;">
                        <tr>
                            <th>Список уроков</th>
                            <th>Количество просмотров</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($title as $lesson)
                            <tr style="text-align: center;">
                                <td>{{ $lesson->title }}</td>
                                <td>{{ 1996-$lesson->progress }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
