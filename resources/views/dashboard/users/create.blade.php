@extends('dashboard.layouts.master')
@section('title')
     Add User
@endsection

@section('content')
    <!-- Main content -->
    @include('dashboard.layouts.messages')
    <section class="content">
        <form method="POST" action="{{route('dashboard.users.store')}}"enctype="multipart/form-data">
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
                            <input type="text" name="name" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Email</label>
                            <textarea id="inputDescription" name="email" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputName">Password </label>
                            <input type="text" name="password" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                           <!-- <label for="inputStatus">Status</label>-->
                          <!--  <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Select one</option>
                                <option>On Hold</option>
                                <option>Canceled</option>
                                <option>Success</option>
                            </select>-->
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
                <input type="submit" value="Create new Category" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>

@endsection


