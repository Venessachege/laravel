<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body >
<h1>Welcome to the Student Portal</h1>

 <a class="btn btn-primary"href="/student">Students</a>
 <a class="btn btn-primary"href="/fees">Fees</a>
<form action="{{ url('/retrieve') }}" method="post">
    @csrf
     <div class="form-group">
            <input type="text" name="studentnumber" class="form-control">
           <button class="btn btn-primary" type="submit">Retrieve</button>

     </div>

 </form>

 <table class="table">
     <thead>
         <th>
            no
         </th>
         <th>
             Student Number
         </th>
         <th>
             Fullname
         </th>
         <th>
             Amount
         </th>
     </thead>
     <tbody>
         @if (count($students)>0)
         @php
             $count = 0;
         @endphp
            @foreach ($students as $student)
               <tr>
                   <td>{{ ++$count }}</td>
                   <td>{{ $student->student_no }}</td>
                   <td>{{ $student->fullname }}</td>
                   <td>{{ $student->amount }}</td>
               </tr>
            @endforeach

         @else
          <p>No records</p>
         @endif
     </tbody>
 </table>

</body>
</html>
