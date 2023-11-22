@php
$var_objective = "flag-impediments";
@endphp
@extends('components.main-layout')
<title>Impediments Flags-{{$organization->business_name}}</title>
@section('content')
<div class="d-flex flex-column flex-root">
    <div class="page d-flex flex-row flex-column-fluid">
        <div class="content d-flex flex-column flex-column-fluid">
            <!-- begin page Content -->
            <div class="container-fluid py-7" style="width: 96%; margin: 0px auto;">
                @if (session('message'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>Success!</strong> {{ session('message') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div id="todo" class="col-md-4 kanban-column">
                                        <div class="card bg-light-gray shadow-none">
                                            <div class="card-body pt-3">
                                                <div class="kanban-header">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <h4>To Do</h4>
                                                                <small>Subtitle goes here</small>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button onclick="toggleSearch('todo')" class="btn btn-circle">
                                                                <img src="{{ url('public/assets/images/searchiconsvg.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input onkeyup="searchflag(this.value,'todoflag')" type="text" class="form-control input-sm" placeholder="Search...">
                                                </div>
                                                <div class="kanban-content" id="todoflag">
                                                    @foreach($todoflag as $r)
                                                        @include('flags.card')
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="in-progress" class="col-md-4 kanban-column">
                                        <div class="card bg-light-gray shadow-none">
                                            <div class="card-body pt-3">
                                                <div class="kanban-header">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <h4>In Progress</h4>
                                                                <small>Subtitle goes here</small>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button onclick="toggleSearch('in-progress')" class="btn btn-circle">
                                                                <img src="{{ url('public/assets/images/searchiconsvg.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input onkeyup="searchflag(this.value,'inprogress')" type="text" class="form-control input-sm" placeholder="Search...">
                                                </div>
                                                <div class="kanban-content"  id="inprogress">
                                                    @foreach($inprogress as $r)
                                                        @include('flags.card')
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="done" class="col-md-4 kanban-column">
                                        <div class="card bg-light-gray shadow-none">
                                            <div class="card-body pt-3">
                                                <div class="kanban-header">
                                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                                        <div class="d-flex flex-column">
                                                            <div>
                                                                <h4>Done</h4>
                                                                <small>Subtitle goes here</small>
                                                            </div>
                                                        </div>
                                                        <div>
                                                            <button onclick="toggleSearch('done')" class="btn btn-circle">
                                                                <img src="{{ url('public/assets/images/searchiconsvg.svg') }}">
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input onkeyup="searchflag(this.value,'doneflag')" type="text" class="form-control input-sm" placeholder="Search...">
                                                </div>
                                                <div class="kanban-content" id="doneflag">
                                                    @foreach($doneflag as $r)
                                                        @include('flags.card')
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page content -->
        </div>
    </div>
</div>
<div class="modal fade" id="edit-epic" tabindex="-1" role="dialog" aria-labelledby="edit-epic" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="width: 626px !important;">
            <div class="modal-header">
                <div class="row">
                    <div class="col-md-12">
                        <h5 class="modal-title" id="create-epic">Edit Impediment</h5>
                    </div>
                    <div class="col-md-12">
                        <p>Fill out the form, submit and hit the save button.</p>
                    </div>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="{{url('public/assets/images/icons/minus.svg')}}">
                </button>
            </div>
            <div class="modal-body" id="showformforedit">

            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteflagmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Delete Impediments Flag</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" id="deleteflagform" action="{{ url('dashboard/flags/deleteflag') }}">
             @csrf   
            <input type="hidden" name="delete_id" id="deleteid">
            <div class="modal-body">
                Are you sure you want to Delete this Impediments Flag?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="submit" id="deleteflagbutton" class="btn btn-danger btn-sm">Confirm</button>
            </div>
        </form>
      </div>
    </div>
</div>
<!-- MDB -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/dragula@3.7.3/dist/dragula.min.js"></script>
<script>
function loadmoretext(x){
    const toggleButton = document.getElementById("toggle-button-text" + x);
    const moreContent = document.getElementById("show-read-more" + x);
    const LoadmoreContent = document.getElementById("show-read" + x);
    toggleButton.addEventListener("click", function () {    
        $('#show-read-more' + x).show();
        $('#show-read' + x).hide();    
        
    });
}
function seelesstext(x){
    const toggleButton = document.getElementById("toggle-button-less-text" + x);
    const moreContent = document.getElementById("show-read-more" + x);
    const LoadmoreContent = document.getElementById("show-read" + x);
    toggleButton.addEventListener("click", function () {
        $('#show-read-more' + x).hide();
        $('#show-read' + x).show();
    });
}
var drakeflags = dragula([
    document.getElementById('todoflag'), 
    document.getElementById('inprogress'), 
    document.getElementById('doneflag')
]);


drakeflags.on("drop", function (el, target, source, sibling) {
    var parentElId = target.id;
    var droppedElId = el.id;
    // Perform additional operations or AJAX request here
    // Example: Update the position of the card using AJAX
    $.ajax({
        type: "POST",
        url: "{{ url('dashboard/flags/change-flag-status') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            parentElId:parentElId,
            droppedElId:droppedElId,
        },
        success: function(response) {
            console.log('Card position updated successfully.');
        },
        error: function(error) {
            console.log('Error updating card position:', error);
        }
    });
});

function toggleSearch(columnId) {
    var searchBar = document.getElementById(columnId).getElementsByClassName('kanban-search-bar')[0];
    searchBar.classList.toggle('kanban-search-bar-expanded');
}
function searchflag(value,id) {
    var organization = '{{ $organization->id }}';
    $.ajax({
        type: "POST",
        url: "{{ url('dashboard/flags/searchflag') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            value:value,
            id:id,
            organization_id:organization,
        },
        success: function(res) {
            $('#'+id).html(res);
        },
        error: function(error) {
            console.log('Error updating card position:', error);
        }
    });
}
function editflag(id) {
    $.ajax({
        type: "POST",
        url: "{{ url('dashboard/flags/getflagmodal') }}",
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id:id,
        },
        success: function(res) {
            $('#showformforedit').html(res);
            $('#edit-epic').modal('show')
        },
        error: function(error) {
            console.log('Error updating card position:', error);
        }
    });
}
function deleteflag(id) {
    $('#deleteid').val(id);
    $('#deleteflagmodal').modal('show');
}

$('#deleteflagform').on('submit',(function(e) {
    $('#deleteflagbutton').html('<i class="fa fa-spin fa-spinner"></i>');
    e.preventDefault();
    var value = $('#deleteid').val();
    var formData = new FormData(this);
    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
            $('#deleteflagbutton').html('Confirm');
            $('#'+value).remove();
            $('#deleteflagmodal').modal('hide');
        }
    });
}));

</script>
@endsection