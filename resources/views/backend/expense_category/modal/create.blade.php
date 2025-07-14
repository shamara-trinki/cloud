<link href="{{ asset('public/backend/plugins/bootstrap-colorpicker/bootstrap-colorpicker.min.css') }}" rel="stylesheet">

<form method="post" class="ajax-screen-submit" autocomplete="off" action="{{ route('expense_categories.store') }}" enctype="multipart/form-data">
	{{ csrf_field() }}
	<div class="row px-2">
	   <div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Server Code') }}</label>						
				<input type="text" class="form-control" name="server_id" value="{{ old('server_id') }}" required>
			</div>
		</div>
	    <div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Server Name') }}</label>						
				<input type="text" class="form-control" name="name" value="{{ old('name') }}" required>
			</div>
		</div>
	    <div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Ip Address') }}</label>						
				<input type="text" class="form-control" name="ip_address" value="{{ old('ip_address') }}" >
			</div>
		</div>
	    <div class="col-md-3">
			<div class="form-group">
				<label class="control-label">{{ _lang('RAM') }}</label>						
				<input type="text" class="form-control" name="ram" value="{{ old('ram') }}">
			</div>
		</div>
	    <div class="col-md-3">
			<div class="form-group">
				<label class="control-label">{{ _lang('Storage') }}</label>						
				<input type="text" class="form-control" name="storage" value="{{ old('storage') }}" >
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('RDB Port') }}</label>						
				<input type="number" class="form-control" name="rdb_port" value="{{ old('rdb_port') }}" >
			</div>
		</div>
	    <div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Web Port') }}</label>						
				<input type="number" class="form-control" name="web_port" value="{{ old('web_port') }}" >
			</div>
		</div>
	    <div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Acronis Backup with GB') }}</label>						
				<input type="text" class="form-control" name="ac_backup" value="{{ old('ac_backup') }}" >
			</div>
		</div>
 		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Paid Date') }}</label>						
				<input type="date" class="form-control" name="paid_date" value="{{ old('paid_date') }}" >
			</div>
		</div>
		 <div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Billing Cycle') }}</label>						
				<input type="text" class="form-control" name="billing_cycle" value="{{ old('billing_cycle') }}" >
			</div>
		</div>
 		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Renewal Amount') }}</label>						
				<input type="text" class="form-control" name="renewal_amt" value="{{ old('renewal_amt') }}" >
			</div>
		</div>
 		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Renewal Date') }}</label>						
				<input type="date" class="form-control" name="renewal_date" value="{{ old('renewal_date') }}" >
			</div>
		</div>
		

		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Email') }}</label>						
				<input type="email" class="form-control" name="email" value="{{ old('email') }}">
			</div>
		</div>
				<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Email Password') }}</label>						
				<input type="password" class="form-control" name="email_password" value="{{ old('email_password') }}" >
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label">{{ _lang('Note') }}</label>						
				<textarea class="form-control" name="description">{{ old('description') }}</textarea>
			</div>
		</div>

		<div class="col-md-12">
		    <div class="form-group">
			    <button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Save') }}</button>
		    </div>
		</div>
	</div>
</form>

<script src="{{ asset('public/backend/plugins/bootstrap-colorpicker/bootstrap-colorpicker.js') }}"></script>
