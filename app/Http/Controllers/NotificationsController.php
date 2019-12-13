<?php

namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    public function showAllNotifications()
    {
        return response()->json(Notifications::all());
    }

    public function showOneNotification($id)
    {
        return response()->json(Notifications::find($id));
    }

    public function create(Request $request)
    {
        $notifications = Notifications::create($request->all());

        return response()->json($notifications, 201);
    }

    public function update($id, Request $request)
    {
        $notifications = Notifications::findOrFail($id);
        $notifications->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        Notifications::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
