@extends('admin.layouts.main')
@section('title')
    {{ __('Пользователи') }}
@endsection
@section('admin_breadcrumbs_last')
   {{__('Пользователи') }}
@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">{{__('Пользователи') }}</h1>
                    </div><!-- /.col -->
                    @include('admin.includes.breadcrumbs.admin.breadcrumbs')
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
                <div class="row">
                    <div class="col-12  mb-3">
                        <a href="{{ route('admin.user.create') }}" class="btn btn-block btn-primary"
                           style="max-width: max-content">{{__('Добавить') }} <i class="fas fa-plus"></i></a>

                    </div>
                </div>
                <div class="row">
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
                                    @foreach($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.user.show', $user->id) }}"><i class="fas fa-solid fa-eye"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('admin.user.edit', $user->id) }}" class="text-success"><i class="fas fa-solid fa-pen"></i></a>
                                            </td>
                                            <td class="text-center">
                                                <form action="{{ route('admin.user.delete', $user->id) }}" method="POST">
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
                </div>
                <!-- /.row -->

            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
        <!-- /.content -->
    </div>
@endsection
