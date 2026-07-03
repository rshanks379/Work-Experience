@php
    $genderMale = '';
    $genderFemale = '';

    if (isset($employee) && $employee->gender) {
        $genderMale = ' checked="checked"';
    } elseif (isset($employee) && !$employee->gender) {
        $genderFemale = ' checked="checked"';
    }

    
@endphp
<nav>
    <a href="{{ route('employee.index') }}">employees</a>

    <hr>
    <!-- We must ship. - Taylor Otwell -->
</nav>
<div>
    <form actions="{{ route('employee.update', $employee->id ?? 0)}}" method="post">

        <label for="name">name:</label>
        <input type="text" id="name" name="name" value="{{ $employee->name ?? "" }}"><br><br>
      
        <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob" value="{{ $employee->getRawOriginal('dob') ?? "" }}"><br><br>

        <label for="hobby">Hobbies:</label>
        <input name="hobby" id="hobby" value="{{  $employee->hobby ?? "" }}">
        <small>Such as cars, music, drinking, cooking, football</small>
        <br><br>
                            
        <label for="gender">Gender:</label><br>
        <input type="radio" id="male" name="gender" value="1"{{ $genderMale }}>
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="0"{{ $genderFemale }}>
        <label for="female">Female</label><br><br>
        
        <label for="tea">tea:</label>
        <input type="text" id="tea" name="tea"value="{{ $employee->tea ?? "" }}"><br><br>
     
        <label for="coffee">coffee:</label>
        <input type="text" id="coffee" name="coffee"value="{{ $employee->coffee ?? "" }}"><br><br>
     
        <label for="other">other:</label>
        <input type="text" id="other" name="other"value="{{ $employee->other ?? "" }}"><br><br>
       
        <label for="position">Position:</label>

        <select name="positions" id="position">
            @foreach($positions as $id => $position)
                <option value="{{ $position['id'] }}">{{$position->name}}</option>
            @endforeach
        </select>
        <br><br>
        <input type="submit" value="Submit">
        </form>
</div>
