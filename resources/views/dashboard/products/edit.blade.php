@extends('dashboard.layouts.master')
@section('title')
     Edit Product
@endsection

@section('content')
    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{route('dashboard.products.update',$product)}}">
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
                            <label for="inputName">Product name </label>
                            <input type="text" value="{{$product->name}}" name="name" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Product Code</label>
                            <textarea id="inputDescription" name="code" class="form-control" rows="4">{{$product->code}}
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


