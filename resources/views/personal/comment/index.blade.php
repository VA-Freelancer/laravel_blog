@extends('personal.layouts.main')
@section('title')
    {{ __('Комментарии') }}
@endsection
@section('content')
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">@yield('title')</h1>
                </div>
                @include('personal.includes.breadcrumbs.personal.breadcrumbs')
            </div>
        </div>
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>10</h3>

                            <p>{{ __('Понравившаяся посты') }}</p>
                        </div>
                        <div class="icon">
                            <i class=" fas fa-heart"></i>
                        </div>
                        <a href="" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>10</h3>

                            <p>{{ __('Комментарии') }}</p>
                        </div>
                        <div class="icon">
                            <i class=" fas fa-comment-alt"></i>
                        </div>
                        <a href="" class="small-box-footer">Подробнее <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-6">

            <div class="card">

                <!-- /.card-header -->
                <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-nowrap">
                        <thead>

                        <tr>
                            <th>ID</th>
                            <th>Название</th>
                            <th colspan="3" class="text-center">Действие</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($comments as $comment)
                            <tr>
                                <td>{{ $comment->id }}</td>
                                <td>{{ $comment->message }}</td>
                                <td class="text-center">
                                    <a href="{{ route('personal.comment.edit', $comment->id) }}" class="text-success"><i class="fas fa-solid fa-pen"></i></a>
                                </td>

                                <td class="text-center">
                                    <form action="{{ route('personal.comment.delete', $comment->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-transparent border-0" type="submit" role="button" > <i class="text-danger fas fa-trash"></i></button>

                                    </form>
                                </td>


                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </section>
</div>
@endsection
