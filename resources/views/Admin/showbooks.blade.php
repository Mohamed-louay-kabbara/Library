<!DOCTYPE html>
<html>

<head>
    <title> Show Books </title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <style>
        a {
            text-decoration: none;
            color: #5433ff;
            font-weight: bold;
        }
    </style>
</head><br><br>
<a href="{{ route('addbook', $id) }}" class="btn btn-outline-primary">Add Book</a><br><br>
<a href="{{ route('back') }}" class="btn btn-outline-primary">Back</a><br><br>
<div class="card-body">
    <div class="table-responsive">
        <table class="table text-md-nowrap" id="example1">
            <thead>
                <th class="wd-15p border-bottom-0">Name</th>
                <th class="wd-15p border-bottom-1">Author Name</th>
                <th class="wd-15p border-bottom-2">History Bublish</th>
                <th class="wd-15p border-bottom-3">Price</th>
                <th class="wd-15p border-bottom-4">Count</th>
                <th class="wd-15p border-bottom-5">Picture</th>
                <th class="wd-15p border-bottom-6">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($book as $b)
                    <tr>
                        <td>{{ $b->name }}</td>
                        <td>{{ $b->author_name }}</td>
                        <td>{{ $b->history_bublish }}</td>
                        <td>{{ $b->price }}</td>
                        <td>{{ $b->count }}</td>
                        <td><img id="im" src="{{ asset('imgs/' . $b->picture) }}" style="width:70px;height:70px">
                        </td>
                        <input type="hidden" name="" id="" value="{{ $b->cotigory_id }}">
                        <td>
                            <a href="{{ route('delete.book', $b->id) }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="red" class="bi bi-trash"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z" />
                                    <path fill-rule="evenodd"
                                        d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z" />
                                </svg></a>
                            <a href="{{ route('edit.book', $b->id) }}"> <svg xmlns="http://www.w3.org/2000/svg"
                                    width="25" height="25" fill="green" class="bi bi-pencil-square"
                                    viewBox="0 0 16 16">
                                    <path
                                        d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                    <path fill-rule="evenodd"
                                        d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                </svg></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <script src="js/all.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/bootstrap.bundle.min.js.map"></script>
