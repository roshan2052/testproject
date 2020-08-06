<?php

namespace App\Http\Controllers\Backend\Supersite;

use App\Http\Controllers\Backend\BackendBaseController;
use App\Models\Backend\Test;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Illuminate\Http\Request;

class TestController extends BackendBaseController
{
    protected $base_route  = 'backend.supersite.test';
    protected $view_path   = 'backend.supersite.test';
    protected $panel       = 'Test';
    protected $folder_path;
    protected $model;
    protected $folder_name = 'test';

    public function __construct(Test $test)
    {
        $this->model = $test;
    }

    public function index()
    {
        $data = [];
        $data['rows'] = $this->model->latest()->active()->get();

        return view($this->loadDataToView($this->view_path.'.index'),compact('data'));

    }

    public function create(){

        $data = [];
        return view($this->loadDataToView($this->view_path.'.create'),compact('data'));

    }

    public function store(Request $request){

        $request->request->add(['created_by' => auth()->user()->id]);
        try {
            $row = $this->model::create($request->all());
            $request->session()->flash($this->success_message, $this->panel.'Created Successfully');
        } catch (\Exception $e) {
            $request->session()->flash($this->error_message, $this->panel.'Create Failed');
        }
        return redirect()->route($this->base_route.'.index');

    }

    public function show($id){

        $data = [];
        $data['row'] = $this->model->findOrFail($id);
        return view(parent::loadDataToView($this->view_path.'.show'),compact('data'));
    }

    public function edit(Request $request, $id){

        $data = [];
        $data['row'] = $this->model->findOrFail($id);
        return view(parent::loadDataToView($this->view_path.'.edit'),compact('data'));

    }

    public function update(Request $request, $id){

        $row = $this->model::findOrFail($id);
        $request->request->add(['updated_by' => auth()->user()->id]);

        try {
            $row->update($request->all());
            $request->session()->flash($this->success_message, $this->panel.'Updated Successfully');
        } catch (\Exception $e) {
            $request->session()->flash($this->error_message, $this->panel.'Update Failed');
        }
        return redirect()->route($this->base_route.'.index');

    }

    public function destroy(Request $request, $id){

        $row = $this->model::findOrFail($id);
        try {
            $row->delete();
        } catch (\Exception $e) {
            return response(['success' => false, 'has_child' => true], 200);
        }
        $request->session()->flash($this->success_message, $this->panel.' Successfully Deleted');

        return response(['success' => true, 'has_child' => false], 200);

    }
}
