<?php

namespace App\Http\Controllers\Admin\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Queue;
use App\Models\Transaction;
use Illuminate\Http\Request;

class AdminDashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware('adminguest:admin');
    }
    public function index(){
        return view('admin.dashboard.index',[
            'title'=>'Dashboard admin',
            'breadcrumb'=>'dashboard',
            'pending_data'=>Queue::where('status','pending')->get()->count()
        ]);
    }
    public function queue(){
        return view('admin.dashboard.queue.index',[
            'title'=>'All list queue',
            'breadcrumb'=>'dashboard.queue'
        ]);
    }
    public function showQueue(Queue $queue){
        return view('admin.dashboard.queue.show',[
            'title'=>'Show detail queue',
            'breadcrumb'=>'dashboard.queue.show',
            'queue'=>$queue
        ]);
    }
    public function showQueuePending(){
        return view('admin.dashboard.queue.showPending',[
            'title'=>'Show detail queue',
            'breadcrumb'=>'dashboard.queue.pending',
            'queues'=>Queue::where('status','pending')->get()
        ]);
    }
    public function registerToApotect(Queue $queue,Request $request){
        $validatedData = $request->validate([
            'nominal'=>['required'],
            'sub_price'=>['required']
        ]);
        Transaction::create([
            'queue_id'=>$queue->id,
            'nominal'=>$validatedData['nominal'],
            'sub_price'=>$validatedData['sub_price'],
            'change'=>$validatedData['nominal']-$validatedData['sub_price'],
            'status'=>'paid'
        ]);
        Queue::find($queue->id)->update(['status'=>'done']);
        return redirect('/dashboard/queue')->with('successToTransactionQueue','antrian selesai untuk nomor '.$queue->queueing_number.' dipoly '.$queue->polies->name.' dan dihari '.$queue->operations_day->day);
    }
}
