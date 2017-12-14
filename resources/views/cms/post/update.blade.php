@extends('cms.layouts.app')
@section('content')
    @section('stylesheets')
        <link rel="stylesheet" type="text/css" href="libs/bootstrap-datetimepicker.css">
    @stop
    <div class="container">
        <h2>Update Post</h2>

        <form action="" method="POST" class="row">
            {!! csrf_field() !!}

            <input name="_method" type="hidden" value="PUT">

            <div class="col-sm-12">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $postObject->title }}">
                </div>

                <div class="form-group">
                    <label>Summary</label>
                    <input type="text" class="form-control" name="summary" value="{{ $postObject->summary }}">
                </div>

                <div class="form-group">
                    <label>Content</label>
                    <input type="text" class="form-control" name="content" value="{{ $postObject->content }}">
                </div>

                <div class="form-group">
                    <label>Thumbnail</label>
                    <input type="file" name="image" accept="image/*">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </form>
    </div>

    @section('scripts')
        <script src="libs/moment-with-locales.js"></script>
        <script src="libs/bootstrap-datetimepicker.js"></script>
    @stop
@stop
