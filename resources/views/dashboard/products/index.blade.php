@extends('dashboard.layouts.master')
@section('title')
     List Products
@endsection

@section('content')
    <section class="content">
    @include('dashboard.layouts.messages')
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Products</h3>

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
                            Product name
                        </th>
                        <th style="">
                            Product image
                        </th>
                        <th style="">
                           Category
                        </th>

                        <th style="">
                            Product code
                        </th>
                       <th>
                            Project Progress
                        </th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($products as $product)

                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>
                            <a>
                                {{$product-> name}}
                            </a>
                            <br/>
                            <small>
                                Created {{$product->created_at}}
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <img alt="Avatar" class="table-avatar"
                                         src="{{asset('products_images/'.$product->feature_image)}}">
                                </li>
                            </ul>
                        </td>
                         <td class="project_progress">
                             <!--$product->category->name-->
                             {{ $product->category['name']}}

                        </td>

                        <td>
                            <ul class="list-inline">
                                {{$product->code}}
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

                        <td class="project-actions text-right">
                            <form action="{{route('dashboard.products.destroy',$product)}}" method="POST">
                            <a class="btn btn-primary btn-sm" href="{{route('dashboard.products.show',$product )}}">
                                <i class="fas fa-folder">
                                </i>
                                View
                            </a>
                            <a class="btn btn-info btn-sm" href="{{route('dashboard.products.edit',$product)}}">
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
        {{$products->links()}}
    </section>
@endsection


