<h1>Edit student</h1>
<form method='post' action='#'>
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter a name" name="name" value ="<?php if ($student->getName() !== null) echo $student->getName();?>">
    </div>

    <div class="form-group">
        <label for="gender">Male</label>
        <input type="radio" name="gender" id="" value="Male">
        <label for="gender">Female</label>
        <input type="radio" name="gender" id="" value="Female">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>