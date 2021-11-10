@extends('admin.layouts.app')

@section('content')

	<div class="row clearfix page_header">
		<div class="col-6">
			<h2> Products </h2>		
		</div>
		<div class="col-6 text-right">
			<a class="btn btn-info" href="{{ route('registrations.create') }}"> <i class="fa fa-plus"></i> New Registration </a>
		</div>
	</div>

	  <div class="card shadow mb-4">
	    <div class="card-header py-3">
	      <h6 class="m-0 font-weight-bold text-primary"> Sales of <strong></strong></h6>
	    </div>
	    
	    <div class="card-body">
	    	<div class="table-responsive">
		        <table class="table table-striped table-sm" id="dataTable" width="100%" cellspacing="0">
		          <thead>
		            <tr>
		              <th class="d-none d-sm-table-cell">No</th>
		              <th class="d-none d-sm-table-cell">Name</th>
		              <th>Date</th>
		              <th class="d-none d-sm-table-cell">account_no</th>
		              <th class="text-right">phone_number</th>
		              <th class="text-right">account_types</th>
		            </tr>
		          </thead>
		          
		          <tbody>
		          	<?php 
		          		$totalItem = 0;
		          		$grandTotal = 0;
		          	?>
	          	@foreach ($registrations as $registration)
		            <tr>
		              <td colspan="1" style="border: 1px solid black;"> {{ ++$i }}</td>
                      <td colspan="1" style="border: 1px solid black;"> {{ $registration->name }} </td>
		              <td colspan="1" style="border: 1px solid black;"> {{ $registration->account_no }}  </td>
		              <td colspan="1" style="border: 1px solid black;"> {{ $registration->phone_number }} </td>
		            </tr>
	            @endforeach
		          </tbody>

		          <tfoot>
				  <tr>
		              <th class="d-none d-sm-table-cell">No</th>
		              <th class="d-none d-sm-table-cell">Name</th>
		              <th>Date</th>
		              <th class="d-none d-sm-table-cell">account_no</th>
		              <th class="text-right">phone_number</th>
		              <th class="text-right">account_types</th>
		            </tr>
		          </tfoot>

		        </table>
		      </div>
	    </div>

  	</div>
  	


@stop