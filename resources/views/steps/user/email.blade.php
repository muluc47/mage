<div class="form-group">
    <label for="name">Select name</label>
    

    @if ($errors->has('name'))
        <span class="invalid-feedback">{{ $errors->first('name') }}</span>
    @endif
</div>