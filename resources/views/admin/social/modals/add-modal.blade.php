<div class="modal fade" id="add-modal" tabindex="-1" role="dialog" aria-labelledby="add-modal" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Add Social Media</h6>
            </div>
            <form action="{{ route('social.store') }}" method="POST" id="add-form">
                @csrf
                <div class="modal-body">
                    <div class="row">

                        <div class="col-md-4">
                            <div class="form-group">
                                <select class="form-select form-control form-select-lg text-dark" id="exampleFormControlSelect1" name="type">
                                  <option>facebook</option>
                                  <option>twitter</option>
                                  <option>linkedin</option>
                                  <option>youtube</option>
                                  <option>github</option>
                                  <option>tiktok</option>
                                </select>
                              </div>
                        </div>
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="link" placeholder="Input links here..." required>
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
