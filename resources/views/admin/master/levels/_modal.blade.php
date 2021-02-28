<div
      class="modal fade"
      id="myModal"
      tabindex="-1"
      role="dialog"
      {{-- aria-labelledby="myModalTitle"
      aria-hidden="true" --}}
      data-backdrop="static" 
      data-keyboard="false" 
      tabindex="-1" 
      aria-labelledby="staticBackdropLabel" 
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title-tambah">Tambah Level</h5>
            <h5 class="modal-title display" id="title-edit">Edit Level</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form id="form" url="{{ url('admin/master/levels/store') }}" urlUpdate="{{ url('admin/master/levels/update') }}">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" class="display" name="id" id="id">
                <div class="modal-body">

                  <div class="form-group">
                      <label>ID Role</label>
                      <input type="text" id="id_role" name="id_role" class="form-control form-control-sm">
                     <span class="text-danger">
                          <strong id="id_role_error"></strong>
                      </span>
                  </div>

                   <div class="form-group">
                      <label>Nama Level</label>
                      <input type="text" id="nama_level" name="nama_level" class="form-control form-control-sm">
                     <span class="text-danger">
                          <strong id="nama_level_error"></strong>
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
