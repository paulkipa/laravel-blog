@extends('layouts.app')

@section('content')
<div class="container">
    <DIV class="container-fluid">
        <div class="row">
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Deposits</h4>
                        <div class="text-right">
                            <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-success"></i> 120,000.00</h2>
                            <span class="text-muted">Total Deposits</span>
                        </div>
                        <span class="text-success"></span>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Savings</h4>
                        <div class="text-right">
                            <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-info"></i> 5,000</h2>
                            <span class="text-muted">Withdrawable Savings</span>
                        </div>
                        <span class="text-info"></span>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Share Capital</h4>
                        <div class="text-right">
                            <h2 class="font-weight-light mb-0"><i class="ti-arrow-down text-danger"></i> 9,600.00</h2>
                            <span class="text-muted">Normal Shares</span>
                        </div>
                        <span class="text-danger"></span>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <!-- Column -->
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Loans</h4>
                        <div class="text-right">
                            <h2 class="font-weight-light mb-0"><i class="ti-arrow-up text-purple"></i> 8,000</h2>
                            <span class="text-muted">Outstanding Loans</span>
                        </div>
                        <span class="text-purple"></span>
                        <div class="progress">
                            <div class="progress-bar bg-dark" role="progressbar" style="width: 100%; height: 6px;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->

        </div>
        <div class="row">
            Our Chart Goes Here
        </div>

    </DIV>
{{--     <div class="row justify-content-center">
    <div class="col-12">
                <a href="post/create" class="btn btn-success mb-2">Create Post</a> 
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
    </div> --}}
</div>
@endsection