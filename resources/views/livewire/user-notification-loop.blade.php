<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="bg-gradient-to-r from-indigo-500 via-rose-400 to-indigo-500 shadow-md select-none">
        <h1 class="text-2xl text-center font-medium text-white p-3">Notifications</h1>
    </div>
    <div class="xl:w-3/5 lg:w-3/5 md:w-3/5 sm:w-3/5 w-11/12 mx-auto my-3 select-none">
        <div class="w-full h-screen">
            @if ($notification->count() > 0)
                @foreach ($notification as $n)
                <a href="/notifications/{{ $n->slug }}" class="block border-2 border-blue-500 shadow-lg rounded-md">
                    <div class="content-notification w-full block @if($n->read == 1) bg-gray-50 @endif last:border-0 p-2">
                        <div class="content-profile-text flex gap-x-4">
                            <div class="content-text">
                                <p class="text-lg font-medium">{{ '@'.$n->user->username }}</p>
                                <p class="ml-1">{{ $n->message }}</p>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            @else
            <div class="flex h-full w-full justify-center items-center">
                <div class="notif-blank">
                    <p class="text-center font-semibold text-2xl">Belum ada notifikasi!</p>
                </div>
            </div>
            @endif
            @if ($cantAdd)
            @else
            <div class="xl:w-3/5 lg:w-3/5 md:w-3/5 w-full mx-auto my-2">
                <button type="button" wire:click="addLimitNotif" class="block mx-auto text-4xl">
                    <div class="icon-content flex items-center justify-center hover:bg-blue-300 hover:text-white transition w-full p-2 bg-blue-50 rounded-full">
                        <img src="/img/plus.png" alt="" class="w-12">
                    </div>
                </button>
            </div>
            @endif
            <a href="/queue"><div class="text-center m-2 p-2 bg-gradient-to-r from-indigo-500 via-rose-400 to-indigo-500 rounded-lg text-2xl font-semibold text-white">Back</div></a>
        </div>
    </div>
</div>
