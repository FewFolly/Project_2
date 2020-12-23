@extends('layouts.layout')

@section('content')
    <form action="" method="post" enctype="multipart/form-data">

        <h2>Создать пост</h2>
        <div class="form-group">
            <input type="text" class="form-control" name="title" required>
            <!-- /.form-control -->
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <textarea name="desc" rows="10" class="form-control" required></textarea>
            <!-- /.form-control -->
        </div>
        <!-- /.form-group -->
        <div class="form-group">
            <input type="file">
        </div>
        <!-- /.form-group -->

        <input type="submit" value="Создать пост" class="btn btn-outline-secondary">
        <!-- /.btn -->
    </form>

@endsection
