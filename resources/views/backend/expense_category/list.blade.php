@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-lg-12">
		<div class="card no-export">
		    <div class="card-header d-flex align-items-center">
				<span class="panel-title">{{ _lang('Server Details') }}</span>
				<a class="btn btn-primary btn-xs ml-auto ajax-modal" data-title="{{ _lang('Add New Server') }}" href="{{ route('expense_categories.create') }}"><i class="ti-plus"></i>&nbsp;{{ _lang('Add New Server') }}</a>
			</div>
			<div class="card-body">
				<table id="expense_categories_table" class="table table-bordered data-table">
					<thead>
					    <tr>
						    <th>{{ _lang('Server Code') }}</th>
						    <th>{{ _lang('Server Name') }}</th>
						    <th>{{ _lang('IP Address') }}</th>
							<th>{{ _lang('RAM') }}</th>
							<th>{{ _lang('Paid Date') }}</th>
							<th>{{ _lang('Billing Cycle') }}</th>
							@if(auth()->user()->user_type === 'admin')
								<th>{{ _lang('Renewal Amount') }}</th>
							@endif						
							<th>{{ _lang('Renewal Date') }}</th>
							<th class="text-center">{{ _lang('Action') }}</th>
					    </tr>
					</thead>
					<tbody>
					    @foreach($expensecategorys as $expensecategory)
					    <tr data-id="row_{{ $expensecategory->id }}">
							<td class='server_id'>{{ $expensecategory->server_id }}</td>
							<td class='name'>{{ $expensecategory->name }}</td>
							<td class='ip_address'>{{ $expensecategory->ip_address }}</td>
							<td class='ram'>{{ $expensecategory->ram }}</td>
							<td class='paid_date'>{{ $expensecategory->paid_date }}</td>
							<td class='billing_cycle'>{{ $expensecategory->billing_cycle }}</td>
							@if(auth()->user()->user_type === 'admin')
								<td class="renewal_amt">{{ $expensecategory->renewal_amt }}</td>
							@endif

				
							<td class='renewal_date' style="color: red; font-family:Arial, Helvetica, sans-serif; font-weight:bold;">{{ \Carbon\Carbon::parse($expensecategory->renewal_date)->format('j F Y') }}
</td>
						
							
							<td class="text-center">
								<span class="dropdown">
								  {{-- <button class="btn btn-primary dropdown-toggle btn-xs" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								  {{ _lang('Action') }}
								  
								  </button> --}}
								  <form action="{{ action('ExpenseCategoryController@destroy', $expensecategory['id']) }}" method="post" style="display: inline;">
										{{ csrf_field() }}
										<input name="_method" type="hidden" value="DELETE">

										<div class="dropdown">
											<button class="btn btn-primary btn-xs dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												{{ _lang('Action') }}
											</button>
											<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
												<!-- Edit Button -->
												<a href="{{ action('ExpenseCategoryController@edit', $expensecategory['id']) }}" 
												data-title="{{ _lang('Update Server Details') }}" 
												class="dropdown-item dropdown-edit ajax-modal custom-hover-edit">
													<i class="ti-pencil-alt"></i>&nbsp;{{ _lang('Edit') }}
												</a>

												<!-- View Button -->
												<a href="{{ action('ExpenseCategoryController@show', $expensecategory['id']) }}" 
												data-title="{{ _lang('View Server Details') }}" 
												class="dropdown-item dropdown-view ajax-modal custom-hover-view">
													<i class="ti-eye"></i>&nbsp;{{ _lang('View') }}
												</a>

												<!-- Delete Button -->
												<button type="submit" class="dropdown-item btn-remove custom-hover-delete" onclick="return confirm('{{ _lang('Are you sure you want to delete this item?') }}')">
													<i class="ti-trash"></i>&nbsp;{{ _lang('Delete') }}
												</button>
											</div>
										</div>
									</form>

								</span>
							</td>
					    </tr>
					    @endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

@endsection