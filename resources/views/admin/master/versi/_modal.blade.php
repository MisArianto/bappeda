<div
      class="modal fade"
      id="myModal"
      tabindex="-1"
      role="dialog"
      data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title-tambah">Tambah Versi</h5>
            <h5 class="modal-title display" id="title-edit">Edit Versi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form id="form" url="{{ url('admin/master/versi/store') }}" urlUpdate="{{ url('admin/master/versi/update') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" class="display" name="id" id="id">
                <div class="modal-body">

                  <div class="form-group">
                      <label>Versi</label>
                      <input type="text" name="versi" id="versi" class="form-control" placeholder="versi">
                     <span class="text-danger">
                          <strong id="versi_error"></strong>
                      </span>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button
                    type="submit"
                    id="btn-simpan"
                    class="btn btn-info"
                  >Save</button>
                  <button
                    type="submit"
                    id="btn-update"
                    class="btn btn-info display"
                  >Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
