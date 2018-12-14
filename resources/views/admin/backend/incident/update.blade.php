@extends('admin.layouts.admin_format')

@section('title', '| update Incident')

@section('navhead', 'update')

@section('content')
	<!-- Start content -->			
<div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-8">
              <div class="card">
                <div class="card-header card-header-primary">
                  <h4 class="card-title">UPDATE INCIDENT</h4>
                </div>
                <div class="card-body">

                  <form method="POST" action="{{ route('admin.incident.update', ['id' => $incident->id ]) }}">
                    @csrf
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Incident Type</label>
                          <input type="text" class="form-control" name="category_name" value="{{ $incident->category_name }}">
                        </div>
                      </div>

                      <div class="col-md-6">
                        <div class="form-group">
                          <label class="bmd-label-floating">Demerit Point</label>
                          <input type="text" class="form-control" name="point" value="{{ $incident->point }}">
                        </div>
                      </div>
                      

                      
                    </div>
                    <button type="submit" class="btn btn-primary pull-right">UPDATE INCIDENT</button>
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