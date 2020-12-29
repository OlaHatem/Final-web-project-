@extends('dashboard.layouts.master')
@section('title')
     Edit Users
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{route('dashboard.users.update',$user)}}">
            @method('PUT')
            @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">General</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">User name </label>
                            <input type="text" value="{{$user->name}}" name="name" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Email</label>
                            <textarea id="inputDescription" name="code" class="form-control" rows="4">{{$user->email}}
                            </textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Password</label>
                            <textarea id="inputDescription" name="code" class="form-control" rows="4">{{$user->password}}
                            </textarea>
                        </div>


                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>

        </div>

        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-secondary">Cancel</a>
                <input type="submit" value="Update category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>

@endsection


