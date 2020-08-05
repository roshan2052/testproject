<?php

namespace App\Http\Controllers\Backend\Supersite;

use App\Http\Controllers\Backend\BackendBaseController;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;

class DashboardController extends BackendBaseController
{
    protected $base_route  = 'backend.supersite.dashboard.';
    protected $view_path   = 'backend.supersite.dashboard';
    protected $panel       = 'Dashboard';
    protected $folder_path;
    protected $folder_name = 'dashboard';
    protected $page_title, $page_method;

    /**
     * Display a listing of the resource.
     *
     * @return Factory|View
     */
    public function index()
    {
        $this->page_method = 'index';
        $this->page_title  = 'Index';
        $data = [];

        return view($this->loadDataToView($this->view_path.'.index'),compact('data'));
    }
}
