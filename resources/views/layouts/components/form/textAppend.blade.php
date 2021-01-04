<div class="form-group {{ $class }}">
    {{ Form::label($name, $label) }}
    <div class="input-group">
        {{ Form::text($name, $value, array_merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : ''), 'placeholder' => $placeholder], $attributes)) }}
    	<div class="input-group-append">
    		<div class="input-group-text">{{ $append }}</div>
    	</div>
        @if ($errors->has($name))
            <div class="invalid-feedback" role="alert">
                <strong>{{ $errors->first($name) }}</strong>
            </div>
        @endif
    </div>
    @foreach ($helpTexts as $helpText)
	    <small class="form-text text-muted">
		  {{ $helpText }}
		</small>
	@endforeach
</div>