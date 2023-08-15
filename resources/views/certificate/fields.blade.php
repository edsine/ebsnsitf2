<div class="card-body p-5">
    <div class="table-responsive">
        <table class="table table-striped" id="certificate">
            <thead>
                <tr>
                    <th>EMPLOYER NAME</th>
                    <th>PAYMENT FEE </th>
                    <th>PROCESSING STATUS</th>
                    <th>PAYMENT STATUS</th>
                    <th>BRANCH </th>
                    <th>APPLICATION LETTER </th>
                    <th>PAYMENT</th>
            
               
                </tr>
            </thead>
            <tbody>
           
                @foreach ($certificate as $atp)
                <tr>
                    <td>{{ $atp->employer_id }}</td>
                    <td>{{ $atp->payment_fee }}</td>
                    <td>{{ $atp->processing_status }}</td>
                    <td>
                        {{$atp->branch_id}}
                    </td>
                    <td>
                        {{$atp->application_letter}}
                    </td>
                    <td>
                        {{$atp->payment_id}}
                    </td>
                    <!-- Add more table data cells as needed -->
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#certificate').DataTable();
    });
</script>