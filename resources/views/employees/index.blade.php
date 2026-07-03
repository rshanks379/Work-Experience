@include('layouts.app.header')

<nav>
    <a href="{{ route('employee.index') }}">employees</a>

    <hr>
    <!-- We must ship. - Taylor Otwell -->
</nav>
<div>
     
    
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>dob</th>
            <th>hobby</th>
            <th>gender</th>
            <th>tea</th>
            <th>coffee</th>
            <th>other</th>
            <th>positions</th>
            <th>actions</th>
        </tr>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->getDob() }}</td>
                <td>{{ $employee->hobby}}</td>
                <td>{{ $employee->gender ? 'male' : 'female'}}</td>
                <td>{{ $employee->tea}}</td>
                <td>{{ $employee->coffee}}</td>
                <td>{{ $employee->other}}</td>
                <td>{{ $employee->position?->name }}</td>
                <td><a href="{{ route('employee.edit', $employee->id) }}">edit</td>
            </tr>
        @endforeach
    </table>
</div>

@include('layouts.app.footer')