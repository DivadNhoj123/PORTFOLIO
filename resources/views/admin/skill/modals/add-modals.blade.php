<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header justify-content-center">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    <i class="tim-icons icon-simple-remove "></i>
                </button>
                <h6 class="title title-up">Add Skill</h6>
            </div>
            <form action="{{ route('skill.store') }}" method="POST" id="skillForm">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-7">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="skill" placeholder="Type your skill here...">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <input type="text" class="form-control text-dark" name="range" placeholder="Proficiency here...">
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
