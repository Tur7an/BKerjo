<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Company;
use App\Models\Job;
use App\Models\Location;
use App\Models\JobType;
use App\Models\JobCategory;
use App\Models\Education;

use Illuminate\Support\Str;

class SubmitJobController extends Controller
{
    public function create()
    {
        return view('front.pages.pasangloker', [
            'locations' => Location::all(),
            'types' => JobType::all(),
            'categories' => JobCategory::all(),
            'educations' => Education::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'company_name' => 'required|string|max:255',
            'email'        => 'required|email',
            'phone'        => 'required',

            'title'        => 'required|string|max:255',
            'description'  => 'required',

            'location_id'  => 'required|exists:locations,id',
            'job_type_id'  => 'required|exists:job_types,id',
            'category_id'  => 'nullable|exists:job_categories,id',

            'salary_min'   => 'nullable|numeric',
            'salary_max'   => 'nullable|numeric',

            'educations'   => 'required|array',
            'educations.*' => 'exists:educations,id'
        ]);

        // Simpan atau cari company berdasarkan email
        $company = Company::firstOrCreate(
            ['email' => $request->email],
            [
                'name'    => $request->company_name,
                'slug'    => Str::slug($request->company_name),
                'phone'   => $request->phone,
                'website' => $request->website
            ]
        );

        // =======================
        // GENERATE SLUG YANG AMAN
        // =======================
        $baseSlug = Str::slug($request->title);
        $slug = $baseSlug;
        $count = 1;

        while (Job::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $count;
            $count++;
        }

        // Simpan data job
        $job = Job::create([
            'company_id'   => $company->id,
            'location_id'  => $request->location_id,
            'job_type_id'  => $request->job_type_id,
            'category_id'  => $request->category_id,

            'title'        => $request->title,
            'slug'         => $slug,

            'description'  => $request->description,

            'salary_min'   => $request->salary_min,
            'salary_max'   => $request->salary_max,

            'status'       => 'pending'
        ]);

        // Simpan relasi education ke pivot table
        $job->educations()->attach($request->educations);

        return redirect()->back()
            ->with('success', 'Lowongan berhasil dikirim dan menunggu verifikasi admin.');
    }
}
