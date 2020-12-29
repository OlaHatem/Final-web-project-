@extends('dashboard.layouts.master')
@section('title')
     List Users
@endsection

@section('content')
    <section class="content">
    @include('dashboard.layouts.messages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Users</h3>

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
                           User name
                        </th>
                        <th style="">
                            User Email
                        </th>
                        <!--<th>
                            Project Progress
                        </th>-->
                        <th style=""class="text-center">
                           Password
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)

                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$user-> name}}
                            </a>
                            <br/>
                            <small>
                                Created {{$user->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                {{$user->email}}

                            </ul>
                        </td>
                        <td>
                            <ul class="list-inline">
                                {{$user->password}}

                            </ul>
                        </td>


                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.users.destroy',$user)}}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('dashboard.users.show',$user )}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.users.edit',$user )}}">
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
        <!-- /.card -->

    </section>
@endsection


