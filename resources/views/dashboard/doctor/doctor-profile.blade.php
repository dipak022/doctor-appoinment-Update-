@extends('layouts.doctor.app')

@section('details')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Slidder Page</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Slider Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">

        <!-- Horizontal Form -->
        <div class="card card-info">
          <div class="card-header">
            <h3 class="card-title"> Slider Add</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form class="add-contact-form" method="post" action="{{ route('doctor-profile-update')}}"enctype="multipart/form-data">    
              @csrf
            <div class="card-body">
              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="name" placeholder="Titel" value="{{$user->name}}">
                </div>
              </div>


              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="email" placeholder="Titel" value="{{$user->email}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">About Me</label>
                <div class="col-sm-10">
                  <textarea type="text" class="form-control"name="about" id="inputPassword3" placeholder="About Me">{{$user->about}}</textarea>
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Universiyu name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="university_name" placeholder="university name" value="{{$user->university_name}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Degree</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="degree" placeholder="degree" value="{{$user->degree}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">year</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="year" placeholder="year" value="{{$user->year}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Experience </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="experience" placeholder="Experience" value="{{$user->experience}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">experience year</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="experience_year" placeholder="experience year" value="{{$user->experience_year}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Awards date </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="award_date" placeholder="Awards date" value="{{$user->award_date}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Awards Name </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="award_name" placeholder="award name" value="{{$user->award_name}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">award description </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="award_description" placeholder="award description" value="{{$user->award_description}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Saturday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="saturday_time" placeholder="Saturday Time" value="{{$user->saturday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Sunday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="sunday_time" placeholder="Sunday Time" value="{{$user->sunday_time}}">
                </div>
              </div>

              

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Monday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="monday_time" placeholder="Monday Time" value="{{$user->monday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Tuesday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="tuesday_time" placeholder="Tuesday Time" value="{{$user->tuesday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Wednesday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="Wednesday_time" placeholder="Wednesday Time" value="{{$user->Wednesday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Thursday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="thursday_time" placeholder="Thursday Time" value="{{$user->thursday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Friday Time</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="friday_time" placeholder="Friday Time" value="{{$user->friday_time}}">
                </div>
              </div>

              <div class="form-group row">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputEmail3" name="price" placeholder="Price" value="{{$user->price}}">
                </div>
              </div>


              <div class="form-group row pull-right" style="margin-right:20px;">
                <div class="col-sm-10"style="margin-left:35px;">
                    <label for="inputPassword3" class="col-sm-2 col-form-label"></label>
                    <img style="height: 200px; width:200px;" src="{{asset($user->image)}}" id="image" alt="image" />
                </div>
              </div>
              <div class="form-group row">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Image</label>
                <div class="col-sm-10">
                  <input type="file" id="file"  name="image" onchange="readURLOne(this);"  accept="image"></input>
                </div>
              </div>

              

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-info">Update Profile </button>
              <button type="submit" class="btn btn-default float-right">Cancel</button>
            </div>
            <!-- /.card-footer -->
          </form>
        </div>

    </section>
    <!-- /.content -->
    <script type="text/javascript">
        function readURLOne(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                        .width(130)
                        .height(155);
                };
                reader.readAsDataURL(input.files[0]);
            }
         }
      </script>
@endsection