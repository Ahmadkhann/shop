@extends('backend.layouts.main')

@section('main-container')

<div class="row">
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Quick Example</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form>
              <div class="card-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Product Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                </div>
                <div class="form-group">
                  <label for="exampleInputCategory">Product Category</label>
                  <input type="text" class="form-control" id="exampleInputCategory" placeholder="Product Category">
                </div>
                <div class="form-group">
                    <label for="exampleInputPrice">Product Price</label>
                    <input type="text" class="form-control" id="exampleInputPrice" placeholder="Product Price">
                  </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="exampleInputFile">
                      <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text">Upload</span>
                    </div>
                  </div>
                </div>
                <!-- <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Insert</button>
              </div>
            </form>
          </div>
          <!-- /.card -->
          </div>

        </div>
      </div>
      <!-- /.row -->

      @endsection


   