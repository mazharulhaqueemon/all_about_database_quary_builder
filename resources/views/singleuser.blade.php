<h1>Student Details</h1>
 @foreach ($data as $id => $student)
    <h3> Name : {{ $student->name }} </h3>
    <h3> Name : {{ $student->email }} </h3>
    <h3> Name : {{ $student->age }} </h3>
    <h3> Name : {{ $student->city }} </h3>

 @endforeach
