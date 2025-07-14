@php
$deposit_requests = request_count('deposit_requests', true);
$withdraw_requests = request_count('withdraw_requests', true);
$member_requests = request_count('member_requests', true);
$pending_loans = request_count('pending_loans', true);
@endphp

<li>
	<a href="{{ route('dashboard.index') }}"><i class="ti-dashboard"></i><span>{{ _lang('Dashboard') }}</span></a>
</li>



<li>
	<a href="javascript: void(0);"><i class="fas fa-money-bill-wave"></i><span>{{ _lang('Servers & Customers') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
	<ul class="nav-second-level" aria-expanded="false">
		<li class="nav-item"><a class="nav-link" href="{{ route('expenses.index') }}">{{ _lang('All Customers') }}</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ route('expense_categories.index') }}">{{ _lang('All Servers') }}</a></li>
	</ul>
</li>





<li>
	<a href="javascript: void(0);"><i class="ti-user"></i><span>{{ _lang('User Management') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
	<ul class="nav-second-level" aria-expanded="false">
		<li class="nav-item"><a class="nav-link" href="{{ route('users.index') }}">{{ _lang('All Users') }}</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ route('roles.index') }}">{{ _lang('User Roles') }}</a></li>
		<li class="nav-item"><a class="nav-link" href="{{ route('permission.index') }}">{{ _lang('Access Control') }}</a></li>
	</ul>
</li>





<li>
	<a href="javascript: void(0);"><i class="ti-settings"></i><span>{{ _lang('System Settings') }}</span><span class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
	<ul class="nav-second-level" aria-expanded="false">
		<li class="nav-item"><a class="nav-link" href="{{ route('settings.update_settings') }}">{{ _lang('General Settings') }}</a></li>
<!--<li class="nav-item"><a class="nav-link" href="{{ route('currency.index') }}">{{ _lang('Supported Currency') }}</a></li>-->
		<!--<li class="nav-item"><a class="nav-link" href="{{ route('notification_templates.index') }}">{{ _lang('Notification Templates') }}</a></li>-->
		<li class="nav-item"><a class="nav-link" href="{{ route('database_backups.list') }}">{{ _lang('Database Backup') }}</a></li>
	</ul>
</li>