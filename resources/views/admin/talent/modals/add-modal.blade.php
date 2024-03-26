<div class="modal fade modal-mini" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Add Job</h6>
            </div>
            <form action="{{ route('talent.store') }}" method="POST" id="add-form" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-6">
                            <input type="file" id="input-file-now-custom-2" class="dropify" data-height="150" name="img">
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control text-dark" name="talent" placeholder="Type your skills here..." required>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <select class="form-select form-control form-select-lg text-dark" id="exampleFormControlSelect1" name="type">
                                            <option value="0">Backend</option>
                                            <option value="1">Frontend</option>
                                        </select>
                                    </div>
                                </div>
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
