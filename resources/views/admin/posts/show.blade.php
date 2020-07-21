@extends('admin.layouts.dashboarddefault')

@section('title', 'Admin | Posts')

@section('content')

    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <h1>{{$post->title}}</h1>

                        <p class="lead">{!!$post->body!!}</p>

                        <hr>

                        <div class="tags">
                            @foreach ($post->tags as $tag)
                                <span class="label label-success">{{$tag->name}}</span>
                            @endforeach
                        </div>

                        <div id="backend-comments">
                            <h3>Comments <small>{{$post->comments()->count()}} total</small></h3>

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Comment</th>
                                        <th width=70px></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($post->comments as $comment)
                                        <tr>
                                            <td>{{$comment->name}}</td>
                                            <td>{{$comment->email}}</td>
                                            <td>{{$comment->comment}}</td>
                                            <td>
                                                <a href="{{route('comments.delete', $comment->id)}}" class="btn btn-xs btn-danger"><span class="glyphicon glyphicon-trash"></span></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>                  

                    <div class="col-md-4">
                        <div class="well">
                            <dl class="dl-horizontal">
                                <dt>Slug URL:</dt>
                                <dd>{{$post->slug}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Category:</dt>
                                <dd>{{$post->category->name}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Created At:</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->created_at))}}</dd>
                            </dl>
                            <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                                <dd>{{date('M j, Y h:ia', strtotime($post->updated_at))}}</dd>
                            </dl>
                            <hr>
                            <div class="row">
                                <div class="col-sm-6">
                                    <a href="{{route('admin.posts.edit', $post->id)}}" class="btn btn-primary btn-block">Edit</a>
                                </div>
                                <div class="col-sm-6">
                                    {!! Form::open(['route'=> ['admin.posts.destroy', $post->id], 'method'=>'POST']) !!}

                                    @method('delete')

                                    {!! Form::submit('Delete', ['class'=> 'btn btn-danger btn-block']) !!}

                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection