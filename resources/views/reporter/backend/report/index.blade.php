@extends('reporter.layouts.admin_format')

@section('title', '| report')

@section('navhead','report')

@section('content')
	<!-- start content -->
      <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h2 class="card-title float-left">Report</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('reporter.report.store') }}" method="POST">
                            	@csrf
                            	<div class="row">

                            		<div class="input-group mb-6">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect01">Driver</label>
									  </div>
									  <select class="custom-select" id="inputGroupSelect01" name="driver" required>
									    <option selected>Choose...</option>
									   @foreach($drivers as $driver)
									    <option value="{{ $driver->id }}">{{ $driver->plate_no }}</option>
									   @endforeach
									  </select>
									</div>

									<div class="input-group mb-6">
									  <div class="input-group-prepend">
									    <label class="input-group-text" for="inputGroupSelect02">Incident category</label>
									  </div>
									  <select class="custom-select driver_id" id="inputGroupSelect02" name="incident" required>
									    <option selected>Choose...</option>
									   @foreach($incidents as $incident)
									    <option value="{{ $incident->id }}">{{ $incident->category_name }}</option>
									   @endforeach
									  </select>
									</div>

									<div class="input-group md-6">
										<button  type="submit" onclick="hiturl()" class="btn btn-primary pull-right sendsms">Report</button>
                    					<div class="clearfix"></div>
									</div>

                            	</div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- close content-->
@endsection

@section('scripts')

	<script>

		function hiturl(){
			var link = "http://api.mimsms.com/api/sendsms/plain?user=aminul.technext&password=Test12345&sender=DRIVESAFE&SMSText=hello text&GSM=8801780535664";
			window.open(link);	
            
		}

	</script>

@endsection