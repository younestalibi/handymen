@extends('layouts.container')

@section('title')
    Edit Cars
@endsection


@section('m-content')
    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
        <div class="container-xxl flex-grow-1">
            <div class="row">
                <div class="col-md-12">
                    <!-- All Services -->
                    <div class="card">
                        <h5 class="card-header">
                            <div class="d-flex justify-content-between align-items-center">
                                <a href="{{ route('service-index') }}" class="btn btn-info">
                                    <span class="tf-icons fa-solid fa-angles-left"></span> &nbsp; Back
                                </a>
                            </div>
                        </h5>
                        <div class="card-body">
                            <form action="{{ route('service-update') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <input type="hidden" name="id" value="{{ $service->id }}">
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <label class="form-label" for="basic-default-name">Name of Service</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror " value="{{ old('name', $service->name) }}"
                                            id="name" name="name" placeholder="Name of service">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                 
                                    <div class="col-md-4 col-sm-12 mb-3">                                   
                                        <label for="category_id" class="form-label" for="basic-default-category_id">Select a Category:</label>
                                        <select id="category_id" name="category_id" placeholder="category" 
                                        class="form-control @error('category_id') is-invalid @enderror " value="{{old('category_id')}}">
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" {{ $service->category_id == $category->id ? 'selected' : '' }}>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('service_category')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    


                                    {{-- ------- --}}
                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <label class="form-label" for="basic-default-duration">Service Duration</label>
                                        <input type="number" class="form-control @error('duration') is-invalid @enderror " value="{{old('duration', $service->duration)}}"
                                            id="duration" name="duration" placeholder="Duration of service">
                                        @error('duration')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div> 
                
                                   
                                    <div class="col-md-4 col-sm-12 mb-3 feature-extra">
                                        <label for="floatingTextarea2">Description of service</label>
                                        <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                            placeholder="Description of service"
                                            style="max-height:120px ;height: 100px">
                                            {{ old('description', $service->description) }}
                                        </textarea>
                                        @error('description')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    {{-- ------- --}}
                                    @if(!is_null($service->features))
                                    <label class="form-label" for="features">Service Features:</label>
                                    @foreach($service->features as $key=>$feature)
                                    <div class='col-md-4 col-sm-12 mb-3 feature-extra'>
                                        <input value='{{$feature["title"]}}' type="text" name="features[{{$key}}][title]" class="mb-2 form-control @error('features') is-invalid @enderror "   placeholder="Feature Title">
                                        <textarea name="features[{{$key}}][description]" placeholder="Feature Description" 
                                        class="mb-2 form-control @error('features') is-invalid @enderror"
                                        style="max-height:120px ;height: 100px"
                                        >{{ $feature["description"] }}</textarea> 
                                    </div>
                                    @endforeach
                                    @endif

=
                                    <div class="col-md-4 col-sm-12 mb-3">                                   
                                        <label for="status" class="form-label" for="basic-default-category_id">Select a Status:</label>
                                        <select id="status" name="status" placeholder="status" 
                                        class="form-control @error('status') is-invalid @enderror " value="{{old('status')}}">
                                            <option value="pending" {{ $service->status == 'pending' ? 'selected' : '' }}>Pending</option>
                                            <option value="progress" {{ $service->status == 'progress' ? 'selected' : '' }}>Progress</option>
                                            <option value="done" {{ $service->status == 'done' ? 'selected' : '' }}>Done</option>
                                        </select>
                                        @error('status')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-4 col-sm-12 mb-3">
                                        <label class="form-label" for="basic-default-price">Price of Service</label>
                                        <input type="number" class="form-control @error('price') is-invalid @enderror " value="{{ old('price', $service->price) }}"
                                            id="price" name="price" placeholder="Price of service">
                                        @error('price')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                               
                                    <div
                                        class="col-md-12 col-sm-12 mb-3 d-flex justify-content-start align-items-center gap-4">
                                        <div class="col-5">
                                            <img src="{{ asset('users/services/'.$service->picture) }}" alt="user-avatar"
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
                                    <div class="col-md-12 col-sm-12 mb-3 text-center">
                                        <button type="submit" class="btn btn-info">
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
