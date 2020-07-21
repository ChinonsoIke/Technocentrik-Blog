@extends('admin.layouts.dashboarddefault')

@section('title', 'Admin | Edit Post')

@section('stylesheets')

    {!! Html::style('css/select2.min.css') !!}

    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: "link code"
        });
    </script>

@endsection

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    {!! Form::model($post, ['route'=>['admin.posts.update', $post->id], 'method'=>'POST']) !!}
                    <div class="col-md-8">
                        {{ Form::label('title', 'Title:') }}
                        {{ Form::text('title', null, ["class"=>"form-control"]) }}

                        {{ Form::label('slug', 'Slug:') }}
                        {{ Form::text('slug', null, ["class"=>"form-control"]) }}

                        {{ Form::label('author', 'Author Name:') }}
                        {{ Form::text('author', null, ["class"=>"form-control"]) }}

                        {{ Form::label('category_id', 'Category:') }}
                        {{ Form::select('category_id', $categories, null, ["class"=>"form-control"]) }}

                        {{ Form::label('tags', 'Tags:') }}
                        {{ Form::select('tags[]', $tags, null, ["class"=>"form-control select2-multi", "multiple"=>"multiple"]) }}

                        <label name="featured_image" enctype="multipart/form-data">Update Featured Image:</label>
                        <input type="file" name="featured_image">

                        {{ Form::label('body', 'Body:') }}
                        {{ Form::textarea('body', null, ["class"=>"form-control"]) }}
                    </div>
                    <div class="col-md-4">
                        <div class="well">
                            <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                                <dt>Last Updated</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-danger btn-sm">Cancel</a>
                                </div>
                                <div class="col-sm-6">
                                    {{Form::submit('Save Changes', ['class'=> 'btn btn-success btn-sm'])}}
                                </div>
                            </div>
                        </div>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('scripts')

    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $(document).ready(function() {
            $('.select2-multi').select2();
            $('.select2-multi').select2().value({!! json_encode($post->tags()->allRelatedIds()) !!}).trigger('change');
        });
    </script>

@endsection