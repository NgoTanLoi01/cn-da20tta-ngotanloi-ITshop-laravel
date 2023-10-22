@extends('layouts.admin')

@section('title')
<title>Setting</title>
@endsection

@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @include('partials.content-header', ['name' => 'settings', 'key' => 'List'])

    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <a href="{{route('menus.create')}}" class="btn btn-sm btn-primary float-right m-2">
                        <i class="fas fa-plus fa-fw fa-xs"></i>Add</a>
                </div>
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Config key</th>
                                <th scope="col">Config value</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach($menus as $menu) --}}
                            <tr>
                                <th scope="row">1</th>
                                <td>Config key</td>
                                <td>Config value</td>
                                <td>
                                    <a class="btn btn-sm btn-warning"><i class="fas fa-edit"></i>Edit</a>
                                    <a class="btn btn-sm btn-danger"><i class="fas fa-trash"></i>Delete</a>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
                <div class="col-md-12">
                    {{-- {{ $menus->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection