@section('content-sidebar')
<div class="sidebar-file-manager" id="sidebar-file-manager-toggle">
  <div class="sidebar-inner">
      <!-- close icon  -->
          <div class="sidebar-close-icon d-block d-xl-none">
              <i class="feather icon-x"></i>
          </div>
      <!-- close icon ends -->

      <!-- sidebar menu links starts -->
      <div class="sidebar-menu-list">

          <!-- add file button -->
          <div class="form-group text-center px-2">
              <label for="getfile" class="btn btn-primary btn-block my-2 text-capitalize">
              <i class="feather icon-plus"></i>Add File</label>
              <input type="file" class="d-none" id="getfile">
          </div>
          <!-- add file button ends -->

          <!-- side bar list items starts  -->
          <div class="list">
              <!-- links for file manager sidebar -->
              <div class="list-group">
                  <div class="px-2 border-0 font-weight-bold text-muted">MY Drive</div>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-file mr-50 font-medium-3"></i> All Files
                      <span class="badge badge-primary badge-pill mr-0 float-right">2</span>
                  </a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-cpu mr-50 font-medium-3"></i>My Devices</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-arrow-down-left mr-50 font-medium-3"></i> Recents</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-shield mr-50 font-medium-3"></i> Important</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0 rounded-0">
                      <i class="feather icon-trash-2 mr-50 font-medium-3"></i> Deleted Files</a>
              </div>
              <div class="list-group mt-2">
                  <div class="px-2 border-0 font-weight-bold text-muted">LABELS</div>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-file-text mr-50 font-medium-3"></i> Documents</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-image mr-50 font-medium-3"></i> Images</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-film mr-50 font-medium-3"></i> Videos</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0">
                      <i class="feather icon-music mr-50 font-medium-3"></i> Audio</a>
                  <a href="javascript:void(0)" class="list-group-item px-2 list-group-item-action border-0 rounded-0">
                      <i class="feather icon-folder mr-50 font-medium-3"></i> Zip Files</a>
              </div>
              <!-- links for file manager sidebar ends -->

              <!-- storage status of file manager starts-->
              <div class="storage-status mt-2 px-2">
                  <label class="mb-75 font-medium-2 text-muted font-weight-bold">Storage Status</label>
                  <div class="d-flex">
                      <i class="feather icon-save font-large-1"></i>
                      <div class="file-manager-progress ml-1">
                          <span class="text-muted">19.5GB used of 25GB</span>
                          <div class="progress progress-bar-primary progress-sm mb-50 mt-50">
                            <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="80" aria-valuemax="100" style="width:80%;"></div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- storage status of file manager ends-->

          </div>
          <!-- side bar list items ends  -->

      </div>
      <!-- sidebar menu links ends -->
  </div>
</div>
@endsection