<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{{ $movies->name }}</p>
</div>

<!-- Synopsis Field -->
<div class="form-group">
    {!! Form::label('synopsis', 'Synopsis:') !!}
    <p>{{ $movies->synopsis }}</p>
</div>

<!-- Rating Field -->
<div class="form-group">
    {!! Form::label('rating', 'Rating:') !!}
    <p>{{ $movies->rating }}</p>
</div>

<!-- Director Field -->
<div class="form-group">
    {!! Form::label('director', 'Director:') !!}
    <p>{{ $movies->director }}</p>
</div>

<!-- Id Genres Field -->
<div class="form-group">
    {!! Form::label('id_genres', 'Id Genres:') !!}
    <p>{{ $movies->id_genres }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $movies->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $movies->updated_at }}</p>
</div>

