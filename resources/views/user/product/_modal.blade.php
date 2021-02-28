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
            <h5 class="modal-title" id="title-tambah">Tambah product</h5>
            <h5 class="modal-title display" id="title-edit">Edit product</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
            <div class="modal-body">
              <form id="form" url="{{ url('user/products/store') }}" urlUpdate="{{ url('user/products/update') }}" enctype="multipart/form-data">
                <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                <input type="hidden" class="display" name="id" id="id">
                <div class="modal-body">

                  <div class="form-group">
                      <label>Tags</label>
                      <select name="tag" id="tag" class="form-control multiple-select" multiple="multiple" style="width: 100%;">
                        @foreach($tags as $tag)
                        <option value="{{ $tag->tag_name }}">{{ $tag->tag_name }}</option>
                        @endforeach
                      </select>
                     <span class="text-danger">
                          <strong id="tag_error"></strong>
                      </span>
                  </div>

                   <div class="form-group">
                      <label>Product Name</label>
                      <input type="text" id="product_name" name="product_name" class="form-control form-control-sm">
                     <span class="text-danger">
                          <strong id="product_name_error"></strong>
                      </span>
                  </div>

                  <div class="form-group">
                      <label>Price</label>
                      <input type="text" id="price" name="price" class="form-control form-control-sm">
                     <span class="text-danger">
                          <strong id="price_error"></strong>
                      </span>
                  </div>

                  <div class="form-group" id="form-group">
                    <label>Image</label>
                    <div class="uploader">

                      <div id="caption">
                        <i id="icon" class="mdi mdi-cloud-upload"></i>
                        <p>Pilih Gambar Anda di Sini</p>
                        <div class="file-input">
                          <label for="file" class="label">Pilih File</label>
                          <input type="file" id="file" name="image" class="input" onchange="onInputChange(event)" multiple>
                        </div>
                      </div>

                      <div class="layar" id="images-preview">
                        <div class="images-preview">
                          <div class="img-wrapper">
                            <div class="close" id="close">x</div>
                            <img id="output_image" height="200px" width="300px" alt="Image Uploader">
                            <input type="hidden" id="image" name="image">
                            <div class="details">
                              <span class="name" id="name_img"></span>
                              <span class="size" id="size_img"></span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <span class="text-danger">
                          <strong id="image_error"></strong>
                      </span>
                  </div>

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
