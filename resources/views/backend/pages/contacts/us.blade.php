@extends('backend.layouts.master')

@section('title')
    @include('backend.pages.contacts.partials.title')
@endsection

@section('admin-content')
    @include('backend.pages.contacts.partials.header-breadcrumbs')
    <div class="container-fluid">
        {{-- @include('backend.pages.contacts.partials.top-show') --}}
        {{-- @include('backend.layouts.partials.messages') --}}
        <form action="{{ route('admin.contacts.store') }}" method="POST" data-parsley-validate data-parsley-focus="first"
            enctype="multipart/form-data" autocomplete="off">
            @csrf
            @method('post')
            <div class="form-body">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="name">Name <span class="required">*</span></label>
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Enter Name" required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="phone">Phone No <span class="required">*</span></label>
                                <input type="number" class="form-control" id="phone" name="phone"
                                    placeholder="Enter Phone Number" minlength='10' maxlength='10' required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="subject">subject <span class="required">*</span></label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Enter Subject" required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="email">Email Address <span
                                        class="required">*</span></label>
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Enter Email Address" required="" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label class="control-label" for="message">Message <span class="required">*</span></label>
                                <textarea type="text" class="form-control" id="message" name="message" placeholder="Enter message" row="1"
                                    col="2" data-parsley-type="alphanum" required></textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-actions">
                    <div class="card-body">
                        <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        <a href="{{ Route::is('admin.admins.profile.edit') ? route('admin.index') : route('admin.admins.index') }}"
                            class="btn btn-dark">Cancel</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

@section('scripts')
    <script>
        const ajaxURL = "contacts";
    </script>
@endsection
