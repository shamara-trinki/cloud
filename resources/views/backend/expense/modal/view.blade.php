<table class="table table-bordered">
	<tr><td>{{ _lang('Customer Code') }}</td><td>{{ $expense->cus_code }}</td></tr>
	<tr><td>{{ _lang('Customer Name') }}</td><td>{{ $expense->cus_name }}</td></tr>
	<tr><td>{{ _lang('No of Users') }}</td><td>{{ $expense->no_of_users }}</td></tr>
	<tr><td>{{ _lang('Server') }}</td><td>{{ $expense->expense_category->name }}</td></tr>
	<tr><td>{{ _lang('Cloud Start Date') }}</td><td>{{ $expense->cloud_start_date }}</td></tr>
		@if(auth()->user()->user_type === 'admin')
   <tr><td>{{ _lang('Starting Amount') }}</td><td>{{ $expense->amount }}</td></tr>
@endif
	
	<tr><td>{{ _lang('Renewal Date (Annual)') }}</td><td>{{ $expense->renew_date }}</td></tr>
	<tr><td>{{ _lang('Renewal Month (Annual)') }}</td><td>{{ $expense->renewal_month }}</td></tr>
	@if(auth()->user()->user_type === 'admin')
   	<tr><td>{{ _lang('Renewal Amount (Annual)') }}</td><td>{{ $expense->renew_amount }}</td></tr>
@endif

	<tr><td>{{ _lang('Database') }}</td><td>{{ $expense->db_cus }}</td></tr>
	<tr><td>{{ _lang('Note') }}</td><td>{{ $expense->note }}</td></tr>

	<tr><td>{{ _lang('Created By') }}</td><td>{{ $expense->created_by->name }} ({{ $expense->created_at }})</td></tr>
	<tr><td>{{ _lang('Updated By') }}</td><td>{{ $expense->updated_by->name }} ({{ $expense->updated_at }})</td></tr>
</table>

