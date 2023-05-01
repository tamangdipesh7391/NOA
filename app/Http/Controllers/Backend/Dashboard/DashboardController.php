<?php

namespace App\Http\Controllers\Backend\Dashboard;

use App\Http\Controllers\Backend\Common\BackendController;
use App\Models\User\User;
use Illuminate\Http\Request;

class DashboardController extends BackendController
{

    public function index()
    {
        return view($this->pagePath . 'dashboard.index', $this->data);
    }

    public function registerUserList(Request $request)
    {
        $this->data('userData', User::orderBy('id', 'desc')->get());
        return view($this->pagePath . 'users.index', $this->data);
    }

    public function registerUserListDetails(Request $request)
    {
        $id = $request->criteria;
        $this->data('userData', User::findOrFail($id));
        return view($this->pagePath . 'users.details', $this->data);
    }

    public function voucherStatus(Request $request)
    {
        $id = $request->id;
        $status = $request->voucher_status;
        $user = User::findOrFail($id);
        $user->voucher_status = $status;
        $user->save();
        return redirect()->back()->with('success', 'Status Updated Successfully');
    }

    public function changeUserStatus(Request $request)
    {
        if (!$request->user_id || !$request->status) {
            return redirect()->back()->with('error', 'Please Select User and Status');
        }

        $userId = $request->user_id;
        $status = $request->status;
        $user = User::findOrFail($userId);
        $user->account_status = $status;
        $user->update();
        return "Account Status Updated Successfully";
    }
}
