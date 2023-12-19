@extends('layouts.container')

@section('title')
    Create Blog
@endsection


@section('m-content')
    <!-- Content wrapper -->
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
                            <form action="{{ route('blog-store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                           
                                   
                                    <div class="col-md-6 col-sm-12 mb-3 ">
                                        <label for="floatingTextarea2">Titles of blogs <code>(Titles must be separated by [;])</code></label>
<textarea name="titles" id="titles" class="form-control @error('titles') is-invalid @enderror"
placeholder="Title 1;
Title 2;
Title 3;
don't forget to use ;"
                                            style="max-height:500px ;height: 200px"></textarea>
                                        @error('titles')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <!-- <div class="col-md-6 col-sm-12 mb-3">
                                        <label class="form-label" for="basic-default-keyword">Generate Titles<code>(Keywords must be separated by [;])</code></label>
                                        <input type="text" class="mb-3 form-control @error('keyword') is-invalid @enderror" value="{{ old('keyword') }}"
                                            id="keyword" name="keyword" placeholder="Enter Keywords Of different topics">
                                        @error('keyword')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <textarea name="results" id="results" class=" mb-3 form-control " placeholder="Generated Titles will appear here"
                                            style="max-height:200px; height: 200px"></textarea>
                                        <button id='generate' class="btn btn-success">
                                            Generate Titles
                                        </button>
                                        <small id="error-message" style="color: red;"></small>
                                    </div> -->



                                    <div class="col-md-12 col-sm-12 mb-3 text-center">
                                        <button type="submit" class="btn btn-info">
                                            <span class="tf-icons bx bxs-save"></span> &nbsp; Store
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
        <script>

$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('#generate').click(function () {
        var keywords = $('#keyword').val();
        $('#generate').prop('disabled', true).text('Loading...');

        $.ajax({
            type: 'GET',
            url: '/generate-titles',
            data: {
                keyword: keywords,
            },
            success: function (response) {
                $('#generate').prop('disabled', false).text('Generate Titles');
                console.log(response)
                var formattedTitles = response.results
                    .replace(/^\d+\.\s*"/gm, '')
                    .replace(/"$/gm, '')        
                    .replace(/\n/g, '; \n');    

                $('#results').val(formattedTitles);
                $('#error-message').text(''); 
            },
            error: function (xhr, status, error) {
                $('#generate').prop('disabled', false).text('Generate Titles');
                $('#error-message').text('Error: ' + error);
            }
        });
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
            toastr.success("{{ session('success') }}");
        </script>
    @endif

    @if (session('error'))
        <script>
            toastr.error("{{ session('error') }}");
        </script>
    @endif
@endsection

