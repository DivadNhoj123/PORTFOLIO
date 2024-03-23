<div class="modal fade" id="edit-modal{{ $job->id }}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Edit Social Media Links</h6>
            </div>
            <form action="{{ route('jobs.update', $job->id) }}" method="POST" id="edit-form">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="job" value="{{ $job->job }}" required>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="position" value="{{ $job->position }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="date" class="form-control text-dark" name="year" value="{{ $job->year }}" required>
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
