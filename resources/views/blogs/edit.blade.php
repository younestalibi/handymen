@extends('layouts.container')

@section('title')
    Edit Blogs
@endsection


@section('m-content')
    <!-- Content wrapper -->
    <div>
        
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
		<link href="{{ asset('textRich/editor.css') }}" type="text/css" rel="stylesheet"/>
    </div>
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <!-- All Blogs -->
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('blog-index') }}" class="btn btn-info">
                                    <span class="tf-icons fa-solid fa-angles-left"></span> &nbsp; Back
                                </a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('blog-update') }}" method="post" enctype="multipart/form-data" id='myform'>
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $blog->id }}">
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <label class="form-label" for="basic-default-title">Title of Blog</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror " value="{{ old('title', $blog->title) }}"
                                            id="title" name="title" placeholder="Name of service">
                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                 
                                    <div class="col-md-4 col-sm-12 mb-3">                                   
                                        <label for="status" class="form-label" for="basic-default-status">Select a Status:</label>
                                        <select id="status" name="status" placeholder="status" 
                                        class="form-control @error('status') is-invalid @enderror " value="{{old('status')}}">
                                                <option value="Posted" {{ $blog->status== "Posted" ? 'selected' : '' }}>Posted</option>
                                                <option value="Not posted" {{ $blog->status== "Not posted" ? 'selected' : '' }}>Not posted</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    

                               
                                    <div
                                        class="col-md-12 col-sm-12 mb-3 d-flex justify-content-start align-items-center gap-4">
                                        <div class="col-5">
                                            <img src="{{ asset($blog->picture) }}" alt="user-avatar"
                                                class="d-block rounded img-fluid" id="uploadedAvatar" />
                                        </div>
                                        <div class="button-wrapper">
                                            <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                                                <span class="d-none d-sm-block">Upload new photo</span>
                                                <i class="bx bx-upload d-block d-sm-none"></i>
                                                <input type="file" id="upload" name="picture"
                                                    class="account-file-input @error('picture') is-invalid @enderror"
                                                    hidden accept="image/png, image/jpeg" />
                                            </label>
                                            <button type="button"
                                                class="btn btn-outline-secondary account-image-reset mb-4">
                                                <i class="bx bx-reset d-block d-sm-none"></i>
                                                <span class="d-none d-sm-block">Reset</span>
                                            </button>
                                            <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
                                            @error('picture')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <input type="hidden" name="content" id="contentInput">
                                    <div class="container-fluid my-3">
                                        <div class="row">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-lg-12 nopadding">
                                                        <textarea id="txtEditor" contenteditable="true"></textarea> 
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 col-sm-12 mb-3 text-center">
                                        <button class="btn btn-info" id='submitButton'>
                                            <span class="tf-icons bx bxs-save"></span> &nbsp; Update
                                        </button>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                    <!-- All Users -->
                </div>
            </div>
        </div>
        <!-- / Content -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                var jQueryFirst = jQuery.noConflict(true);
            })
            
            
        </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="{{asset('textRich/editor.js')}}"></script>
		<script>
			$(document).ready(function() {
				$("#txtEditor").Editor();
				var editor = $("#txtEditor").data('editor');
                editor.append(`{!! addslashes($blog->content) !!}`);
                console.log(editor)
                console.log(editor.html())
                $("#submitButton").on("click", function () {
                    var editorContent = editor.html();
                    $("#contentInput").val(editorContent);
                    $("#myForm").submit();
                });
			});
		</script>
    </div>
    <!-- Content wrapper -->
@endsection


@section('scripts')
    <script src="{{ asset('assets/js/pages-account-settings-account.js') }}"></script>
    @if (session('success'))
        <script>
            toastr.success('{{ session('+success+') }}');
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error('{{ session('+error+') }}');
        </script>
    @endif
@endsection
