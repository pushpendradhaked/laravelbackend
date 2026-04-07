<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        {{-- Success Message --}}
        @if(session("msg"))
            <div class="alert alert-success">
                {{ session("msg") }}
            </div>
        @endif

        {{-- ✅ Form - sirf store route --}}
        <form method="POST" action="{{ route('student.store') }}" class="row g-3 mt-5">
            @csrf
            <div class="col-md-4">
                <label class="form-label">Name</label>
                <input type="text" class="form-control" name="Name">
            </div>
            <div class="col-md-4">
                <label class="form-label">Email</label>
                <input type="email" class="form-control" name="Email">
            </div>
            <div class="col-md-4">
                <label class="form-label">Mobile</label>
                <input type="number" class="form-control" name="mobile">
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Create Data</button>
            </div>
        </form>

        {{-- ✅ Students List --}}
        @foreach ($students as $item)
            <div class="card mt-4 p-3">
                <h4><strong>ID:</strong> {{ $item->id }}</h4>
                <h4><strong>Name:</strong> {{ $item->Name }}</h4>
                <h4><strong>Email:</strong> {{ $item->Email }}</h4>
                <h4><strong>Mobile:</strong> {{ $item->mobile }}</h4>

                <div class="d-flex gap-2 mt-2">
                    {{-- ✅ Edit Button --}}
                    <a href="{{ route('student.edit', $item->id) }}" class="btn btn-warning">Edit</a>

                    {{-- ✅ Delete Button --}}
                    <form action="{{ route('student.destroy', $item->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
        </script>
</body>

</html>