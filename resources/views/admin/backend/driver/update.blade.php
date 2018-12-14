@extends('admin.layouts.admin_format')

@section('title', '| update Driver')

@section('navhead', 'update')

@section('content')
	<!-- Start content -->			
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">UPDATE Driver</h4>
                </div>
                <div class="card-body">

                  <form method="POST" action="{{ route('admin.driver.update', ['id' => $driver->id ]) }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Driver name</label>
                          <input type="text" class="form-control" name="name" value="{{ $driver->name }}">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Mobile Number</label>
                          <input type="text" class="form-control" name="mobile_number" value="{{ $driver->mobile_number }}">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Owner Name</label>
                          <input type="text" class="form-control" name="vehicle_owner_name" value="{{ $driver->vehicle_owner_name }}">
                        </div>
                      </div>
                      
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Owner Mobile Number</label>
                          <input type="text" class="form-control" name="vehicle_owner_mobile_number" value="{{ $driver->vehicle_owner_mobile_number }}">
                        </div>
                      </div>

                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">UPDATE DRIVER</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              
            </div>
          </div>
        </div>
      </div>
      <!--==============add modal=====================-->

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">change your profile pictue</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div>
      
      <!--==============close modal================-->
    <!-- close content-->
@endsection

@section('scripts')
@endsection