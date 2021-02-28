@if($contact != '')
<div class="row">
  <div class="col-md-4">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
          <div class="col-md-6">
            <div class="card-body">
              <h5 class="card-title">{{ substr($contact['content'], 0, 30) . '...' }}</h5>
            </div>
          </div>
          <div class="col-md-1">
            <div class="card-body">
             <a href="#" id="handleEdit" data-id="{{ $contact->id }}" data-editor="{{ $contact->content }}" class="text-info">
                <i class="fa fa-edit"></i>
              </a>
              <a href="#" id="handleDelete" data-id="{{ $contact->id }}" class="text-danger">
                <i class="fa fa-trash"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
  </div>
@endif
