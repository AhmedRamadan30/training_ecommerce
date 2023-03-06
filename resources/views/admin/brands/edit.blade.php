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
                                        <h4>edit category</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-content widget-content-area">

                                <div class="row">
                                    <div class="col-lg-6 col-12 mx-auto">
                                        <form method="post" action="{{ route('admin.brands.update', $brand->id) }}" enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="name" class="sr-only">Name</label>
                                                <input id="name" type="text" name="name" value="{{ $brand->name }}"
                                                       placeholder="enter name of brand" class="form-control"
                                                       required="">
                                            </div>

                                            <div class="form-group">
                                                <div class="custom-file mb-4">
                                                    <input type="file" class="custom-file-input" id="image" name="image">
                                                    <label class="custom-file-label" for="image">Choose file</label>
                                                </div>
                                                <a href="{{ asset('uploads/' .  $brand->image) }}" target="_blank">
                                                    <img width="50" height="50"  src="{{ asset('uploads/' .  $brand->image) }}" alt="{{ $brand->name }}" title="{{ $brand->name }}">
                                                </a>
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
