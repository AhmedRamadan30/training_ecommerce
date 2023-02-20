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
                                        <form method="post" action="{{ route('admin.categories.update', $category->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <div class="form-group">
                                                <label for="name" class="sr-only">Name</label>
                                                <input id="name" type="text" name="name"
                                                       placeholder="enter name of category" class="form-control"
                                                       value="{{ $category->name }}"
                                                       required="">
                                            </div>
                                            <div class="form-group">
                                                <label for="parent_id" class="sr-only">Parent</label>
                                                <select id="parent_id" type="text" name="parent_id" class="form-control">
                                                    <option>select parent</option>
                                                    @foreach($categories as $item)
                                                        <option @if($item->id == $category->parent_id) selected @endif value="{{ $item->id }}">{{ $item->name }}</option>
                                                    @endforeach
                                                </select>
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
