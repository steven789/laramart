<div class="form-group {{ $class }}">
    {{ Form::label($name, $label) }}
    <div class="custom-file">
        <label for="customFile" class="custom-file-label">Choose File</label>
        {{ Form::file($name, array_merge(['value' => $value, 'class' => 'custom-file-input '.($errors->has($name) ? 'is-invalid' : '')], $attributes)) }}
    </div>
    @if ($errors->has($name))
        <div class="invalid-feedback" role="alert">
            <strong>{{ $errors->first($name) }}</strong>
        </div>
    @endif
    @foreach ($helpTexts as $helpText)
	    <small class="form-text text-muted">
		  {{ $helpText }}
		</small>
	@endforeach
</div>