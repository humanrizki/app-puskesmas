<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <p class="text-2xl font-medium">Daftar obat</p>
    @if ($queue->status == 'done')
        @foreach ($listDrugsQueueDone as $key => $drugQueueDone)
            <div class="flex items-center justify-between border mb-2 p-2 shadow-sm rounded ">
                <div>
                    <p class="">{{ $drugQueueDone->drug->name }} </p>
                    <p class="text-sm text-gray-500">{{'Rp.'.number_format($drugQueueDone->drug->price) }}</p>
                </div>
                <p class="flex items-center justify-center h-[40px] w-[40px] bg-gray-700 text-2xl rounded-full text-white"><i class="fa-regular fa-o"></i></p>
            </div>
        @endforeach
        <div class="flex items-center justify-between border mb-2 p-2 shadow-sm rounded ">
            <div>
                <p class="">Total biaya </p>
                <p class="text-sm text-gray-500">{{'Rp.'.number_format($subPrice) }}</p>
            </div>
            <button type="button" class="bg-blue-400 hover:bg-blue-500 p-2 rounded text-white font-medium shadow">Lunas</button>
        </div>
    @else 
        @foreach ($drugs as $key => $drug)
            <div class="flex items-center justify-between border mb-2 p-2 shadow-sm rounded ">
                <div>
                    <p class="">{{ $drug->name }} </p>
                    <p class="text-sm text-gray-500">{{'Rp.'.number_format($drug->price) }}</p>
                </div>
                @if (isset($listDrugs[$drug->id]))
                <button class="flex items-center justify-center h-[40px] w-[40px] bg-red-500 text-2xl rounded-full text-white" wire:click.prevent="clickDeleteDrug({{ $drug->id }},{{ $queue->id }})"><i class="fa-regular fa-circle-xmark"></i></button>
                @else
                <button class="flex items-center justify-center h-[40px] w-[40px] bg-green-500 text-2xl rounded-full text-white" wire:click.prevent="clickAddDrug({{ $drug->id }}, {{ $queue->polies_id }}, {{ $queue->id }})"><i class="fa-regular fa-circle-check"></i></button>
                @endif
            </div>
        @endforeach
        <div class="flex items-center justify-between border mb-2 p-2 shadow-sm rounded ">
            <div>
                <p class="">Total biaya </p>
                <p class="text-sm text-gray-500">{{'Rp.'.number_format($subPrice) }}</p>
            </div>
            <button class="bg-blue-400 hover:bg-blue-500 p-2 rounded text-white shadow" type="button" data-toggle="modal" data-target="#buyingPrice">Bayar</button>
            <div class="modal fade" id="buyingPrice" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="" method="POST">
                        @csrf
                        <div class="modal-body">
                            <input type="hidden" name="sub_price" wire:model="subPrice">
                            <div  class="flex items-center justify-between border mb-2 p-2 shadow-sm rounded">
                                <p>Total biaya</p>
                                <p>{{ 'Rp.'.number_format($subPrice) }}</p>
                            </div>
                            @if ($queue->user->nomor_bpjs == null)
                            <div class="border mb-2 p-2 shadow-sm rounded">
                                <p>Bayar</p>
                                <input type="number" name="nominal" class="border-2 border-blue-500 w-full rounded p-2">
                            </div>
                            @else
                            <input type="hidden" name="nominal" class="border-2 border-blue-500 w-full rounded p-2" wire:model="subPrice">
                            @endif
                        </div>
                        <div class="modal-footer">
                            <button class="bg-red-400 hover:bg-red-500 p-2 rounded text-white font-medium shadow" type="button" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="bg-blue-400 hover:bg-blue-500 p-2 rounded text-white font-medium shadow">Bayar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

</div>
