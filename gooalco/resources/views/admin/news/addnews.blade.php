
@extends('layouts.adminLayout')
@section('adminContent')

<div class="container" style="margin-top:100px">
    <br />
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h4>Add new</h4>
                    <hr />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="/admin/posts" enctype="multipart/form-data" >
                        @csrf

                        <div class="form-group row">
                            <label for="title" class="col-4 col-form-label">Title</label>
                            <div class="col-8">
                                <input id="title"
                                       name="Title"
                                       placeholder="title"
                                       class="form-control here"
                                       type="text" />
                                <div class="valid-feedback">Looks good!</div>

                                <div class="invalid-feedback">
                                    Please title is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Auther" class="col-4 col-form-label">Auther</label>
                            <div class="col-8">
                                <input id="Auther"
                                       name="Auther"
                                       placeholder="Auther"
                                       class="form-control here"
                                       type="text" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Auther is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Date" class="col-4 col-form-label">Date</label>
                            <div class="col-8">
                                <input id="Date"
                                       name="Date"
                                       placeholder="Date"
                                       class="form-control here"
                                       type="date" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Price is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Body" class="col-4 col-form-label">Body</label>
                            <div class="col-8">
                                <textarea id="Body"
                                          name="Body"

                                          class="form-control here"></textarea>
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Price is required.
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="time" class="col-4 col-form-label">Image </label>
                            <div class="col-8">
                                <input id="image"
                                       name="imageURL"
                                       placeholder="Image Online URL"
                                       class="form-control here"
                                       type="file" />
                                <div class="valid-feedback">Looks good!</div>
                                <div class="invalid-feedback">
                                    Please Image is required.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-4 col-8">
                                <button name="submit" type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>

@endsection
