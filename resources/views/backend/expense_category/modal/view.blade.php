<table class="table table-bordered">
	<tr><td>{{ _lang('Server Code') }}</td><td>{{ $expensecategory->server_id  }}</td></tr>
	<tr><td>{{ _lang('Server Name') }}</td><td>{{ $expensecategory->name }}</td></tr>
	<tr><td>{{ _lang('Ip Address') }}</td><td>{{ $expensecategory->ip_address }}</td></tr>
	<tr><td>{{ _lang('RAM') }}</td><td>{{ $expensecategory->ram }}</td></tr>
	<tr><td>{{ _lang('Storage') }}</td><td>{{ $expensecategory->storage }}</td></tr>
	<tr><td>{{ _lang('RDB Port') }}</td><td>{{ $expensecategory->rdb_port }}</td></tr>
	<tr><td>{{ _lang('Web Port') }}</td><td>{{ $expensecategory->web_port }}</td></tr>
	<tr><td>{{ _lang('Paid Date') }}</td><td>{{ $expensecategory->paid_date }}</td></tr>
	<tr><td>{{ _lang('Billing Cycle') }}</td><td>{{ $expensecategory->billing_cycle }}</td></tr>
@if(auth()->user()->user_type === 'admin')
    <tr>
        <td>{{ _lang('Renewal Amount') }}</td>
        <td>{{$expensecategory->renewal_amt, currency() }}</td>
    </tr>
@endif
	<tr><td>{{ _lang('Renewal Date') }}</td><td>{{ $expensecategory->renewal_date }}</td></tr>
	<tr><td>{{ _lang('Email') }}</td><td>{{ $expensecategory->email }}</td></tr>
	<tr><td>{{ _lang('Email Password') }}</td><td>{{ $expensecategory->email_password }}</td></tr>
	<tr><td>{{ _lang('Note') }}</td><td>{{ $expensecategory->description }}</td></tr>
</table>
