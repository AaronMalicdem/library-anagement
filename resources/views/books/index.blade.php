<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cats</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css">

    <style>
    .btn-dark {
        display: inline-flex;
        align-items: center;
        padding: 10px 20px;
        border-radius: 5px;
        margin-bottom: 20px;
    }
    .btn-dark i {
        margin-right: 10px;
    }
</style>

</head>
<body>

<div class="form-group mb-3">
    <a href="{{ url('books/create') }}" class="btn btn-dark">
        <i class="fas fa-plus"></i> Add New Book Entry
    </a>
</div>

<div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Author</th>
                            <th>Description</th>
                            <th>ISBN</th>
                            <th>Published Year</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                        <tr>
                            <td>{{ $book->title }}</td>
                            <td>{{ $book->author }}</td>
                            <td>{{ $book->description }}</td>
                            <td>{{ $book->isbn }}</td>
                            <td>{{ $book->published_year }}</td>
                        <td>
                            <a href="{{ url('books', $book->id) }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
                            <form action="{{ url('books', $book->id) }}" method="post">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Delete this item?')">Delete</button>
                            </form>
                        </td>
                        @endforeach
                        </tr>
                        
                    </tbody>

                </table>

            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    
</body>
</html>