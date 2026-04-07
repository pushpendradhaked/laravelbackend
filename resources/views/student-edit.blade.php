<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h2>Edit Student</h2>

        @if(session("msg"))
            <div class="alert alert-success">
                {{ session("msg") }}
            </div>
        @endif

        <form method="POST" action="{{ route('student.update', $student->id) }}">
            @csrf
            @method('POST')

            <div class="col-md-4 mt-3">
                <label class="form-label">Name</label>
                <input type="text" name="Name" value="{{ $student->Name }}" class="form-control">
            </div>

            <div class="col-md-4 mt-3">
                <label class="form-label">Email</label>
                <input type="email" name="Email" value="{{ $student->Email }}" class="form-control">
            </div>

            <div class="col-md-4 mt-3">
                <label class="form-label">Mobile</label>
                <input type="number" name="mobile" value="{{ $student->mobile }}" class="form-control">
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-success">Update</button>
                <a href="/student" class="btn btn-secondary">Back</a>
            </div>
        </form>
    </div>
</body>

</html>