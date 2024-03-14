<?php

namespace App\Observers;

use App\Models\AttendanceModel;

class AttendanceObserver
{
    /**
     * Handle the AttendanceModel "created" event.
     */
    public function creating(AttendanceModel $attendanceModel): void
    {
        //
    }

    /**
     * Handle the AttendanceModel "updated" event.
     */
    public function updated(AttendanceModel $attendanceModel): void
    {
        //
    }

    /**
     * Handle the AttendanceModel "deleted" event.
     */
    public function deleted(AttendanceModel $attendanceModel): void
    {
        //
    }

    /**
     * Handle the AttendanceModel "restored" event.
     */
    public function restored(AttendanceModel $attendanceModel): void
    {
        //
    }

    /**
     * Handle the AttendanceModel "force deleted" event.
     */
    public function forceDeleted(AttendanceModel $attendanceModel): void
    {
        //
    }
}
