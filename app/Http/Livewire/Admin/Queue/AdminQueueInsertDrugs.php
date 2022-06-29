<?php

namespace App\Http\Livewire\Admin\Queue;

use App\Models\Drug;
use App\Models\DrugReport;
use Livewire\Component;

class AdminQueueInsertDrugs extends Component
{
    public $queue;
    public $drugs;
    public $listDrugs;
    public $listDrugsQueueDone;
    public $subPrice;
    public function mount(){
        $this->drugs = Drug::where('polies_id',$this->queue->polies_id)->get();
    }
    public function clickAddDrug($drug, $polies_id,$queue){
        DrugReport::create([
            'queue_id'=>$queue,
            'polies_id'=>$polies_id,
            'drug_id'=>$drug
        ]);
        
    }
    public function clickDeleteDrug($drug,$queue){
        DrugReport::destroy(DrugReport::where([
            'drug_id'=>$drug,
            'queue_id'=>$queue
        ])->first()->id);
    }
    public function render()
    {
        if($this->queue->status == 'done'){
            $this->listDrugsQueueDone = DrugReport::where([
                'queue_id'=>$this->queue->id,
                'polies_id'=>$this->queue->polies_id
            ])->get();
            $this->subPrice = DrugReport::where('queue_id',$this->queue->id)->leftJoin('drugs','drug_reports.drug_id','drugs.id')->sum('price');
        }else{
            $this->listDrugs = array_flip(DrugReport::where([
                'queue_id'=>$this->queue->id,
                'polies_id'=>$this->queue->polies_id
            ])->get()->pluck('drug_id')->toArray());
            $this->subPrice = DrugReport::where('queue_id',$this->queue->id)->leftJoin('drugs','drug_reports.drug_id','drugs.id')->sum('price');
        }
        
        return view('livewire.admin.queue.admin-queue-insert-drugs');
    }
}
