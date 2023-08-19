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
                @include('financeadmin')
            @elseif(auth()->user()->staff->department_id == 16)
                @include('claimsadmin')
            @elseif(auth()->user()->staff->department_id == 9)
                @include('complianceadmin')
            @elseif(auth()->user()->staff->department_id == 5)
                @include('itmadmin')
            @else
                @include('defaultdashboard')
            @endif
        @else
            @include('defaultdashboard')
        @endif 
    </div>
    @endsection
    