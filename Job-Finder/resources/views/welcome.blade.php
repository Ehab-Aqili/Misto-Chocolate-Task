<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <title>Job Finder</title>
    <style> 

        .text-focus-in {
            -webkit-animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
            animation: text-focus-in 1s cubic-bezier(0.550, 0.085, 0.680, 0.530) both;
        }

        @-webkit-keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }
            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        @keyframes text-focus-in {
            0% {
                -webkit-filter: blur(12px);
                filter: blur(12px);
                opacity: 0;
            }
            100% {
                -webkit-filter: blur(0px);
                filter: blur(0px);
                opacity: 1;
            }
        }

        .left__side {
    background-color: rgba(128, 128, 128, 0.15); /* Gray with 10% opacity */
    padding: 20px;
    border-radius: 10px;
}
@media (max-width: 992px) {
            .img__container {
                display: none; 
    /* background-color: rgba(128, 128, 128, 0.15); Gray with 10% opacity */

            }
        }

    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container">
    <a class="navbar-brand" href="/">Job Finder</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('Jobs.index')}}">Jobs</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<main>
    <div class="container">
        <div class="row">
        <div class="col-lg-6 w-50 h-50 col-sm-12 mt-5 d-flex justify-content-center align-items-center ">
    <img class="w-50 h-50 img__container" src="https://img.freepik.com/premium-vector/job-search-job-finder-icon_617585-1145.jpg?" alt="" srcset="">
</div>

            <div style="display:block;" class="col-lg-6 col-sm-12 mt-5 left__side text-center">
                <h1 class="mb-4 text-focus-in">
                    Find Your Dream Job With Us!
                </h1>

                <a href="{{route('Jobs.index')}}" class="btn btn-primary btn-lg">Find Your Job</a>
                <h3 class="mt-4">
                    We are a team of professionals who have been working in the field for more than two decades.
                    We offer you jobs that match your skills.
                </h3>
            </div>
        </div>
        
        <div class="row mt-5" id="jobListings">
            <h1 class="mb-3">Most Recent Jobs</h1>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">

    <div class="card">
    <div class="card-body text-center">
        <h5 class="card-title" style="font-size: 24px; font-weight: bold; color: #333;">Software Developer</h5>
        <p class="card-text" style="font-size: 18px; color: #666;">Join our team and develop innovative software applications.</p>
        <h6 style="font-size: 20px; color: green;">Salary: $80,000 per year</h6>
        <a href="/" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">Apply Now</a>
    </div>
    </div>

    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card">
            <div class="card-body text-center">
                 <h5 class="card-title" style="font-size: 24px; font-weight: bold; color: #333;">Data Analyst</h5>
                <p class="card-text" style="font-size: 18px; color: #666;">Analyze and interpret data to help make business decisions.</p>
                <h6 style="font-size: 20px; color: green;">Salary: $66,000 per year</h6>
                <a href="/" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card">
            <div class="card-body text-center">
            <h5 class="card-title" style="font-size: 24px; font-weight: bold; color: #333;">Graphic Designer</h5>
                <p class="card-text" style="font-size: 18px; color: #666;">Create visual designs for various marketing materials..</p>
                <h6 style="font-size: 20px; color: green;">Salary: $70,000 per year</h6>
                <a href="/" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12 mb-4">
        <div class="card">
            <div class="card-body text-center">
            <h5 class="card-title" style="font-size: 24px; font-weight: bold; color: #333;">Marketing Manager</h5>
                <p class="card-text" style="font-size: 18px; color: #666;">Plan and execute marketing campaigns.</p>
                <h6 style="font-size: 20px; color: green;">Salary: $50,000 per year</h6>
                <a href="/" class="btn btn-primary">Apply Now</a>
            </div>
        </div>
    </div>

    

    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>
