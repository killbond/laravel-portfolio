<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;
use Symfony\Component\HttpFoundation\Response;

class FrontController extends Controller
{
    /**
     * Display the home page.
     *
     * @return Response
     */
    public function index()
    {
        $info = DB::table('info')->get();
        $info = array_combine(array_pluck($info, 'alias'), $info);

        $skills = DB::table('skill')
            ->select(DB::raw('`skill`.`id`, `skill_group`.`name` as \'group\', GROUP_CONCAT(`skill` SEPARATOR \', \') as skills'))
            ->join('skill_group', 'skill_group.id', '=', 'skill.group_id')
            ->groupBy('group_id')
            ->orderBy('id', SORT_DESC)
            ->get();

        $projects = Project::all();

        return View::make('front.index', compact(['info', 'skills', 'projects']));
    }
}
