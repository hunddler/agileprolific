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
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                                                    <path d="M10.5418 20.4372C5.36266 20.4372 1.146 16.2205 1.146 11.0413C1.146 5.86217 5.36266 1.64551 10.5418 1.64551C15.721 1.64551 19.9377 5.86217 19.9377 11.0413C19.9377 16.2205 15.721 20.4372 10.5418 20.4372ZM10.5418 3.02051C6.11433 3.02051 2.521 6.62301 2.521 11.0413C2.521 15.4597 6.11433 19.0622 10.5418 19.0622C14.9693 19.0622 18.5627 15.4597 18.5627 11.0413C18.5627 6.62301 14.9693 3.02051 10.5418 3.02051Z" fill="#787878" />
                                                                    <path d="M20.1665 21.3545C19.9923 21.3545 19.8182 21.2903 19.6807 21.1528L17.8473 19.3195C17.5815 19.0536 17.5815 18.6136 17.8473 18.3478C18.1132 18.082 18.5532 18.082 18.819 18.3478L20.6523 20.1811C20.9182 20.447 20.9182 20.887 20.6523 21.1528C20.5148 21.2903 20.3407 21.3545 20.1665 21.3545Z" fill="#787878" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input type="text" class="form-control input-sm" placeholder="Search...">
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
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                                                    <path d="M10.5418 20.4372C5.36266 20.4372 1.146 16.2205 1.146 11.0413C1.146 5.86217 5.36266 1.64551 10.5418 1.64551C15.721 1.64551 19.9377 5.86217 19.9377 11.0413C19.9377 16.2205 15.721 20.4372 10.5418 20.4372ZM10.5418 3.02051C6.11433 3.02051 2.521 6.62301 2.521 11.0413C2.521 15.4597 6.11433 19.0622 10.5418 19.0622C14.9693 19.0622 18.5627 15.4597 18.5627 11.0413C18.5627 6.62301 14.9693 3.02051 10.5418 3.02051Z" fill="#787878" />
                                                                    <path d="M20.1665 21.3545C19.9923 21.3545 19.8182 21.2903 19.6807 21.1528L17.8473 19.3195C17.5815 19.0536 17.5815 18.6136 17.8473 18.3478C18.1132 18.082 18.5532 18.082 18.819 18.3478L20.6523 20.1811C20.9182 20.447 20.9182 20.887 20.6523 21.1528C20.5148 21.2903 20.3407 21.3545 20.1665 21.3545Z" fill="#787878" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input type="text" class="form-control input-sm" placeholder="Search...">
                                                </div>
                                                <div class="kanban-content" id="inprogress">
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
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="23" viewBox="0 0 22 23" fill="none">
                                                                    <path d="M10.5418 20.4372C5.36266 20.4372 1.146 16.2205 1.146 11.0413C1.146 5.86217 5.36266 1.64551 10.5418 1.64551C15.721 1.64551 19.9377 5.86217 19.9377 11.0413C19.9377 16.2205 15.721 20.4372 10.5418 20.4372ZM10.5418 3.02051C6.11433 3.02051 2.521 6.62301 2.521 11.0413C2.521 15.4597 6.11433 19.0622 10.5418 19.0622C14.9693 19.0622 18.5627 15.4597 18.5627 11.0413C18.5627 6.62301 14.9693 3.02051 10.5418 3.02051Z" fill="#787878" />
                                                                    <path d="M20.1665 21.3545C19.9923 21.3545 19.8182 21.2903 19.6807 21.1528L17.8473 19.3195C17.5815 19.0536 17.5815 18.6136 17.8473 18.3478C18.1132 18.082 18.5532 18.082 18.819 18.3478L20.6523 20.1811C20.9182 20.447 20.9182 20.887 20.6523 21.1528C20.5148 21.2903 20.3407 21.3545 20.1665 21.3545Z" fill="#787878" />
                                                                </svg>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="kanban-search-bar">
                                                    <input type="text" class="form-control input-sm" placeholder="Search...">
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
            <form class="needs-validation" id="updateflag" action="{{ url('dashboard/flags/updateflag') }}" novalidate>
                    @csrf
                <div class="modal-body" id="showformforedit">
                    
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
            $('#showformforedit').html(res)
        },
        error: function(error) {
            console.log('Error updating card position:', error);
        }
    });
}
$('#updateflag').on('submit',(function(e) {
    $('#updatebutton').html('<i class="fa fa-spin fa-spinner"></i>');
    e.preventDefault();
    var formData = new FormData(this);
    var cardid = $('#cardid').val();
    $.ajax({
        type:'POST',
        url: $(this).attr('action'),
        data:formData,
        cache:false,
        contentType: false,
        processData: false,
        success: function(data){
            $('#updatebutton').html('Update');
            $('#'+cardid).html(data)         
        }
    });
}));
</script>
@endsection