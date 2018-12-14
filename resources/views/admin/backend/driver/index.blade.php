@extends('admin.layouts.admin_format')

@section('title', '| all Driver')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">All Driver</h2>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class=" text-primary">
                                        <th>
                                            SL
                                        </th>
                                        <th>
                                            Name
                                        </th>
                                        <th>
                                            Mobile
                                        </th>

                                        <th>
                                            Plate No    
                                        </th>                                        

                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                    @foreach($drivers as $driver)
                                        <tr>
                                            <td>
                                                <a href="#">{{ $driver->id }}</a>
                                            </td>
                                            <td>
                                                <a href="#">{{ $driver->name }}</a>
                                            </td>
                                            <td>
                                                <a href="#"> {{ $driver->mobile_number }}</a>
                                            </td>
                                            <td>
                                                <a href="#"> {{ $driver->plate_no }}</a>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.driver.destroy', ['id' => $driver->id]) }}" class="btn btn-danger btn-sm">
                                                    <i class="far fa-trash-alt"></i>
                                                        Delete
                                                    </a> 
                            
                                                    <a href="{{ route('admin.driver.show', ['id' => $driver->id]) }}" class="btn btn-info btn-sm">
                                                        <i class="far fa-question-circle"></i>
                                                        show
                                                    </a>
                                                </div>
                                            </td>

                                        </tr>
                                    @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- close content-->
@endsection

@section('scripts')
@endsection