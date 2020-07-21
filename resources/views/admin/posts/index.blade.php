@extends('admin.layouts.dashboarddefault')

@section('title', 'Admin | Posts')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Posts</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Posts</li>
                </ol>
            </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-10">
                        <h1>All Posts</h1>
                    </div>
                    <div class="col-md-2">
                        <a href="{{route('admin.posts.create')}}" class="btn btn-block btn-primary">Create New Post</a>
                    </div>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table">
                            <thead>
                                <th>#</th>
                                <th>Title</th>
                                <th>Body</th>
                                <th>Created At</th>
                                <th></th>
                            </thead>

                            <tbody>
                                @foreach ($posts as $post)
                                    <tr>
                                        <th>{{$post->id}}</th>
                                        <td>{{$post->title}}</td>
                                        <td>{{substr(strip_tags($post->body), 0, 50)}}{{strlen(strip_tags($post->body)) > 50 ? '...' : '' }}</td>
                                        <td>{{date('M j, Y', strtotime($post->created_at))}}</td>
                                        <td><a href="{{route('admin.posts.show', $post->id)}}" class="btn btn-primary btn-sm">View</a> <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-success btn-sm">Edit</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="text-center">
                            {{ $posts->links() }}
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection