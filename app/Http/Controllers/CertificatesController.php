<?php

namespace App\Http\Controllers;

use App\Certificates;
use Illuminate\Http\Request;

class CertificatesController extends Controller
{
    public function showAllCertificates()
    {
        return response()->json(Certificates::with('courses', 'skills', 'job_title_id')->get());
    }

    public function showOneCertificate($id)
    {
        return response()->json(Certificates::with('courses', 'skills', 'job_title_id')->find($id));
    }

    public function create(Request $request)
    {
        $certificates = Certificates::create($request->all());

        return response()->json($certificates, 201);
    }

    public function update($id, Request $request)
    {
        $certificates = Certificates::findOrFail($id);
        $certificates->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Certificates::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
