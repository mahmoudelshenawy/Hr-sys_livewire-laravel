<?php

namespace App\Http\Controllers\HR\Master;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\EmploymentStatus;

class HRMasterCollectorController extends Controller
{
    public function indexOfEmploymentStatus()
    {
        return view('hr.master.employment-status.index');
    }
    public function indexOfSkills()
    {
        return view('hr.master.skills.index');
    }
    public function indexOfEducations()
    {
        return view('hr.master.educations.index');
    }
    public function indexOfLanguages()
    {
        return view('hr.master.languages.index');
    }
    public function indexOfCertifications()
    {
        return view('hr.master.certifications.index');
    }
    public function indexOfBanks()
    {
        return view('hr.master.banks.index');
    }
    public function indexOfSponsors()
    {
        return view('hr.master.sponsors.index');
    }
    public function indexOfInsurrance()
    {
        return view('hr.master.insurrance_companies.index');
    }
}
