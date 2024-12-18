<!-- Tombol untuk membuka modal -->
<button role="button" class="btn btn-sm btn-danger" data-bs-toggle="modal"
    data-bs-target=".formDelete{{ $feedback->id }}"><i class="fas fa-trash"></i><span class="d-none d-sm-inline">
        {{ __('Delete') }}</span></button>

<!-- Modal -->
<div class="modal fade formDelete{{ $feedback->id }}" tabindex="-1" role="dialog" aria-hidden="">
    <div class="modal-dialog ">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">{{ __('Delete Permanen Data') }}
                </h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">Are you sure you want to delete the data permanently?</div>
            <div class="modal-footer">
                <form action="{{ route('feedback.destroy', $feedback->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal">{{ __('Tutup') }}</button>
                    <input type="submit" class="btn btn-danger light" name="" id="" value="Delete">
                </form>
            </div>
        </div>
    </div>
</div>
