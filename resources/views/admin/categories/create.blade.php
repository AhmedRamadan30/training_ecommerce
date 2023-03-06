@extends('admin.layouts.app')

@section('content')
    <div id="content" class="main-content">

        <div class="container">
            <div class="container">
                <div class="row layout-top-spacing">

                    <div id="basic" class="col-lg-12 layout-spacing">
                        <div class="statbox widget box box-shadow">
                            <div class="widget-header">
                                <div class="row">
                                    <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                                        <h4>create category</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" action="{{ route('admin.categories.store') }}" enctype="multipart/form-data">
                                            @csrf
                                            <div class="form-group">
                                                <label for="name" class="sr-only">Name</label>
                                                <input id="name" type="text" name="name"
                                                       placeholder="enter name of category" class="form-control"
                                                       required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="parent_id" class="sr-only">Parent</label>
                                                <select id="parent_id" type="text" name="parent_id" class="form-control">
                                                    <option>select parent</option>
                                                    @foreach($categories as $category)
                                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-file mb-4">
                                                    <input type="file" class="custom-file-input" id="image" name="image" required>
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <button type="submit" class="btn btn-success">save</button>
                                            </div>

                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </div>

@stop
