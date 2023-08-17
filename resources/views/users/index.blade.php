@extends('layouts.master')
@push('styles')
    @livewireStyles
@endpush
@push('scripts')
    @livewireScripts
@endpush
@section('content')
    <div class="container">
        <div>
            <livewire:users-create/>
        </div>
        <div>
            <livewire:users-table/>
        </div>
    </div>
    
@endsection