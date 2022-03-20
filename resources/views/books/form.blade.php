<div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
           value="{{ old('name',$book->name) }}">
</div>

<div class="form-group">
    <label for="description">Name</label>
    <textarea name="description" class="form-control @error('description') is-invalid @enderror" id="description"
              cols="30"
              rows="10">{{ old('description', $book->description) }}</textarea>
    @error('description')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
    @enderror
</div>

<div class="mb-3"></div>
