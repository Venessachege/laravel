<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<form action="{{ url('storeStudent') }}" method='post'>

<div class="form-group">
    @csrf
    <label for="Student Number">Student Number</label>
    <input type="text" class="form-control" name="studentnumber"  placeholder="Enter student Number">
   </div>
   <div class="form-group">
    <label for="Student Number">Fullname</label>
    <input type="text" class="form-control" name="fullname"  placeholder="Fullname">
   </div>
   <div class="form-group">
    <label for="Student Number">Date of Birth</label>
    <input type="date" class="form-control" name="dob"  placeholder="Date of birth">
   </div>
   <div class="form-group">
    <label for="Student Number">Address</label>
    <input type="text" class="form-control" name="Address"  placeholder="Address">
   </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</html>
