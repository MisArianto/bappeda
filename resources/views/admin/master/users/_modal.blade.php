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
            <h5 class="modal-title" id="title-tambah">Tambah User</h5>
            <h5 class="modal-title display" id="title-edit">Edit User</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form id="form" url="{{ url('admin/master/users/store') }}" urlUpdate="{{ url('admin/master/users/update') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" class="display" name="id" id="id">
                <div class="modal-body">

                  <div class="form-group">
                      <label>Name</label>
                      <input type="text" id="name" name="name" class="form-control">
                     <span class="text-danger">
                          <strong id="name_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>Username</label>
                      <input type="text" id="username" name="username" class="form-control">
                     <span class="text-danger">
                          <strong id="username_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>Email</label>
                      <input type="email" id="email" name="email" class="form-control">
                     <span class="text-danger">
                          <strong id="email_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>Password</label>
                      <input type="password" id="password" name="password" class="form-control" placeholder="Jika kosong otomatis password ter-set 12345678">
                     <span class="text-danger">
                          <strong id="password_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>Level</label>
                      <select name="level" id="level" class="form-control">
                        <option value="">Pilih</option>
                        @foreach($levels as $level)
                        <option @if($level->nama_level == \Auth::user()->level) selected @endif value="{{ $level->nama_level }}">{{ $level->nama_level }}</option>
                        @endforeach
                      </select>
                     <span class="text-danger">
                          <strong id="level_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>FB</label>
                      <input type="text" id="fb" name="fb" class="form-control">
                     <span class="text-danger">
                          <strong id="fb_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>IG</label>
                      <input type="text" id="ig" name="ig" class="form-control">
                     <span class="text-danger">
                          <strong id="ig_error"></strong>
                      </span>
                  </div>


                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button
                    type="submit"
                    id="btn-simpan-user"
                    class="btn btn-info"
                  >Save</button>
                  <button
                    type="submit"
                    id="btn-update-user"
                    class="btn btn-info display"
                  >Update</button>
                </div>
              </form>
            </div>
        </div>
      </div>
    </div>
