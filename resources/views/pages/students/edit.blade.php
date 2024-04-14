<form action="{{ route('student.update', $student->id) }}" method="POST" enctype="multipart/form">
    @csrf
    <div class="mb-3">
        <label for="exampleInputName" class="form-label">Name</label>
        <input class="form-control" name="name" type="text" value="{{ $student->name }}">
    </div>

    <div class="mb-3">
        <label for="exampleInputAge" class="form-label">Age</label>
        <input class="form-control" name="age" type="text" value="{{ $student->age }}">
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
