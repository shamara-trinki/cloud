@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('Customer Deatails') }}</span>
				<a class="btn btn-primary btn-xs ml-auto ajax-modal" data-title="{{ _lang('Add New Customer') }}" href="{{ route('expenses.create') }}"><i class="ti-plus"></i>&nbsp;{{ _lang('Add New Customer') }}</a>
			</div>
			<div class="card-body">
				<table id="expenses_table" class="table table-bordered">
					<thead>
					    <tr>
						    <th>{{ _lang('CustomerCode') }}</th>
						    <th>{{ _lang('CustomerName') }}</th>
						    <th>{{ _lang('Server') }}</th>
						    <th>{{ _lang('No of Users') }}</th>
					
							<!--<th>{{ _lang('CloudStartDate') }}</th>-->
							@if(auth()->user()->user_type === 'admin')
								<th>{{ _lang('StartAmount') }}</th>
							@endif								
							<th>{{ _lang('RenewalDate') }}</th>
							<th>{{ _lang('RenewalMonth') }}</th>
							@if(auth()->user()->user_type === 'admin')
								<th>{{ _lang('RenewalAmount') }}</th>
							@endif						
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection

@section('js-script')
<script>
(function ($) {

	"use strict";

	$('#expenses_table').DataTable({
		processing: true,
		serverSide: true,
		ajax: '{{ url('admin/expenses/get_table_data') }}',
		"columns" : [
			{ data : 'cus_code', name : 'cus_code' },
			{ data : 'cus_name', name : 'cus_name' },
				{
        		data : 'expense_category.name',
        		name : 'expense_category.name',
    			createdCell: function (td, cellData, rowData, row, col) {
    				$(td).css({
    					'color': 'red',
    					'font-weight': '600',
    				});
    			}
		    },
		
			{ data : 'no_of_users', name : 'no_of_users' },
		
// 			{ data : 'cloud_start_date', name : 'cloud_start_date' },
				@if(auth()->user()->user_type === 'admin')
							{ data : 'amount', name : 'amount' },
							@endif
			
			{
			data: 'renew_date',
			name: 'renew_date',
			createdCell: function (td, cellData, rowData, row, col) {
				$(td).css({
					'color': 'red',
					'font-weight': '600',
				});
			}
		},
				{
			data: 'renewal_month',
			name: 'renewal_month',
			createdCell: function (td, cellData, rowData, row, col) {
				$(td).css({
					'color': 'green',
					'font-weight': '600',
				});
			}
		},


				@if(auth()->user()->user_type === 'admin')
							{ data : 'renew_amount', name : 'renew_amount' },
							@endif
			
			{ data : "action", name : "action" },
		],
		responsive: true,
		"bStateSave": true,
		"bAutoWidth":false,
		"ordering": true,
		"order": [[1, "asc"]],
		"language": {
		  // "decimal":        "",
		   "emptyTable":     "{{ _lang('No Data Found') }}",
		   "info":           "{{ _lang('Showing') }} _START_ {{ _lang('to') }} _END_ {{ _lang('of') }} _TOTAL_ {{ _lang('Entries') }}",
		   "infoEmpty":      "{{ _lang('Showing 0 To 0 Of 0 Entries') }}",
		   "infoFiltered":   "(filtered from _MAX_ total entries)",
		   "infoPostFix":    "",
		   "thousands":      ",",
		   "lengthMenu":     "{{ _lang('Show') }} _MENU_ {{ _lang('Entries') }}",
		   "loadingRecords": "{{ _lang('Loading...') }}",
		   "processing":     "{{ _lang('Processing...') }}",
		   "search":         "{{ _lang('Search') }}",
		   "zeroRecords":    "{{ _lang('No matching records found') }}",
		   "paginate": {
			  "first":      "{{ _lang('First') }}",
			  "last":       "{{ _lang('Last') }}",
			  "previous": "<i class='ti-angle-left'></i>",
        	  "next" : "<i class='ti-angle-right'></i>",
		  }
		},
		drawCallback: function () {
			$(".dataTables_paginate > .pagination").addClass("pagination-bordered");
		},

	});
})(jQuery);
</script>
@endsection