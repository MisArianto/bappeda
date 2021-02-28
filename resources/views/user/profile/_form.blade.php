
<form id="form" url="{{ url('profile/update') }}" enctype="multipart/form-data">
  <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
  <input type="hidden" class="display" name="id" id="id">

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
        <input type="password" id="password" name="password" class="form-control" placeholder="Password Baru">
       <span class="text-danger">
            <strong id="password_error"></strong>
        </span>
    </div>

    <div class="form-group">
        <label>Facebook</label>
        <input type="text" id="fb" name="fb" class="form-control">
       <span class="text-danger">
            <strong id="fb_error"></strong>
        </span>
    </div>

    <div class="form-group">
        <label>Instagram</label>
        <input type="text" id="ig" name="ig" class="form-control">
       <span class="text-danger">
            <strong id="ig_error"></strong>
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
        <label>Bio</label>
        <textarea id="bio" name="bio" class="form-control" rows="10" cols="10"></textarea>
       <span class="text-danger">
            <strong id="bio_error"></strong>
        </span>
    </div>

    <button
      type="submit"
      id="btn-update-profile"
      class="btn btn-info"
    >Update</button>
  </div>
</form>
            
