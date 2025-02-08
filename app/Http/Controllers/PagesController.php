<?php

namespace App\Http\Controllers;

use App\Models\Career;
use App\Models\Course;
use App\Models\Placement;
use Illuminate\Http\Request;
use App\Models\CourseCategory;
use App\Models\JobApplication;

class PagesController extends Controller
{
    public function index() {
        $categorycards = CourseCategory::latest()->take(4)->get();
        return view('static_pages.index')->with([
            'categorycards' => $categorycards,
        ]);
    }

    public function courses() {
        $courses = Course::all();
        $categories = CourseCategory::all();
        return view('static_pages.courses')->with([
            'courses' => $courses,
            'categories' => $categories,
        ]);
    }
    public function corporateTraining() {
        $course = Course::where('slug', 'corporate-training')->firstOrFail();
        return view('static_pages.course-details')->with([
            'course' => $course,
            'recent' => []
        ]);
    }

    public function coursesByCategory($cat) {
        $category = CourseCategory::findOrFail($cat);
        $courses = Course::where('course_category_id', $category->id)->get();
        return view('static_pages.coursesByCategory')->with([
            'courses' => $courses,
            'category' => $category,
        ]);
    }

    public function courseDetails(Request $request, $slug) {
        $course = Course::where('slug', $slug)->firstOrFail();

        //$request->session()->put('recent', $course);

        $recent =Course::latest()->take(4)->get();

        return view('static_pages.course-details')->with([
            'course' => $course,
            'recent' => $recent
        ]);
    }

    public function careers() {
        $careers = Career::all();
        $application_count = JobApplication::count();
        return view('static_pages.careers')->with([
            'careers' => $careers,
            'application_count' => $application_count,
        ]);
    }

    public function careerDetail($id) {
        $career = Career::findOrFail($id);

        return view('static_pages.career-detail')->with([
            'career' => $career,
        ]);
    }

    public function placements() {
        $placements = Placement::all();
        
        return view('static_pages.placements')->with([
            'placements' => $placements,
        ]);
    }

    public function about() {
        return view('static_pages.about');
    }

    public function contact() {
        return view('static_pages.contact');
    }
}
