<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Synopsis Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('synopsis', 'Synopsis:') !!}
    {!! Form::textarea('synopsis', null, ['class' => 'form-control']) !!}
</div>

<!-- Rating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rating', 'Rating:') !!}
    {!! Form::number('rating', null, ['class' => 'form-control']) !!}
</div>

<!-- Director Field -->
<div class="form-group col-sm-6">
    {!! Form::label('director', 'Director:') !!}
    {!! Form::text('director', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Genres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_genres', 'Id Genres:') !!}
    {!! Form::number('id_genres', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('movies.index') }}" class="btn btn-secondary">Cancel</a>
</div>
