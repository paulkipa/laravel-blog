@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-12">
                <a href="post/create" class="btn btn-primary mb-2">Create Post</a> 
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th width="20%">Title</th>
                            <th width="40%">Description</th>
                            <th>Published At</th>
                            <th>Created at</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                        <tr>
                            <td>{{ $post->id }}</td>
                            <td>{{ $post->title }}</td>
                            <td>{{ $post->body}}</td>
                            <td>{{ date('Y-m-d', strtotime($post->published_at)) }}</td>
                            <td>{{ date('Y-m-d', strtotime($post->created_at)) }}</td>
                            <td>
                            <a href="post/{{$post->id}}" ><i class="fa fa-eye"></i></a>
                            <a href="post/{{$post->id}}/edit"><i class="fa fa-edit"></i></a>

                            <form action="post/{{$post->id}}" method="post" class="d-inline">
                                {{ csrf_field() }}
                                @method('DELETE')
                                <button class="btn btn-outline-danger" type="submit"><i class="fa fa-trash"></i></button>
                            </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div> 
            <div class="row">
                <div class="col-12 d-flex justify-content-center" >
                    {{$posts->links()}}
                </div>
            </div>
    </div>
</div>
@endsection