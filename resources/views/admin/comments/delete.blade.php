@extends('admin.layouts.dashboarddefault')

@section('title', 'Admin | Delete Comment')

@section('content')
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1>DELETE THIS COMMENT?</h1>
            <p>
                <strong>Name: </strong> {{$comment->name}} <br>
                <strong>Email: </strong> {{$comment->email}} <br>
                <strong>Comment: </strong> {{$comment->comment}} <br>
            </p>
            <form action="{{route('comments.destroy', $comment->id)}}" method="POST">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE" class="btn btn-block btn-lg btn-danger">
            </form>
        </div>
    </div>
@endsection