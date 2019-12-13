<?php

namespace App\Http\Controllers;

use App\NotificationsRecipient;
use Illuminate\Http\Request;

class NotificationsRecipientController extends Controller
{
    public function showAllNotificationsRecipients()
    {
        return response()->json(NotificationsRecipient::all());
    }

    public function showOneNotificationsRecipient($id)
    {
        return response()->json(NotificationsRecipient::find($id));
    }

    public function create(Request $request)
    {
        $notificationsRecipient = NotificationsRecipient::create($request->all());

        return response()->json($notificationsRecipient, 201);
    }

    public function update($id, Request $request)
    {
        $notificationsRecipient = NotificationsRecipient::findOrFail($id);
        $notificationsRecipient->update($request->all());

        return response()->json('Updated Successfully', 200);
    }

    public function delete($id)
    {
        NotificationsRecipient::findOrFail($id)->delete();
        return response('Deleted Successfully', 200);
    }
}
