<div class="form-group {{ $class }}">
	@if($label)
    	{{ Form::label($name, $label) }}
	@endif
	@if($toogle)
		<br>
		<label class="custom-switch mt-1">
	        <input type="checkbox" name="switch" class="custom-switch-input" value="test">
	        <span class="custom-switch-indicator"></span>
	        <span class="custom-switch-description">{{ $toogle }}</span>
	     </label>
	@endif
    {{ Form::select($name, $option, $value, array_merge(['class' => 'form-control select2 ' . $class . ' ' .($errors->has($name) ? 'is-invalid' : ''), 'data-placeholder' => $dataPlaceholder, 'style' => 'width: 100%;'], $attributes)) }}
    @foreach ($helpTexts as $helpText)
	    <small class="form-text text-muted">
		  {{ $helpText }}
		</small>
	@endforeach
    @if ($errors->has($name))
	    <div class="invalid-feedback" role="alert">
	    	<strong>{{ $errors->first($name) }}</strong>
	    </div>
    @endif
	@if ($ajax)
	    <div class="invalid-feedback" role="alert">
	    	<strong></strong>
	    </div>
    @endif
</div>