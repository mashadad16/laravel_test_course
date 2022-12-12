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
                                <th>Прогресс обучения</th>
                                <th>Место в рейтинге</th>
                            </tr>
                        </thead>
                        <tbody>
                        @php
                            $i = 0;
                            $elem = 1;
                        @endphp
                        @foreach ($name as $key => $fio)
                            <tr>
                                @php
                                    if ($elem!=$fio->progress)
                                        {
                                           $i++;
                                           $elem = $fio->progress;
                                        }
                                @endphp
                                <td>{{ $fio->name }}</td>
                                <td>{{ $fio->email }}</td>
                                <td style="text-align: center;">{{ round(($fio->progress*100)/27) }} %</td>
                                <td style="text-align: center;">{{$i}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
