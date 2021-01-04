<div class="form-group {{ $class }}">
    {{ Form::label($name, $label) }}
    {{ Form::password($name, array_merge(['class' => 'form-control '.($errors->has($name) ? 'is-invalid' : ''), 'placeholder' => $placeholder], $attributes)) }}
    @foreach ($helpTexts as $helpText)
	    <small class="form-text text-muted">
		  {{ $helpText }}
	      @if($show != null)
	      	<span class="fa fa-eye-slash icon"></span>
	      @endif
	      <div class="float-right">
            @if ($forgot != null)
              <a href="{{ route('password.request') }}" class="text-small">
                {{ __('Forgot Your Password?') }}
              </a>
            @endif
            </div>
		</small>
	@endforeach
    @if ($errors->has($name))
	    <div class="invalid-feedback" role="alert">
	    	<strong>{{ $errors->first($name) }}</strong>
	    </div>
    @endif
</div>