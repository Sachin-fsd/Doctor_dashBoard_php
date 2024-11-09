<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function save(Request $request)
    {
        // dd($request->all());
        // Validation to ensure required fields are present
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'timing' => 'required|string|max:255',
        ]);

        // Creating new appointment
        $patient = new Appointment([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'timing' => $request->get('timing'),
        ]);

        // Save the appointment to the database
        $patient->save();

        // Return back to the previous page
        return redirect()->back()->with('success', 'Appointment saved successfully!');
    }
}
