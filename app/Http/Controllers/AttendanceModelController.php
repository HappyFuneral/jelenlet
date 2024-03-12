<?php

namespace App\Http\Controllers;

use App\Models\AttendanceModel;
use App\Http\Requests\StoreAttendanceModelRequest;
use App\Http\Requests\UpdateAttendanceModelRequest;
use Illuminate\Support\Facades\Auth;

class AttendanceModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $attendanceModels = AttendanceModel::all();
        return view('attendanceModels.index',['attendanceModels' => $attendanceModels]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('attendanceModels.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAttendanceModelRequest $request)
    {      
        $attendanceModel = AttendanceModel::create($request->all());
        $attendanceModel->paid = false;
        $attendanceModel->name = \Illuminate\Support\Facades\Auth::user()->name;
        $attendanceModel->updated_at = now();
        $attendanceModel->created_at = now();
        $attendanceModel->update();
        return redirect()->route("attendanceModels.index")->with("success", "Attendance created successfully.");
    }

    /**
     * Display the specified resource.
     */
    public function show(AttendanceModel $attendanceModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AttendanceModel $attendanceModel)
    {
        if (Auth::user()->cannot('update', AttendanceModel::class)) {
            abort(403);
        }
        return view('attendanceModels.edit', ['attendanceModel' => $attendanceModel]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAttendanceModelRequest $request, AttendanceModel $attendanceModel)
    {
        if (Auth::user()->cannot('update', AttendanceModel::class)) {
            abort(403);
        }
        $attendanceModel->paid = $request->paid == 'on' ? 1 : 0;
        $attendanceModel->cause = $request->cause;
        $attendanceModel->updated_at = now();
        $attendanceModel->update();
        return redirect()->route("attendanceModels.index")->with("success", "Attendance updated successfully.");
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AttendanceModel $attendanceModel)
    {
        $attendanceModel->delete();
        return back()->with('message', 'Attendance was deleted Successfully');
    
    }
}
