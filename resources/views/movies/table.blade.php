<div class="table-responsive-sm">
    <table class="table table-striped" id="movies-table">
        <thead>
            <tr>
                <th>Name</th>
        <th>Synopsis</th>
        <th>Rating</th>
        <th>Director</th>
        <th>Id Genres</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($movies as $movies)
            <tr>
                <td>{{ $movies->name }}</td>
            <td>{{ $movies->synopsis }}</td>
            <td>{{ $movies->rating }}</td>
            <td>{{ $movies->director }}</td>
            <td>{{ $movies->id_genres }}</td>
                <td>
                    {!! Form::open(['route' => ['movies.destroy', $movies->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('movies.show', [$movies->id]) }}" class='btn btn-ghost-success'><i class="fa fa-eye"></i></a>
                        <a href="{{ route('movies.edit', [$movies->id]) }}" class='btn btn-ghost-info'><i class="fa fa-edit"></i></a>
                        {!! Form::button('<i class="fa fa-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-ghost-danger', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>