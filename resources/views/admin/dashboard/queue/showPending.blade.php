@extends('admin.layouts.app')
@section('content')
    <div class="d-sm-flex align-items-center mb-4">
        @if ($breadcrumb)
        <h1 class="h3 mb-0 text-gray-800">{{Breadcrumbs::view('admin.partials.breadcrumbs',$breadcrumb)}}</h1>
        @endif
    </div>
    @if (session()->has('successToTransactionQueue'))
    <p>{{ session('successToTransactionQueue') }}</p>
    @endif
    <livewire:admin-queue-datatables :queues="$queues"/>
@endsection