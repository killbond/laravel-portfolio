<?php

namespace App\Http\Controllers;


use App\Http\Requests;
use App\Models\Project;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    private $validator;

    /**
     * @return mixed
     */
    public function create()
    {
        $input = Input::all();

        if ($this->valid($input)) {

            $data = array_merge(Input::except(['image', '_token']), [
                'img' => $this->upload()
            ]);

            if(Project::create($data)) {
                Session::flash('success', 'Project added successfully');
            } else {
                Session::flash('error', 'Occurred unknown error');
            }
        }
        return Redirect::to('/')->withInput()->withErrors($this->validator);
    }

    /**
     * @return mixed
     */
    public function update()
    {
        $input = Input::all();
        $project = Project::find(Route::input('id'));
        if($this->valid($input)) {
            $data = Input::except(['image', '_token']);
            if(Input::file('image')) {
                $data['img'] = $this->upload();
            }

            foreach($data as $key => $value) {
                $project->$key = $value;
            }

            $project->save();
            return null;
        } else {
            return Response::json($this->validator->errors()->all(), 500);
        }
    }

    private function valid($data)
    {
        $rules = [
            'description' => 'required|string|min:3|max:255',
            'technology' => 'required|string|min:3|max:255',
            'role' => 'required|string|min:3|max:128',
        ];

        if(Route::getCurrentRoute()->getAction()['as'] == 'project.update') {
            $rules['name'] = 'required|string|min:3|max:64|unique:project,name,' . Route::input('id');
        } else {
            $rules['name'] = 'required|string|min:3|max:64|unique:project,name';
        }

        if(Input::file('image') || Route::getCurrentRoute()->getAction()['as'] == 'project.create') {
            $rules['image'] = 'required|image|mimes:jpeg,bmp,png';
        }

        $this->validator = Validator::make($data, $rules);
        return !$this->validator->fails();
    }

    private function upload()
    {
        $extension = Input::file('image')->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        Input::file('image')->move('uploads', $fileName);
        return 'uploads/' . $fileName;
    }
}
