
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CV Refiner</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="static/style-index.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <?php include 'includes/header.php'; ?>
  </header>

<!-- Hero Section -->
<section class="hero text-white text-center d-flex align-items-center justify-content-center flex-column">
  <h1 class="display-4 fw-bold">Unlock Your Career Potential with AI-Powered CV Analysis</h1>
  <p class="lead mt-3">Our advanced algorithms analyze your CV against best practices and job trends, providing instant insights.</p>
  <a href="#upload-section" class="btn btn-warning btn-lg mt-4 shadow">Analyze My CV Now</a>
  
</section>

<!-- Value Proposition -->
<section class="container my-5">
  <div class="row text-center">
    <div class="col-md-4 mb-4">
      <i class="fas fa-magic fa-3x text-primary mb-2"></i>
      <h4>Instant Feedback</h4>
      <p>Upload your CV and receive a report in seconds.</p>
    </div>
    <div class="col-md-4 mb-4">
      <i class="fas fa-robot fa-3x text-success mb-2"></i>
      <h4>ATS Optimization</h4>
      <p>Ensure your CV is compatible with top Applicant Tracking Systems.</p>
    </div>
    <div class="col-md-4 mb-4">
      <i class="fas fa-lightbulb fa-3x text-warning mb-2"></i>
      <h4>Smart Suggestions</h4>
      <p>Get personalized tips to make your CV stand out.</p>
    </div>
  </div>
</section>

<!-- Upload Section -->
<section id="upload-section" class="bg-light py-5">
  <div class="container text-center">
    <h2 class="mb-4">Upload Your CV</h2>
    <form action="result.php" method="post" enctype="multipart/form-data" class="w-75 mx-auto">
      <div class="mb-3">
        <input type="file" name="resume" class="form-control form-control-lg" required>
      </div>
      <button type="submit" class="btn btn-primary btn-lg">Get Your Free Report</button>
    </form>
  </div>
</section>

<!-- Demo Section -->
<section class="container my-5 text-center">
  <h3>See a Sample Report</h3>
  <p>Explore what your personalized feedback might look like!</p>
  <a href="result.php" class="btn btn-outline-secondary">View Demo Report</a>
</section>

<!-- Before & After Slider -->
<section class="container my-5">
  <h3 class="text-center mb-4">Before & After CV Improvement</h3>
  <div class="row">
    <div class="col-md-6">
      <div class="p-3 bg-light border rounded">
        <h5><i class="fas fa-times text-danger"></i> Before</h5>
        <ul>
          <li>Overloaded with buzzwords</li>
          <li>Uses tables and images</li>
          <li>Generic summary</li>
        </ul>
      </div>
    </div>
    <div class="col-md-6">
      <div class="p-3 bg-white border rounded shadow-sm">
        <h5><i class="fas fa-check text-success"></i> After</h5>
        <ul>
          <li>ATS-friendly format</li>
          <li>Strong keyword usage</li>
          <li>Quantified achievements</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section class="bg-dark text-white py-5">
  <div class="container">
    <h3 class="text-center mb-4">What Our Users Say</h3>
    <div class="row">
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p>"Got more interviews after updating my CV using this tool!"</p>
          <footer class="blockquote-footer text-white">Amit K., <cite title="Job Seeker">Software Engineer</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p>"Super helpful feedback, especially with ATS optimization."</p>
          <footer class="blockquote-footer text-white">Sara P., <cite title="Job Seeker">Marketing Analyst</cite></footer>
        </blockquote>
      </div>
      <div class="col-md-4">
        <blockquote class="blockquote">
          <p>"I never knew design could hurt my CV. This was eye-opening!"</p>
          <footer class="blockquote-footer text-white">James W., <cite title="Job Seeker">Business Consultant</cite></footer>
        </blockquote>
      </div>
    </div>
  </div>
</section>

<!-- Social Proof -->
<section class="container text-center my-5">
  <h4>Trusted By Graduates From</h4>
  <div class="d-flex justify-content-center flex-wrap gap-4 mt-3">
    <img src="assets/images/Harvard.png" alt="Harvard" height="150">
    <img src="assets/images/mit.png" alt="MIT" height="150">
    <img src="assets/images/oxford.jpg" alt="Oxford" height="150">
    <img src="assets/images/stanford.png" alt="Stanford" height="150">
  </div>
</section>

<!-- How It Works -->
<section class="bg-light py-5">
  <div class="container">
    <h3 class="text-center mb-4">How It Works</h3>
    <div class="row text-center">
      <div class="col-md-4">
        <i class="fas fa-upload fa-2x text-primary mb-2"></i>
        <h5>Step 1</h5>
        <p>Upload your resume (PDF or DOCX)</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-cogs fa-2x text-success mb-2"></i>
        <h5>Step 2</h5>
        <p>Our AI analyzes it for structure, content & ATS compatibility</p>
      </div>
      <div class="col-md-4">
        <i class="fas fa-chart-bar fa-2x text-warning mb-2"></i>
        <h5>Step 3</h5>
        <p>You get actionable feedback & tips to boost your chances</p>
      </div>
    </div>
  </div>
</section>

<!-- Final CTA -->
<section class="text-center py-5">
  <h3>Ready to Land More Interviews?</h3>
  <a href="#upload-section" class="btn btn-success btn-lg mt-3">Upload Your CV Now</a>
</section>
</body>
  <!-- Footer -->
  <footer>
    <?php include 'includes/footer.php'; ?>
  </footer>

  <!-- Bootstrap JS, Popper.js, and jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- Custom JS -->
  

