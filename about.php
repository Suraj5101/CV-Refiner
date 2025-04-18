<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About us </title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="static/style-about.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <?php include 'includes/header.php'; ?>
  </header>
<div class="container mt-5">
  <div class="text-center mb-5">
    <h1 class="text-primary fw-bold">👩‍💻 Meet the Dream Team</h1>
    <p class="lead">We are a passionate group on a mission to transform how CVs are analyzed and optimized. Each of us brings something special to the table!</p>
  </div>

  <div class="row">
    <!-- Suraj Singh (Lead) -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/suraj.jpg" class="card-img-top" alt="Suraj Singh" style="height: auto; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Suraj Singh</h5>
                <p class="card-text"><strong>Project Lead</strong></p>
                <p>Suraj is the lead of the CV Analyzer project, responsible for overseeing the entire development process. He ensures the project stays on track and coordinates the efforts of the team to ensure the tool delivers value to users. His leadership drives the vision and growth of the platform.</p>
            </div>
        </div>
    </div>

    <!-- Soham Bhaumick -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/soham.jpg" class="card-img-top" alt="Soham Bhaumick" style="height: auto; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Soham Bhaumick</h5>
                <p class="card-text"><strong>Backend Developer</strong></p>
                <p>Soham is responsible for developing and maintaining the backend of the CV Analyzer. His expertise in server-side technologies ensures that the platform operates smoothly, providing users with a seamless experience during CV analysis and report generation.</p>
            </div>
        </div>
    </div>

    <!-- Shiya Shaw -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/shiya.jpg" class="card-img-top" alt="Shiya Shaw" style="height: auto; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Shiya Shaw</h5>
                <p class="card-text"><strong>Frontend Developer</strong></p>
                <p>Shiya focuses on the frontend development of the CV Analyzer, ensuring the user interface is interactive, responsive, and visually appealing. Her work brings the platform to life, making it both user-friendly and enjoyable to use.</p>
            </div>
        </div>
    </div>

    <!-- Sagarika Das -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/sagarika.jpg" class="card-img-top" alt="Sagarika Das" style="height: auto; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Sagarika Das</h5>
                <p class="card-text"><strong>UI/UX Designer</strong></p>
                <p>Sagarika ensures the CV Analyzer is not only functional but also intuitive and aesthetically pleasing. She creates engaging and easy-to-navigate user experiences that make interacting with the platform a breeze.</p>
            </div>
        </div>
    </div>

    <!-- Abhrajit Chakraborty -->
    <div class="col-md-4 mb-4">
        <div class="card shadow-sm">
            <img src="assets/images/abhrajit.jpg" class="card-img-top" alt="Abhrajit Chakraborty" style="height: auto; object-fit: cover;">
            <div class="card-body">
                <h5 class="card-title">Abhrajit Chakraborty</h5>
                <p class="card-text"><strong>Data Analyst</strong></p>
                <p>Abhrajit is responsible for analyzing and processing the data involved in the CV analysis process. He uses his expertise in data science to ensure that the CVs are assessed accurately, offering meaningful insights to users to improve their resumes.</p>
            </div>
        </div>
    </div>
</div>

  <div class="text-center mt-5">
    <a href="index.php" class="btn btn-outline-primary">← Back to Home</a>
  </div>
</div>

 <!-- Footer -->
 <footer>
    <?php include 'includes/footer.php'; ?>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
