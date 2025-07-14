<?php

namespace App\Http\Controllers;

use App\Models\ExpenseCategory;
use Illuminate\Http\Request;
use Validator;

class ExpenseCategoryController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        date_default_timezone_set(get_option('timezone', 'Asia/Dhaka'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        $expensecategorys = ExpenseCategory::all()->sortBy("server_id");
        return view('backend.expense_category.list', compact('expensecategorys'));
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $expensecategory = ExpenseCategory::find($id);
        if (!$request->ajax()) {
            return back();
        } else {
            return view('backend.expense_category.modal.view', compact('expensecategory', 'id'));
        }
        // $expensecategory = ExpenseCategory::withoutGlobalScopes()->find($id);
        // if (!$request->ajax()) {
        //     return back();
        // } else {
        //     return view('backend.expense_category.modal.view', compact('expense_category', 'id'));
        // }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request) {
        if (!$request->ajax()) {
            return back();
        } else {
            return view('backend.expense_category.modal.create');
        }
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'server_id' => 'required',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('expense_categories.create')
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $expensecategory              = new ExpenseCategory();
        $expensecategory->server_id       = $request->input('server_id');
        $expensecategory->name        = $request->input('name');
        $expensecategory->ip_address       = $request->input('ip_address');
        $expensecategory->ram = $request->input('ram');
        $expensecategory->storage = $request->input('storage');
        $expensecategory->rdb_port = $request->input('rdb_port');
        $expensecategory->web_port = $request->input('web_port');
        $expensecategory->ac_backup = $request->input('ac_backup');
        $expensecategory->paid_date = $request->input('paid_date');
        $expensecategory->billing_cycle = $request->input('billing_cycle');
        $expensecategory->renewal_amt = $request->input('renewal_amt');
        $expensecategory->renewal_date = $request->input('renewal_date');
        $expensecategory->email = $request->input('email');
        $expensecategory->email_password = $request->input('email_password');
        $expensecategory->description = $request->input('description');
    
        $expensecategory->save();

        $expensecategory->color = '<div class="rounded-circle color-circle" style="background:'. $expensecategory->color .'"></div>';

        if (!$request->ajax()) {
            return redirect()->route('expense_categories.create')->with('success', _lang('Saved Successfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'store', 'message' => _lang('Saved Successfully'), 'data' => $expensecategory, 'table' => '#expense_categories_table']);
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id) {
        $expensecategory = ExpenseCategory::find($id);
        if (!$request->ajax()) {
            return back();
        } else {
            return view('backend.expense_category.modal.edit', compact('expensecategory', 'id'));
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        $validator = Validator::make($request->all(), [
            'name'  => 'required',
            'server_id' => 'required',
        ]);

        if ($validator->fails()) {
            if ($request->ajax()) {
                return response()->json(['result' => 'error', 'message' => $validator->errors()->all()]);
            } else {
                return redirect()->route('expense_categories.edit', $id)
                    ->withErrors($validator)
                    ->withInput();
            }
        }

        $expensecategory              = ExpenseCategory::find($id);
        $expensecategory->server_id       = $request->input('server_id');
        $expensecategory->name        = $request->input('name');
        $expensecategory->ip_address       = $request->input('ip_address');
        $expensecategory->ram = $request->input('ram');
        $expensecategory->storage = $request->input('storage');
        $expensecategory->rdb_port = $request->input('rdb_port');
        $expensecategory->web_port = $request->input('web_port');
        $expensecategory->ac_backup = $request->input('ac_backup');
        $expensecategory->paid_date = $request->input('paid_date');
        $expensecategory->billing_cycle = $request->input('billing_cycle');
        $expensecategory->renewal_amt = $request->input('renewal_amt');
        $expensecategory->renewal_date = $request->input('renewal_date');
        $expensecategory->email = $request->input('email');
        $expensecategory->email_password = $request->input('email_password');
        $expensecategory->description = $request->input('description');

        $expensecategory->save();

        $expensecategory->color = '<div class="rounded-circle color-circle" style="background:'. $expensecategory->color .'"></div>';

        if (!$request->ajax()) {
            return redirect()->route('expense_categories.index')->with('success', _lang('Updated Successfully'));
        } else {
            return response()->json(['result' => 'success', 'action' => 'update', 'message' => _lang('Updated Successfully'), 'data' => $expensecategory, 'table' => '#expense_categories_table']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $expensecategory = ExpenseCategory::find($id);
        $expensecategory->delete();
        return redirect()->route('expense_categories.index')->with('success', _lang('Deleted Successfully'));
    }
}