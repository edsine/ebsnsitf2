<div class="container mt-5">
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
            <a class="nav-link text-primary active" id="tab1-tab" href="#allstaff" data-bs-toggle="tab" role="tab" aria-controls="tab1" aria-selected="true">APPROVED STAFF</a>
        </li>


        <li class="nav-item" role="presentation">
            <a class="nav-link " id="tab2-tab" href="#pending" role="tab" data-bs-toggle="tab" aria-controls="tab2" aria-selected="false"> PENDING STAFF </a>
        </li>
        {{-- <li class="nav-item">
            <a class="nav-link text-primary" href="#approve" data-bs-toggle="tab">Approved Staff</a>
        </li> --}}
    </ul>

    <div class="tab-content" id="myTabContent" >

        <!-- All Staff Table -->
        <div class="tab-pane fade show active" id="allstaff"   role="tabpanel" aria-labelledby="tab1-tab">
            <div class="table-responsive">
                <table class="table mt-3 table-striped table-hover table-bordered" id="mytable1">
                    <thead>
                        <tr>
                            <th scope="col">Full Name</th>
                            <th scope="col">Email</th>
                            <th scope="col"> Role</th>
                            <th scope="col"> Department</th>
                            <th scope="col">Branch</th>
                            {{-- <th scope="col">Approval Status</th> --}}
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($users as $p)
                        <tr>
                            <td>{!! $p->first_name.' '.$p->middle_name.' '.$p->last_name !!}</td>
                            <td>{!! $p->email !!}</td>
                        
                           <td> @if ($p->role)
                            {!! $p->role !!} 
                           @else
                           <span>No role yet</span>
                           @endif
                        
                        </td>
                           
                            <td>{!! $p->department_unit !!}</td>
                            <td>{!! $p->branch_name !!}</td>
                            {{-- <td>
                                 @if (isset($p->status) && $p->status == 1)
                                    <span class="btn btn-sm btn-success"><i class="fas fa-check "></i></span>
                                @else
                                    <span class="btn btn-sm btn-danger"><i class="fas fa-times "></i></i></span>
                                @endif
                            </td> --}}
                            <td style="width: 120px">
                                {!! Form::open(['route' => ['users.destroy', $p->id], 'method' => 'delete']) !!}
                                <div class='btn-group' id="aa">
                                    <a href="{{ route('users.show', [$p->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-eye"></i>
                                    </a>
                                    <a href="{{ route('users.edit', [$p->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="far fa-edit"></i>
                                    </a>
                                    {{-- <i class="click-icon fas fa-chevron-down"></i> --}}
                                    {{-- <a href="{{ route('myedit', [$p->id]) }}" class='btn btn-default btn-xs'>
                                        <i class="fas fa-toggle-on text-bg-secondary" title="change status" ></i>
                                    </a> --}}
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
                        @include('adminlte-templates::common.paginate', ['records' => $users])
                    </div>
                </div>
            </div>
        </div>


<!-- PENDING Table -->
<div class="tab-pane fade " id="pending" role="tabpanel" aria-labelledby="tab2-tab">
    <div class="table-responsive">
        <table class="table mt-3 table-striped table-hover table-bordered" id="mytable2">
            <thead>
                <tr>
                    <th scope="col">Full Name</th>
                    <th scope="col">Email</th>
                    <th scope="col"> Role</th>
                    <th scope="col"> Department</th>
                    <th scope="col">Branch</th>
                    {{-- <th scope="col">Approval Status</th> --}}
                    <th scope="col">Actions</th>
                </tr>
            </thead>
           
            <tbody>
                @foreach ($norole as $p)
                <tr>
                    <td>{!! $p->first_name.' '.$p->middle_name.' '.$p->last_name !!}</td>
                    <td>{!! $p->email !!}</td>
                
                   {{-- <td> @if ($p->role)
                    {!! $p->role !!} 
                   @else
                   <span>No role yet</span>
                   @endif
                
                </td> --}}
                <td >Not yet assigned a role</td>
                   
                    <td>{!! $p->department_unit !!}</td>
                    <td>{!! $p->branch_name !!}</td>
                    {{-- <td>
                         @if (isset($p->status) && $p->status == 1)
                            <span class="btn btn-sm btn-success"><i class="fas fa-check "></i></span>
                        @else
                            <span class="btn btn-sm btn-danger"><i class="fas fa-times "></i></i></span>
                        @endif
                    </td> --}}
                    <td style="width: 120px">
                        {!! Form::open(['route' => ['users.destroy', $p->id], 'method' => 'delete']) !!}
                        <div class='btn-group' >
                            <a href="{{ route('users.show', [$p->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-eye"></i>
                            </a>
                            <a href="{{ route('users.edit', [$p->id]) }}" class='btn btn-default btn-xs'>
                                <i class="far fa-edit"></i>
                            </a>

                            {{-- <a href="{{ route('myedit', [$p->id]) }}" class='btn btn-default btn-xs'>
                                <i class="fas fa-toggle-on text-bg-secondary" title="change status" ></i>
                            </a> --}}
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
                @include('adminlte-templates::common.paginate', ['records' => $norole])
            </div>
        </div>
    </div>
</div>

<script>

$(document).ready(function() {
    $('#mytable1').DataTable(); 
    $('#mytable2').DataTable(); 
});
// </script>

        
    </div>
</div>




