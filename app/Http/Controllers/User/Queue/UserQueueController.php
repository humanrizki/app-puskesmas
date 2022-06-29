<?php

namespace App\Http\Controllers\User\Queue;

use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Operation;
use App\Models\OperationsDay;
use App\Models\Queue;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Http\Request;

class UserQueueController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(){
        return view('user.queue.index',[
            'title'=>'Antrean'
        ]);
    }
    public function create(){
        return view('user.queue.add',[
            'title'=>'Create Antrean'
        ]);
    }
    public function store(Request $request){
        $validatedData = $request->validate([
            'polies_id'=>['required'],
            'doctor_id'=>['required'],
            'operations_day_id'=>['required'],
        ]);
        $queue = Queue::select('*')->get();
        $payment = (is_null(auth()->user()->nomor_bpjs)) ? 'cash' : 'bpjs';
        if($queue->count() == 0){
            $queueInstance = Queue::create([
                'user_id'=>auth()->user()->id,
                'polies_id'=>$validatedData['polies_id'],
                'doctor_id'=>$validatedData['doctor_id'],
                'operations_day_id'=>$validatedData['operations_day_id'],
                'date_visit'=>Carbon::createFromFormat('Y-m-l', Carbon::now()->year.'-'.Carbon::now()->month.'-'.OperationsDay::find($validatedData['operations_day_id'])->day)->format('Y-m-d'),
                'open_at'=>Carbon::createFromFormat('H:i:s','07:00:00')->format('H:i:s'),
                'closed_at'=>Carbon::createFromFormat('H:i:s','13:00:00')->format('H:i:s'),
                'queueing_number'=>1,
                'payment'=>$payment,
                'slug'=>Factory::create('id_ID')->uuid()
            ]);
            Notification::create([
                'user_id'=>auth()->user()->id,
                'type'=>'queue',
                'data_type_id'=>$queueInstance->id,
                'slug'=>Factory::create()->uuid(),
                'read'=>0,
                'message'=>'Anda telah membuat antrian, tunggu hingga dipanggil!'
            ]);
            return redirect('/queue')->with('successRegister','Anda sudah berhasil membuat antrean, tunggu hingga tepat pada tanggalnya untuk datang ke puskesmas!');
        } else {
            if(is_null(Queue::where('user_id',auth()->user()->id)->first()) || Queue::where('user_id',auth()->user()->id)->orderBy('queueing_number','desc')->first()->status == 'done'){
                if(Queue::where([
                    'polies_id'=>$validatedData['polies_id'],
                    'operations_day_id'=>$validatedData['operations_day_id'],
                ])->get()->count() != 0){
                    $nomorQueue = Queue::where([
                        'polies_id'=>$validatedData['polies_id'],
                        'operations_day_id'=>$validatedData['operations_day_id'],
                    ])->max('queueing_number');
                    $queueInstance = Queue::create([
                        'user_id'=>auth()->user()->id,
                        'polies_id'=>$validatedData['polies_id'],
                        'doctor_id'=>$validatedData['doctor_id'],
                        'operations_day_id'=>$validatedData['operations_day_id'],
                        'date_visit'=>Carbon::createFromFormat('Y-m-l', Carbon::now()->year.'-'.Carbon::now()->month.'-'.OperationsDay::find($validatedData['operations_day_id'])->day)->format('Y-m-d'),
                        'open_at'=>Carbon::createFromFormat('H:i:s','07:00:00')->format('H:i:s'),
                        'closed_at'=>Carbon::createFromFormat('H:i:s','13:00:00')->format('H:i:s'),
                        'queueing_number'=>++$nomorQueue,
                        'payment'=>$payment,
                        'slug'=>Factory::create('id_ID')->uuid()
                    ]);
                    Notification::create([
                        'user_id'=>auth()->user()->id,
                        'type'=>'queue',
                        'data_type_id'=>$queueInstance->id,
                        'slug'=>Factory::create()->uuid(),
                        'read'=>0,
                        'message'=>'Anda telah membuat antrian, tunggu hingga dipanggil!'
                    ]);
                    return redirect('/queue')->with('successRegister','Anda sudah berhasil membuat antrean, tunggu hingga tepat pada tanggalnya untuk datang ke puskesmas!');
                } else {
                    $queueInstance = Queue::create([
                        'user_id'=>auth()->user()->id,
                        'polies_id'=>$validatedData['polies_id'],
                        'doctor_id'=>$validatedData['doctor_id'],
                        'operations_day_id'=>$validatedData['operations_day_id'],
                        'date_visit'=>Carbon::createFromFormat('Y-m-l', Carbon::now()->year.'-'.Carbon::now()->month.'-'.OperationsDay::find($validatedData['operations_day_id'])->day)->format('Y-m-d'),
                        'open_at'=>Carbon::createFromFormat('H:i:s','07:00:00')->format('H:i:s'),
                        'closed_at'=>Carbon::createFromFormat('H:i:s','13:00:00')->format('H:i:s'),
                        'queueing_number'=>1,
                        'payment'=>$payment,
                        'slug'=>Factory::create('id_ID')->uuid()
                    ]);
                    Notification::create([
                        'user_id'=>auth()->user()->id,
                        'type'=>'queue',
                        'data_type_id'=>$queueInstance->id,
                        'slug'=>Factory::create()->uuid(),
                        'read'=>0,
                        'message'=>'Anda telah membuat antrian, tunggu hingga dipanggil!'
                    ]);
                    return redirect('/queue')->with('successRegister','Anda sudah berhasil membuat antrean, tunggu hingga tepat pada tanggalnya untuk datang ke puskesmas!');
                }
            } else {
                return redirect('/queue')->with('failedRegister','Anda sudah membuat sebuah antrian!');
            }
        }
    }
}
