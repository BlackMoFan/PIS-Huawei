<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReportedCase;

class ReportedCaseController extends Controller
{
    public function index() {
        $enquiries = ReportedCase::all();
        return view('enquiries.index', compact('enquiries'));
    }

    public function changeStatus($id) {
        $enquiry = ReportedCase::find($id);
        $enquiry->pending = false;
        $enquiry->save();

        return redirect()->route('enquiries.index');
    }
}
