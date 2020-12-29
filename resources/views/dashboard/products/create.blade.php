@extends('dashboard.layouts.master')
@section('title')
     Add Products
@endsection

@section('content')
    <!-- Main content -->
    @include('dashboard.layouts.messages')
    <section class="content">
        <form method="POST" action="{{route('dashboard.products.store')}}" enctype="multipart/form-data">
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
                            <label for="inputName">Product name </label>
                            <input type="text" name="name" value="{{old('name')}}"  id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Code</label>
                            <textarea id="inputDescription" name="code" value="{{old('code')}}"  class="form-control" rows="4"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="inputStatus">Category</label>
                            <select class="form-control custom-select" name="category_id">
                                <option selected disabled>Select one</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
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
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="product_image">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
                <input type="submit" value="Create new Phone type" class="btn btn-success float-right">
            </div>
        </div>
        </form>
    </section>

@endsection


