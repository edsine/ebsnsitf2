@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        {{-- Start::Sweet-alert --}}
        @include('flash::message')
        {{-- end::Sweet-alert --}}
        <!--begin::Row-->
        @if (auth()->user()->staff != null)
            @if(auth()->user()->staff->department_id == 2)
                @include('layouts.hradmin')
            @elseif(auth()->user()->staff->department_id == 6)
                @include('layouts.financeadmin')
            @elseif(auth()->user()->staff->department_id == 16)
                @include('layouts.claimsadmin')
            @else
                @include('layouts.atpdashboard')
            @endif
        @else
            @include('layouts.atpdashboard')

        @endif 
    </div>
    @endsection
    