@extends('admin.layouts.main')
@section('title')
    {{ __('Редактирование: ' . $user->name) }}
@endsection
@section('admin_breadcrumbs_last')
    {{ __('Редактирование: ' . $user->name) }}
@endsection
@section('content')

    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">{{ __('Редактирование: ' . $user->name) }}</h1>
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
                <div class="col-12">

                    <form action="{{  route('admin.user.update', $user->id) }}" method="POST" class="w-25 " enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Имя пользователя" value="{{ $user->name }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Ваша почта"  value="{{ $user->email }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group ">
                            <label for="exampleInputFile">Добавить аватар</label>
                            <div class="w-100 mb-2">
                                <img src="{{ url('storage/' . $user->avatar ) }}" alt="" class="w-50">
                            </div>
                            <div class="input-group">
                                <div class="custom-file">

                                    <input type="file" class="custom-file-input" name="avatar" accept=".png, .jpg, .jpeg">
                                    <label class="custom-file-label"  >Выберите изображение</label>
                                </div>
                                <div class="input-group-append">
                                    <span class="input-group-text">Загрузка</span>
                                </div>
                            </div>
                            @error('main_image')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Выбирите группу</label>
                            <select name="role" class="custom-select">

                                @foreach($roles as $id => $role)
                                    <option value="{{ $id }}"
                                        {{ $id == $user->role ? 'selected' : '' }}
                                    >{{ $role }}</option>
                                @endforeach
                            </select>
                            @error('role')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group w-50">
                            <input type="hidden" name="user_id" value="{{ $user->id }}">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" value="Обновить">
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    <!-- /.content -->
</div>
@endsection
