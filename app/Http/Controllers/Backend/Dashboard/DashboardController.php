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
}
