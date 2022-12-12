@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <h3 style="text-align: center;">Меню по заданиям</h3>
                    <ul>
                            <li>
                                Создать страницу, на которой в табличной форме будет выводиться рейтинг
                                <br>
                                <a class="btn btn-primary" href="{{ '/raiting' }}">К результату</a>
                            </li>
                            <li>
                                Написать SQL запрос, в результате которого будет выведен список студентов,
                                отстортированный по количеству просмотренный уроков
                                <br>
                                <a class="btn btn-primary" href="{{ '/sw' }}">К результату</a>
                            </li>
                            <li>
                                Написать SQL запрос, в результате которого будет выведен список уроков,
                                отсортированный по количеству студентов его посмотревших
                                <br>
                                <a class="btn btn-primary" href="{{ '/lw' }}">К результату</a>
                            </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
