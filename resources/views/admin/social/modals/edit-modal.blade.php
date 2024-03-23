<div class="modal fade" id="edit-modal{{ $social->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Edit Social Media Links</h6>
            </div>
            <form action="{{ route('social.update', $social->id) }}" method="POST" id="edit-form">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <input type="hidden" name="type" value="{{ $social->type }}">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="link" placeholder="Input links here..." required value="{{ $social->link }}">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-default">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>
