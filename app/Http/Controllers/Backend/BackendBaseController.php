<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Intervention\Image\Facades\Image;
class BackendBaseController extends Controller
{
    protected $success_message = 'success_message';
    protected $error_message = 'error_message';

    protected function loadDataToView($view_path){
        View::composer($view_path, function ($view) {
            $view->with('base_route', $this->base_route);
            $view->with('view_path', $this->view_path);
            if (isset($this->report_path)){
                $view->with('report_path', $this->report_path);
            }
            if (isset($this->page_method)){
                $view->with('page_method', $this->page_method);
            }
            if (isset($this->page_title)){
                $view->with('page_title', $this->page_title);
            }
            if (isset($this->custom_panel)){
                $view->with('panel',$this->custom_panel);
            } else {
                $view->with('panel',$this->panel);
            }
            $view->with('folder_name', property_exists($this, 'folder_name' )?$this->folder_name:'');

            if (isset($this->image_path)){
                $view->with('image_path', $this->image_path);
            }
        });

        return $view_path;

    }

    /**
     * @param Request $request
     * @param         $imageName
     * @return null|string
     */
    protected function uploadImage(Request $request, $imageName) {
        if ($image = $request->file($imageName)) {
            $newImageName = date('Y-m-d')."/".$image->getClientOriginalName();
            if ($image->move($this->image_path, $newImageName)) {
                return $newImageName;
            } else {
                return null;
            }
        }
    }

    /**
     * @param Request $request
     * @param         $fileName
     * @return null|string
     */
    protected function uploadFile(Request $request, $fileName) {
        if ($file = $request->file($fileName)) {
            $newFileName = date('Y-m-d')."/".$file->getClientOriginalName();
            if ($file->move($this->file_path, $newFileName)) {
                return $newFileName;
            } else {
                return null;
            }
        }
    }

}
