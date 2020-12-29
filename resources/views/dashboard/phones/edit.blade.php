@extends('dashboard.layouts.master')
@section('title')
     Edit Phone
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{route('dashboard.phones.update',$phone)}}">
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
                            <label for="inputName">phone name </label>
                            <input type="text" value="{{$phone->name}}" name="name" id="inputName" class="form-control">
                        </div>

                        <label for="inputName">User ID </label>
                        <select class="form-control custom-select" name="category_id">
                            <option selected disabled>Select one</option>
                            @foreach($users as $user)
                                <option value="{{$user->id}}">{{$user->id}}</option>
                            @endforeach
                        </select>

                        <div class="form-group">

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


