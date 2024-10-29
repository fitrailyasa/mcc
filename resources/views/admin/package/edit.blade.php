<!-- Tombol untuk membuka modal -->
<button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
    data-bs-target=".formEdit{{ $package->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
        {{ __('Edit') }}</span></button>

<!-- Modal -->
<div class="modal fade formEdit{{ $package->id }}" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('package.update', $package->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Package') }}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label class="form-label">{{ __('Name') }}</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                               placeholder="Name" name="name" id="name"
                               value="{{ old('name', $package->name) }}" required>
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-2">
                        <label class="form-label">{{ __('Description') }}</label>
                        <textarea class="form-control @error('desc') is-invalid @enderror"
                                  placeholder="Description" name="desc" id="desc" required>{{ old('desc', $package->desc) }}</textarea>
                        @error('desc')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="mb-2">
                        <label class="form-label">{{ __('Price') }}</label>
                        <input type="number" class="form-control @error('price') is-invalid @enderror"
                               placeholder="RM Price" name="price" id="price"
                               value="{{ old('price', $package->price) }}" required>
                        @error('price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}

                    <div class="mb-2">
                        <label class="form-label">{{ __('Image (optional)') }}</label>
                        <input type="file" class="form-control @error('img') is-invalid @enderror"
                               name="img" id="img" accept="image/*">
                        @error('img')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    {{-- <div class="mb-2">
                        <label class="form-label">{{ __('Category') }}</label>
                        <select class="form-control @error('category_id') is-invalid @enderror"
                                name="category_id" id="category_id" required>
                            <option value="">-- Select Category --</option>
                            <!-- Assuming you have a list of categories -->
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $package->category_id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div> --}}
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Close') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
