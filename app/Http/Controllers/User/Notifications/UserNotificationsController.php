<?php

namespace App\Http\Controllers\User\Notifications;

use App\Http\Controllers\Controller;
use App\Models\DrugReport;
use App\Models\Notification;
use App\Models\Queue;
use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    //
    public function index(){
        return view('user.notifications.index',[
            'title'=>'Notifications page'
        ]);
    }
    public function show(Notification $notification){
        if(Queue::find($notification->data_type_id)->status == 'done'){
            return view('user.notifications.show',[
                'title'=>'Show notification page',
                'notification'=>$notification,
                'queue'=>Queue::find($notification->data_type_id),
                'listDrugs'=>DrugReport::where('queue_id',Queue::find($notification->data_type_id)->id)->get()
            ]);
        } else {
            return view('user.notifications.show',[
                'title'=>'Show notification page',
                'notification'=>$notification,
                'queue'=>Queue::find($notification->data_type_id)
            ]);
        }

    }
}
