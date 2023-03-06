@extends('admin.layouts.app')

@section('content')
    <div id="content" class="main-content">
        <div class="container">


            <div class="row layout-top-spacing">
                @include('admin.includes.messages')
                <div id="tableCheckbox" class="col-lg-12 col-12 layout-spacing">
                    <div class="statbox widget box box-shadow">
                        <div class="widget-header">
                            <div class="row">
                                <div class="col-xl-10 col-md-10 col-sm-10 col-10">
                                    <h4>Brands</h4>
                                </div>
                                <div class="col-xl-2 col-md-2 col-sm-2 col-2">
                                    <a class="btn btn-success" href="{{ route('admin.brands.create') }}">Create</a>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content widget-content-area">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover table-striped table-checkable table-highlight-head mb-4">
                                    <thead>
                                    <tr>
                                        <th class="">Name</th>
                                        <th class="">Image</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($brands as $item)
                                        <tr>

                                            <td>
                                                <p class="mb-0">{{ $item->name }}</p>
                                            </td>
                                            <td>
                                                <a href="{{ asset('uploads/' .  $item->image) }}" target="_blank">
                                                    <img width="50" height="50"  src="{{ asset('uploads/' .  $item->image) }}" alt="{{ $item->name }}" title="{{ $item->name }}">
                                                </a>
                                            </td>

                                            <td class="text-center">
                                                <ul class="table-controls list-unstyled">
                                                    <li><a href="{{ route('admin.brands.edit', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg></a></li>
                                                    <li><a href="{{ route('admin.brands.destroy', $item->id) }}" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg></a></li>
                                                </ul>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>

                                            <td colspan="3">
                                                <p class="mb-0">no data yet</p>
                                            </td>

                                        </tr>
                                    @endforelse


                                    </tbody>
                                </table>
                            </div>
                            {{ $brands->links() }}
                        </div>
                    </div>
                </div>

            </div>

        </div>

        <!--  END CONTENT AREA  -->
    </div>

@stop
