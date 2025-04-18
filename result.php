<?php
$title = 'Analysis Result - CV Analyzer';


// Simulated analysis data
$analysis = [
  'Formatting Issues' => 'Your CV uses tables and images which may not be parsed correctly by ATS.',
  'Keyword Usage' => 'Limited use of relevant job-specific keywords. Try including terms from the job description.',
  'Length' => 'The CV is too long. Ideal length: 1–2 pages for most roles.',
  'Design' => 'Too much color and decorative fonts. Use a clean, professional style.',
  'Achievements' => 'Lacks quantified results. Use metrics to show impact.',
  'Sections Missing' => 'Missing “Skills” and “Professional Summary” sections.'
];

$suggestions = [
  'Replace image headers with text-based titles.',
  'Add a skills section listing your technical and soft skills.',
  'Incorporate metrics like “Increased sales by 25%”.',
  'Stick to one professional font (e.g., Arial, Calibri).',
  'Use strong action verbs like “Led”, “Developed”, “Achieved”.',
  'Match keywords with job descriptions from relevant listings.'
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Result</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="static/style-result.css" rel="stylesheet">
</head>
<body>

  <!-- Header -->
  <header>
    <?php include 'includes/header.php'; ?>
  </header>
<body>

<section class="container my-5">
  <h2 class="mb-4 text-center">Your CV Analysis Results</h2>

  <!-- ATS Optimization Issues -->
  <div class="card mb-4 shadow-sm">
    <div class="card-header bg-warning text-dark fw-bold">🚫 ATS Optimization Issues</div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <?php foreach ($analysis as $issue => $desc): ?>
          <li class="list-group-item">
            <strong><?= $issue ?>:</strong> <?= $desc ?>
          </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- Personalized Suggestions -->
  <div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-bold">✅ Personalized Feedback & Suggestions</div>
    <div class="card-body">
      <ul class="list-group list-group-flush">
        <?php foreach ($suggestions as $tip): ?>
          <li class="list-group-item"><?= $tip ?></li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>

  <!-- Downloadable Report -->
  <h5>Explore Good CV Templates</h5>
<div class="row mb-5">
  <div class="col-md-4">
    <div class="card shadow-sm">
      <img src="assets/templates/template1.png" class="card-img-top" alt="Template 1">
      <div class="card-body text-center">
        <a href="assets/templates/template1.docx" class="btn btn-outline-primary" download>Download Template 1</a>
      </div>
    </div>
  </div>
  <!-- Add more cards as needed -->
</div>
<!-- User Testimonials -->
<h5>What Our Users Say</h5>
<div id="cvCarousel" class="carousel slide mb-5" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active text-center">
      <blockquote class="blockquote">
        <p>"This tool helped me land interviews within a week. Amazing insights!"</p>
        <footer class="blockquote-footer">Riya, Marketing Manager</footer>
      </blockquote>
    </div>
    <div class="carousel-item text-center">
      <blockquote class="blockquote">
        <p>"The ATS score feature showed exactly where I needed improvement."</p>
        <footer class="blockquote-footer">Saurav, Software Engineer</footer>
      </blockquote>
    </div>
  </div>
</div>

  <!-- Call to Action -->
  <div class="text-center mt-4">
    <a href="index.php" class="btn btn-primary btn-lg">Upload Another CV</a>
  </div>
</section>
</body>

<?php include 'includes/footer.php'; ?>
</html>