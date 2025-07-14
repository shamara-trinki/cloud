@extends('layouts.app')

@section('content')
<div class="row">
	<!--<div class="col-xl-3 col-md-6">-->
	<!--	<div class="card mb-4 primary-card dashboard-card">-->
	<!--		<div class="card-body">-->
	<!--			<div class="d-flex">-->
	<!--				<div class="flex-grow-1">-->
	<!--					<h5>{{ _lang('Total Members') }}</h5>-->
	<!--					<h4 class="pt-1 mb-0"><b>{{ $total_customer }}</b></h4>-->
	<!--				</div>-->
	<!--				<div>-->
	<!--					<a href="{{ route('members.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->
    <div class="col-xl-4 col-md-6">
		<div class="card mb-4 success-card dashboard-card">
			<div class="card-body">
				<div class="d-flex">
					<div class="flex-grow-1">
						<h5>{{ _lang('Total Server') }}</h5>
						<h4 class="pt-1 mb-0"><b>{{ $total_customer }}</b></h4>
					</div>
					<div>
						<a href="{{ route('expense_categories.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-4 col-md-6">
		<div class="card mb-4 primary-card dashboard-card">
			<div class="card-body">
				<div class="d-flex">
					<div class="flex-grow-1">
						<h5>{{ _lang('Total Customer') }}</h5>
						<h4 class="pt-1 mb-0"><b>{{ $total_customers }}</b></h4>
					</div>
						<div>
						<a href="{{ route('expenses.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--<div class="col-xl-4 col-md-6">-->
	<!--	<div class="card mb-4 success-card dashboard-card">-->
	<!--		<div class="card-body">-->
	<!--			<div class="d-flex">-->
	<!--				<div class="flex-grow-1">-->
	<!--					<h5>{{ _lang('Total Server') }}</h5>-->
	<!--					<h4 class="pt-1 mb-0"><b>{{ request_count('deposit_requests') }}</b></h4>-->
	<!--				</div>-->
	<!--				<div>-->
	<!--					<a href="{{ route('expense_categories.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<!--<div class="col-xl-4 col-md-6">-->
	<!--	<div class="card mb-4 warning-card dashboard-card">-->
	<!--		<div class="card-body">-->
	<!--			<div class="d-flex">-->
	<!--				<div class="flex-grow-1">-->
	<!--					<h5>{{ _lang('Total Customer') }}</h5>-->
	<!--					<h4 class="pt-1 mb-0"><b>{{ request_count('withdraw_requests') }}</b></h4>-->
	<!--				</div>-->
	<!--				<div>-->
	<!--					<a href="{{ route('expenses.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>-->
	<!--				</div>-->
	<!--			</div>-->
	<!--		</div>-->
	<!--	</div>-->
	<!--</div>-->

	<div class="col-xl-4 col-md-6">
		<div class="card mb-4 danger-card dashboard-card">
			<div class="card-body">
				<div class="d-flex">
					<div class="flex-grow-1">
						<h5>{{ _lang('Total User') }}</h5>
						<h4 class="pt-1 mb-0"><b>{{ $total_user }}</b></h4>
					</div>
					<div>
						<a href="{{ route('users.index') }}"><i class="ti-arrow-right"></i>&nbsp;{{ _lang('View') }}</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-4 col-sm-5 mb-4">
		<div class="card h-100">
			<div class="card-header d-flex align-items-center">
				<span>{{ _lang('Server Overview') }}</span>
			</div>
			<div class="card-body">
				<canvas id="expenseOverview"></canvas>
			</div>
		</div>
	</div>

	
</div>


@endsection

@section('js-script')
<script src="{{ asset('public/backend/plugins/chartJs/chart.min.js') }}"></script>
<script src="{{ asset('public/backend/assets/js/dashboard.js?v=1.1') }}"></script>
@endsection
