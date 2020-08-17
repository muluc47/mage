<div class="form-group">
    <label for="name">Select name</label>
    <select id="name" name="name" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}">
        <option value="">Select...</option>
        @foreach ($step->getOptions() as $option)
            <option value="{{ $option }}" @if (old('name') ?? $step->data('name') === $option) @endif>{{ $option }}</option>
        @endforeach
    </select>

    @if ($errors->has('name'))
        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
    @endif
</div>