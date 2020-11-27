@extends('admin.layouts.appAdmin')

@section('admin_content')

    <p>{{ session('status') }}</p>

    <form method="POST" action="{{ url('admin/import_products') }}" enctype="multipart/form-data">
    {{ csrf_field() }}

    <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
        <label for="file" class="control-label">Загрузить csv файл</label>
        <input type="file" id="file" name="file" class="form-control" required>
        @if($errors->has('file'))
        <span class="help-block">
            <strong>{{ $errors->first('file') }}</strong>
        </span>
        @endif
    </div>
        <button type="submit" name="submit" class="btn btn-success">Сохранить</button>
    </form>

@endsection
