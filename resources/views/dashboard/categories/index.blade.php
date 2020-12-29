@extends('dashboard.layouts.master')
@section('title')
     List Categories
@endsection

@section('content')
    <section class="content">
    @include('dashboard.layouts.messages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Categories</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                        <i class="fas fa-times"></i></button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped categories">
                    <thead>
                    <tr>
                        <th style="">
                            #
                        </th>
                        <th style="">
                            Category name
                        </th>
                        <th style="">
                            Category code
                        </th>
                        <!--<th>
                            Project Progress
                        </th>-->
                        <th style=""class="text-center">
                           Date
                        </th>
                        <th style="">
                            Views
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)

                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$category-> name}}
                            </a>
                            <br/>
                            <small>
                                Created {{$category->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                {{$category->code}}
                               <!-- <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar" width="50" height="50" src="../../dist/img/avatar.png">
                                </li> -->


                            </ul>
                        </td>
                        <td class="project_progress">

                            <small>
                                57% Complete
                            </small>
                        </td>

                        <td class="project-state">
                            {{$category->views}}

                        </td>
                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.categories.destroy',$category)}}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('dashboard.categories.show',$category )}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.categories.edit',$category )}}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        {{$categories->links()}}
        <!-- /.card -->

    </section>
@endsection


