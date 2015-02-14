<div class="form-group">
    {!! Form::label('title', 'Title:') !!}<!--label for the name text field with the value 'Name:'-->
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', 'Body:') !!}<!--label for the name text field with the value 'Name:'-->
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Publish On') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d'), null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit('$submitButtonText', ['class' => 'btn btn-primary form-control']) !!}
</div>