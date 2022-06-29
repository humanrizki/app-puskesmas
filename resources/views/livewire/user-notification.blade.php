<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <a href="/notifications" class="relative text-3xl flex items-center">
        <img src="/img/notification.png" alt="" class="w-6">
        @if ($readOrNot == false)
        <span class="flex h-3 w-3">
            <span class="absolute inline-flex rounded-full -top-1 right-1 h-3 w-3 bg-sky-500"></span>
        </span>
        @endif
    </a>
</div>
