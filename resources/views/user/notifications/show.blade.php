<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <h1 class="text-2xl w-full font-medium text-white shadow p-3 bg-gradient-to-r from-indigo-500 via-rose-400 to-indigo-500 shadow-md text-center">{{$notification->message }}</h1>
    <div class="xl:w-3/5 lg:w-3/5 md:w-3/5 sm:w-3/5 w-11/12 mx-auto p-2 select-none">
        <div class="shadow p-2">
            <div class="flex flex-wrap">
                <div class=" w-full h-[300px] mb-4 shadow rounded flex items-center justify-center border-2 border-yellow-500">
                    <div class="kotak-content">
                        <h1 class="text-center text-6xl">{{ $queue->queueing_number }}</h1>
                        <p class="text-2xl">{{ $queue->user->name }}</p>
                    </div>
                </div>
                <div class=" w-full h-[300px] mx-auto flex items-center">
                    <div class="kotak-content w-full">
                        <p class="mb-2 p-2 shadow-sm rounded border-2 border-yellow-500">Poly : {{ $queue->polies->name }}</p>
                        <p class="mb-2 p-2 shadow-sm rounded border-2 border-yellow-500">Dokter : {{ $queue->doctor->name }}</p>
                        <p class="mb-2 p-2 shadow-sm rounded border-2 border-yellow-500">Jam : {{ $queue->open_at.'-'.$queue->closed_at }}</p>
                        @if ($queue->status == 'pending')
                        <p class="mb-2 p-2 shadow-sm rounded border-2 border-yellow-500">Status :  <span class="text-yellow-400">{{ $queue->status }}</span></p>
                        @else
                        <p class="mb-2 p-2 shadow-sm rounded border-2 border-yellow-500">Status :  <span class="text-blue-400">{{ $queue->status }}</span></p>
                        @endif
                        <p class="border-2 border-yellow-500 mb-2 p-2 shadow-sm rounded">Pembayaran : {{ $queue->payment }}</p>
                        <p class="border-2 border-yellow-500 mb-2 p-2 shadow-sm rounded">Tanggal : {{ \Carbon\Carbon::parse($queue->date_visit)->format('Y/m/d').' '.$queue->operations_day->day }}</p>
                    </div>
                </div>
                @if ($queue->status == 'done')
                    <div class=" w-full h-[300px] mx-auto flex items-center">
                    </div>
                @endif
            </div>
            <a href="/queue"><div class="text-center m-2 p-2 bg-gradient-to-r from-indigo-500 via-rose-400 to-indigo-500 rounded-lg text-2xl font-semibold text-white">Back</div></a>
        </div>
    </div>
</body>
</html>
