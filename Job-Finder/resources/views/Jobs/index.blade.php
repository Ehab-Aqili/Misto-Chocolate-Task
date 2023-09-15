<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Document</title>
    <style>
        
    </style>
</head>
<body>
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
<main class="container mb-5"> 
  <h1>Discover Jobs</h1>
  <div class="row" id="jobListings">
    @foreach($jobs as $job)
    <div class="col-lg-4 col-md-6 col-sm-12 g-5">
    <div class="card w-100 h-100" >
    <div class="card-body">
      <h5 class="card-title" style="font-size: 24px; font-weight: bold; color: #333;">{{$job->job_title}}</h5>
       <p class="card-text" style="font-size: 18px; color: #666;">{{$job->job_des}}</p>
       <h6 style="font-size: 20px; color: green;">Salary: ${{$job->salary}} per year</h6>      
       <a href="{{ route('Jobs.apple', ['id' => $job->id]) }}" class="btn btn-primary">Apply Now</a>
    </div>
    </div>
  </div>
  @endforeach

   </div>
</main>



<!-- This is another why to create a search function using JavaScript   -->

<!-- <script>
  document.addEventListener('DOMContentLoaded', function () {
    const jobListings = @json($jobs); // Assuming $jobs is an array of job listings in your Laravel view

    const jobSearchInput = document.getElementById('jobSearchInput');
    const jobListingsContainer = document.getElementById('jobListings');

    function filterJobListings(searchTerm) {
      const filteredJobs = jobListings.filter((job) => {
        return job.job_title.toLowerCase().includes(searchTerm.toLowerCase());
      });

      jobListingsContainer.innerHTML = '';

      filteredJobs.forEach((job) => {
        const jobCard = `
          <div class="col-lg-4 col-md-6 col-sm-12 g-5">
            <div class="card w-100 h-100">
              <div class="card-body">
                <h5 class="card-title">${job.job_title}</h5>
                <p class="card-text">${job.job_des}</p>
                <h6>${job.salary}</h6>
                <p class="card-text">${job.id}</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
              </div>
            </div>
          </div>
        `;
        jobListingsContainer.innerHTML += jobCard;
      });
    }

    jobSearchInput.addEventListener('input', function () {
      const searchTerm = jobSearchInput.value;
      filterJobListings(searchTerm);
    });

    filterJobListings('');
  });
</script> -->

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</html>