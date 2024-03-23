<div class="modal fade" id="edit{{ $skill->id }}" tabindex="-1" role="dialog" aria-labelledby="edit" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Edit Skill</h6>
            </div>
            <form action="{{ route('skill.update', $skill->id) }}" method="POST" >
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="skill" value="{{ $skill->skill }}">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="range" value="{{ $skill->range }}">
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
