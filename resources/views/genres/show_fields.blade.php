<!-- Genre Field -->
<div class="form-group">
    {!! Form::label('genre', 'Genre:') !!}
    <p>{{ $genres->genre }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $genres->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $genres->updated_at }}</p>
</div>

