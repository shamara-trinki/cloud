@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-8 offset-lg-2">
        <form method="post" id="permissions" class="validate" autocomplete="off" action="{{ route('permission.store') }}">
            @csrf
			<div class="row">
                <div class="col-md-12">
                    <div class="card">
						<div class="card-header panel-title">
							{{ _lang('Access Control') }}
						</div>
                        <div class="card-body">
                            <div class="col-12">
                                <div class="form-group">
                                    <label class="control-label">{{ _lang('Select Role') }}</label>
                                    <select class="form-control select2" id="user_role" name="role_id" required>
                                        <option value="">{{ _lang('Select One') }}</option>
                                        {{ create_option("roles", "id", "name", $role_id) }}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

			@if($role_id != '')

            <div class="card mt-4">
				<div class="card mt-4">
				<div class="card-header panel-title">
					Permission Control
				</div>
                <div class="card-body">
                    <div class="row">
						<div class="col-md-12">
							<div id="accordion">
								{{-- Dashboard --}}
								<div class="card mb-3">
									<div class="card-header">
										<h5>
											<a class="card-link" data-toggle="collapse" href="#collapse-DashboardController">
												<i class="fas fa-long-arrow-alt-right"></i>
												
												
												 Dashboard
											</a>
										</h5>
									</div>
									<div id="collapse-DashboardController" class="collapse">
										<div class="card-body">
											<table class="table">
																								<tbody><tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.total_customer_widget" id="customCheck2" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck2">dashboard.total_customer_widget</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.deposit_requests_widget" id="customCheck3" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck3">dashboard.deposit_requests_widget</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.withdraw_requests_widget" id="customCheck4" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck4">dashboard.withdraw_requests_widget</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.loan_requests_widget" id="customCheck5" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck5">dashboard.loan_requests_widget</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.expense_overview_widget" id="customCheck6" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck6">dashboard.expense_overview_widget</label>
															</div>
														</div>
													</td>
												</tr>
												<!--																								<tr>-->
												<!--	<td>-->
												<!--		<div class="checkbox">-->
												<!--			<div class="custom-control custom-checkbox">-->
												<!--				<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.deposit_withdraw_analytics" id="customCheck7" data-parsley-multiple="permissions">-->
												<!--				<label class="custom-control-label" for="customCheck7">dashboard.deposit_withdraw_analytics</label>-->
												<!--			</div>-->
												<!--		</div>-->
												<!--	</td>-->
												<!--</tr>-->
												<!--																								<tr>-->
												<!--	<td>-->
												<!--		<div class="checkbox">-->
												<!--			<div class="custom-control custom-checkbox">-->
												<!--				<input type="checkbox" class="custom-control-input" name="permissions[]" value="dashboard.recent_transaction_widget" id="customCheck8" data-parsley-multiple="permissions">-->
												<!--				<label class="custom-control-label" for="customCheck8">dashboard.recent_transaction_widget</label>-->
												<!--			</div>-->
												<!--		</div>-->
												<!--	</td>-->
												<!--</tr>-->
																																			</tbody></table>
											</div>
									</div>
								</div>

							

								{{-- Expense --}}
								<div class="card mb-3">
									<div class="card-header">
										<h5>
											<a class="card-link" data-toggle="collapse" href="#collapse-ExpenseController">
												<i class="fas fa-long-arrow-alt-right"></i>
												
												
												 Servers & Customers
											</a>
										</h5>
									</div>
									<div id="collapse-ExpenseController" class="collapse">
										<div class="card-body">
											<table class="table">
																								<tbody><tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expenses.index" id="customCheck40" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck40">customers.list</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expenses.create" id="customCheck41" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck41">customers.create</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expenses.show" id="customCheck42" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck42">customers.show</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expenses.edit" id="customCheck43" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck43">customers.edit</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expense_categories.index" id="customCheck44" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck44">server.show</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expense_categories.create" id="customCheck45" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck45">server.create</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expense_categories.edit" id="customCheck46" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck46">server.edit</label>
															</div>
														</div>
													</td>
												</tr>
																																				<tr>
													<td>
														<div class="checkbox">
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" name="permissions[]" value="expense_categories.show" id="customCheck47" data-parsley-multiple="permissions">
																<label class="custom-control-label" for="customCheck47">server.view</label>
															</div>
														</div>
													</td>
												</tr>
																																			
																																			</tbody></table>
										</div>
									</div>
								</div>

							
							</div>
						</div>


                        <div class="col-md-12 mt-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary"><i class="ti-check-box"></i>&nbsp;{{ _lang('Save Permission') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
			@endif
        </form>
    </div>
</div>
@endsection