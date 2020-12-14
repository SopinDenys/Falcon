@extends('admin.layouts.appAdmin')

@section('admin_content')

    <div class="container import_products">
        <div class="row">
            <div class="col-md-6">
                @if( session('status') )
                    <div class="alert alert-primary" role="alert">
                        <p>{{ session('status') }}</p>
                    </div>
                @endif
                <form method="POST" action="{{ url('admin/import_products') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}

                    <div class="form-group {{ $errors->has('file') ? 'has-error' : '' }}">
                        <label for="file" class="control-label">Загрузить csv файл (разделитель ; )</label>
                        <input type="file" id="file" name="file" class="form-control" required>
                        @if($errors->has('file'))
                            <span class="help-block"><strong>{{ $errors->first('file') }}</strong></span>
                        @endif
                    </div>
                    <button type="submit" name="submit" class="btn btn-success">Сохранить</button>
                </form>
            </div>
        </div>
    </div>

@endsection
