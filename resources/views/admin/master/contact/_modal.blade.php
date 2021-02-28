<div
      class="modal fade"
      id="myModal"
      tabindex="-1"
      role="dialog"
      {{-- aria-labelledby="myModalTitle"
      aria-hidden="true" --}}
      data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document" >
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="title-tambah">Tambah Contact</h5>
            <h5 class="modal-title display" id="title-edit">Edit Contact</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form id="form" url="{{ url('admin/master/contact/store') }}" urlUpdate="{{ url('admin/master/contact/update') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" class="display" name="id" id="id">
                <div class="modal-body">

                  <div class="form-group">
                      <label>Content</label>
                      <textarea id="editor" name="editor" rows="10" cols="10"></textarea>
                     <span class="text-danger">
                          <strong id="editor_error"></strong>
                      </span>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button
                    type="submit"
                    id="btn-simpan-post"
                    class="btn btn-info"
                  >Save</button>
                  <button
                    type="submit"
                    id="btn-update-post"
                    class="btn btn-info display"
                  >Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
