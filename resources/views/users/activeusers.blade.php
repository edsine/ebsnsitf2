@extends('layouts.app')

@push('page_css')
    <link href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" rel="stylesheet" />
@endpush

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Users</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-primary float-end" href="{{ route('users.create') }}">
                        Add New
                    </a>
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-3 ">
                    <form method="get" action="" class="navbar-search mr-4 ">
                        <div class="input-group">
                            <input type="text" name="search" value="{{ \Request::get('search', '') }}"
                                class="form-control bg-light border-0 small" placeholder="@lang('Search Users list..')" aria-label="Search"
                                aria-describedby="basic-addon2">

                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">

        @include('flash::message')

        <div class="clearfix"></div>

        <div class="card">
            <div class="container mt-5">
                <ul class="nav nav-tabs">
                  <li class="nav-item">
                    <a class="nav-link active bg-danger" href="#allstaff" data-bS-toggle="tab">All  Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active bg-danger"  href="{{route('pending')}}" data-bS-toggle="tab">Pending Staff</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link text-primary"  href="{{route('approve')}}" data-bS-toggle="tab">Approved Staff</a>
                  </li>
                </ul>
            <div class="tab-content">
            
            <div class="tab-pane fade show active" id="pending">
                <div class="table-responsive">
                <table class="table mt-3">
                  <thead>
                    <tr>
                      <th scope="col">Full Name a</th>
                      <th scope="col">Email</th>
                      <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach ($ausers as $p )                        
                       
                   <tr>
                       <td>{!! $p->first_name.' '.$p->middle_name.' '.$p->last_name !!}</td>
                       <td>{!! $p->email !!}</td>
                       <td  style="width: 120px">
                        
                        {!! Form::open(['route' => ['users.destroy', $p->id], 'method' => 'delete']) !!}
                        <div class='btn-group'>
                            <a href="{{ route('users.show', [$p->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$p->id]) }}"
                               class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>
                            {{-- {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!} --}}
                        </div>
                        {!! Form::close() !!}
                    </td>
                    </tr>
                    @endforeach
                    
                  </tbody>
                </table>
                <div class="card-footer clearfix">
                    <div class="float-right">
                        @include('adminlte-templates::common.paginate', ['records' => $ausers])
                    </div>
                </div>
                  </div>
            </div>
            
            
            
        </div>
    </div>
@endsection
