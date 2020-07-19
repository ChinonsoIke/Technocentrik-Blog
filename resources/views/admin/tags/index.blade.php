@extends('admin.layouts.dashboarddefault')
@section('content')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tags</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Tags</li>
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
                    <div class="col-md-8">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                @foreach ($tags as $tag)
                                    <tr>
                                        <th>{{$tag->id}}</th>
                                        <td>{{$tag->name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div> <!--/ .col-md-8 -->
                    <div class="col-md-3">
                        <div class="well">
                            <form action="{{route('tags.store')}}" method="POST">
                                @csrf
                                <h3>New Tag</h3>
                                <input type="text" name="name" placeholder="Name:" class="form-control">
                                <input type="submit" class="btn btn-block btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection