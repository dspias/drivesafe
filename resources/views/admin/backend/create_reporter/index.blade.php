@extends('admin.layouts.admin_format')

@section('title', '| all reporter')

@section('navhead', '')

@section('content')
	<!-- Start content -->			
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">All Reporter</h2>
                            <a href="{{ route('admin.create_reporter.create') }}"><button class="btn btn-info float-right">Add New Reporter</button></a>
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
                                            GeoLocation
                                        </th>
                                        <th>
                                            ACTION
                                        </th>

                                    </thead>
                                    <tbody>
                                    @foreach($reporters as $reporter)
                                        <tr>
                                            <td>
                                                <a href="#">{{ $reporter->id }}</a>
                                            </td>
                                            <td>
                                                <a href="#">{{ $reporter->name }}</a>
                                            </td>
                                            <td>
                                                <a href="#"> al;sfjls</a>
                                            </td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <a href="{{ route('admin.create_reporter.destroy', ['id' => $reporter->id]) }}" class="btn btn-danger btn-sm">
                                                    <i class="far fa-trash-alt"></i>
                                                        Delete
                                                    </a> 
                            
                                                    <a href="{{ route('admin.create_reporter.show', ['id' => $reporter->id]) }}" class="btn btn-info btn-sm">
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