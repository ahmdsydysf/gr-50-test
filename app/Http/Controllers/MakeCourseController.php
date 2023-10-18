<?php

namespace App\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Http\Request;

class MakeCourseController extends Controller
{
    public function create()
    {
        return view('requestCourse');
    }

    public function store(CourseRequest $request)
    {
        $request->validated();

        echo "your request is send success";
    }
}
