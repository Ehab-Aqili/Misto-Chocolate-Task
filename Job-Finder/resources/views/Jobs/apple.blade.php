<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
</head>
<body class="container-flued"> 
<nav class="navbar navbar-expand-lg bg-body-tertiary mb-5 ">
  <div class="container">
    <a class="navbar-brand" href="/">Job Finder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="{{route('Jobs.index')}}">Jobs</a>
        </li>
       
      </ul>
      <form class="d-flex" role="search" action="{{ route('Jobs.index') }}" method="GET">
    <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}" oninput="this.form.submit()">
</form>

    </div>
  </div>
</nav>
<div class="container">
 <h1>Job Title: {{ $job->job_title }}</h1>
    <p>Job Description: {{ $job->job_des }}</p>
 </div>
 <main class="d-flex align-items-center justify-content-center p-5">
 
 <form method="post" action="{{ route('Jobs.store') }}">
    @csrf
    <div class="mb-3 row">
        @if ($errors->any())
            <div class="alert alert-danger col-md-6 offset-md-3">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="mb-3 row">
        <input type="hidden" name="job_id" value="{{ $job->id }}">
        <label for="username" class="col-md-2 col-form-label">Full Name</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="username" name="full_name" aria-describedby="Username">
        </div>
        <label for="address" class="col-md-2 col-form-label">Address:</label>
        <div class="col-md-4">
            <input type="text" class="form-control" name="address" id="address">
        </div>
    </div>
    <div class="mb-3 row">
        <label class="col-md-2 col-form-label" for="inputGroupSelect01">Gender</label>
        <div class="col-md-4">
            <select class="form-select" id="inputGroupSelect01" name="gender">
                <option selected>Choose...</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
        </div>
        <label for="date__picker" class="col-md-2 col-form-label">Date of Birth:</label>
        <div class="col-md-4">
            <input type="date" id="date__picker" class="form-control" name="age" />
        </div>
    </div>
    <div class="mb-3 row">
        <label for="email" class="col-md-2 col-form-label">Email Address:</label>
        <div class="col-md-4">
            <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="contact_info">
            <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
        </div>
        <label for="exp__years" class="col-md-2 col-form-label">Years of Experience:</label>
        <div class="col-md-4">
            <input type="number" class="form-control" id="exp__years" name="years_exp">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="edu__info" class="col-md-2 col-form-label">Education Information:</label>
        <div class="col-md-4">
            <input type="text" class="form-control" id="edu__info" name="edu_info">
        </div>
        <label for="cv" class="col-md-2 col-form-label">Upload Your CV:</label>
        <div class="col-md-4">
            <input type="file" class="form-control" id="cv" aria-describedby="inputGroupFileAddon04" name="cv_file_path"
                aria-label="Upload">
        </div>
    </div>
    <div class="mb-5 row">
        <label for="more__info" class="col-md-2 col-form-label">Tell us more about you:</label>
        <div class="col-md-10">
            <textarea class="form-control" placeholder="More information about you (Your Cover Letter)..." id="more__info"
                style="height: 100px" name="more_info"></textarea>
        </div>
    </div>
    <div class="mb-3 row">
        <div class="col-md-4 offset-md-2">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
</form>

 </main>






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>