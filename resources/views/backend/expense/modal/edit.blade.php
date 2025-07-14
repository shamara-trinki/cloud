<form method="post" class="ajax-screen-submit" autocomplete="off" action="{{ action('ExpenseController@update', $id) }}" enctype="multipart/form-data">
	{{ csrf_field()}}
	<input name="_method" type="hidden" value="PATCH">
	<div class="row px-2">
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Customer Code') }}</label>						
				<input type="text" class="form-control" name="cus_code" value="{{ $expense->cus_code }}"required>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Customer Name') }}</label>						
				<input type="text" class="form-control" name="cus_name" value="{{ $expense->cus_name }}"required>
			</div>
		</div>

		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label">{{ _lang('Server') }}</label>						
				<select class="form-control auto-select select2" data-selected="{{ $expense->expense_category_id }}" name="expense_category_id"  required>
					<option value="">{{ _lang('Select One') }}</option>
					{{ create_option('expense_categories','id','name',$expense->expense_category_id) }}
				</select>
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('No of Users') }}</label>						
				<input type="number" class="form-control" name="no_of_users" value="{{ $expense->no_of_users }}">
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Cloud Start Date') }}</label>						
				<input type="date" class="form-control" name="cloud_start_date" value="{{ $expense->cloud_start_date }}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Starting Amount') }}</label>	
				<div class="input-group mb-3">
					<!--<div class="input-group-prepend">-->
					<!--	<span class="input-group-text" id="amount-addon">{{ currency(get_base_currency()) }}</span>-->
					<!--</div>-->
					<input type="text" class="form-control" name="amount" value="{{ $expense->amount}}" aria-describedby="amount-addon" >
				</div>
			</div>
		</div>

		<div class="col-md-4">
			<div class="form-group">
				<label class="control-label">{{ _lang('Renewal Date (Annual)') }}</label>						
				<input type="date" class="form-control" name="renew_date" value="{{ $expense->renew_date }}">
			</div>
		</div>
		<div class="col-md-4">
			<div class="form-group">
			    	<label class="control-label">{{ _lang('Renewal Month (Annual)') }}</label>					
				<select class="form-control auto-select" data-selected="{{ $expense->renewal_month}}" name="renewal_month" >
					<option value="">{{ _lang('Select One') }}</option>
        					<option value="January">{{ _lang('January') }}</option>
        					<option value="February">{{ _lang('February') }}</option>
        					<option value="March">{{ _lang('March') }}</option>
        					<option value="Apirl">{{ _lang('Apirl') }}</option>
        					<option value="May">{{ _lang('May') }}</option>
        					<option value="June">{{ _lang('June') }}</option>
        					<option value="July">{{ _lang('July') }}</option>
        					<option value="August">{{ _lang('August') }}</option>
        					<option value="September">{{ _lang('September') }}</option>
        					<option value="October">{{ _lang('October') }}</option>
        					<option value="November">{{ _lang('November') }}</option>
        					<option value="December">{{ _lang('December') }}</option>
				</select>
								
				
			</div>
		</div>
		<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Renewal Amount (Annual)') }}</label>	
				<div class="input-group mb-3">
					<!--<div class="input-group-prepend">-->
					<!--	<span class="input-group-text" id="amount-addon">{{ currency(get_base_currency()) }}</span>-->
					<!--</div>-->
					<input type="text" class="form-control" name="renew_amount" value="{{ $expense->renew_amount}}" aria-describedby="amount-addon" >
				</div>
			</div>
		</div>
	
			<div class="col-md-6">
			<div class="form-group">
				<label class="control-label">{{ _lang('Database') }}</label>						
				<select class="form-control auto-select" data-selected="{{ $expense->db_cus}}" name="db_cus" >
					<option value="">{{ _lang('Select One') }}</option>
					<option value="Access">{{ _lang('Access') }}</option>
					<option value="SQL">{{ _lang('SQL') }}</option>
				</select>
			</div>
		</div>
		<div class="col-md-12">
			<div class="form-group">
				<label class="control-label">{{ _lang('Note') }}</label>						
				<textarea class="form-control" name="note">{{ $expense->note }}</textarea>
			</div>
		</div>

		<div class="form-group">
		    <div class="col-md-12">
			    <button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Update') }}</button>
		    </div>
		</div>
	</div>
</form>

