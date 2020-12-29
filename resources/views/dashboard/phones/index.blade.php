@extends('dashboard.layouts.master')
@section('title')
     List Phones
@endsection

@section('content')
    <section class="content">
    @include('dashboard.layouts.messages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Phones</h3>

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
                            Phone name
                        </th>
                        <th style="">
                           User ID
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($phones as $phone)
                    <td>
                        <a>
                            {{$phone->name}}
                        </a>
                        <br/>
                        <small>
                            Created {{$phone->created_at}}
                        </small>
                    </td>
                         <td class="project_progress">


                             {{ $phone->user['user_id']}}

                        </td>




                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.phones.destroy',$phone)}}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('dashboard.phones.show',$phone )}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.phones.edit',$phone)}}">
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
        {{$phones->links()}}
    </section>
@endsection


