<!-- Tombol untuk membuka modal -->
<button role="button" class="btn btn-sm btn-warning mr-2" data-bs-toggle="modal"
    data-bs-target=".formEdit{{ $user->id }}"><i class="fas fa-edit"></i><span class="d-none d-sm-inline">
        {{ __('Edit') }}</span></button>

<!-- Modal -->
<div class="modal fade formEdit{{ $user->id }}" tabindex="-1" role="dialog" aria-hidden="">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form method="POST" action="{{ route('user.update', $user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-header">
                    <h5 class="modal-title" id="modalFormLabel">{{ __('Edit Data') }}
                    </h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-2">
                                <label class="form-label">{{ __('Name') }}</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror"
                                    placeholder="name" name="name" id="name"
                                    value="{{ old('name', $user->name) }}" required>
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('Email') }}</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="email" name="email" id="email"
                                    value="{{ old('email', $user->email) }}" required>
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">{{ __('Password (Opsional) ') }}</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror"
                                    placeholder="password" name="password" id="password">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                    <button type="submit" class="btn btn-primary">{{ __('Simpan') }}</button>
                </div>
            </form>
        </div>
    </div>
</div>
