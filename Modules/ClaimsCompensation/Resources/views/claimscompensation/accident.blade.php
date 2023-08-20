<table class="table">
    <thead>
      <tr>
        <th>EMPLOYER </th>
        <th>EMPLOYEE</th>
        <th>ACCIDENT DATE</th>
        <th>ACCIDENT TIME</th>
        <th>ACCIDENT TOWN</th>
        <th>ACCIDENT REPORT DATE</th>
        <th>ACCIDENT REPORT TIME</th>
        <th>EMPLOYEE EARNING</th>
        <th>EMPLOYEE TASK</th>
        <th>ACTION </th>

      </tr>
    </thead>
    <tbody>
        @foreach ($accidentclaim as $item)
            
        <tr>
          <td>{{$item->employer_id ? $item->employer_id : 'no name'}}</td>
          <td>{{$item->employee_id ? $item->employee_id : 'no employee'}}</td>
          <td>{{$item->accident_date}}</td>
          <td>{{$item->accident_time}}</td>
          <td>{{$item->accident_town}}</td>
          <td>{{$item->accident_report_date}}</td>
          <td>{{$item->accident_time}}</td>
          <td>{{$item->employee_earning}}</td>
          <td>{{$item->employee_task}}</td>
          <td>
            <a class="btn btn-primary" href="">the view</a>
          </td>
        </tr>
        @endforeach
      
      
    </tbody>
  </table>