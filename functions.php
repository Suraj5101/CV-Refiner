<?php
// Function to handle file upload
function uploadResume($file) {
    $allowedExtensions = ['pdf', 'docx'];
    $uploadDir = 'uploads/';
    $fileName = basename($file['name']);
    $filePath = $uploadDir . $fileName;
    $fileExtension = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
    
    // Check if file is of allowed type
    if (!in_array($fileExtension, $allowedExtensions)) {
        return ['error' => 'Only PDF and DOCX files are allowed.'];
    }

    // Move uploaded file to the uploads directory
    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        return ['success' => 'File uploaded successfully.', 'file_path' => $filePath];
    } else {
        return ['error' => 'Failed to upload file. Please try again.'];
    }
}

// Function to extract text from the uploaded resume
function extractTextFromResume($filePath) {
    $fileExtension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));

    // For PDF files
    if ($fileExtension == 'pdf') {
        return extractTextFromPDF($filePath);
    }

    // For DOCX files
    if ($fileExtension == 'docx') {
        return extractTextFromDOCX($filePath);
    }

    return '';
}

// Function to extract text from PDF files
function extractTextFromPDF($filePath) {
    require_once 'vendor/autoload.php'; // You need to install a PDF library (e.g., fpdi/fpdf or setasign/fpdf)
    $pdf = new \Smalot\PdfParser\Parser();
    $pdfDocument = $pdf->parseFile($filePath);
    return $pdfDocument->getText();
}

// Function to extract text from DOCX files
function extractTextFromDOCX($filePath) {
    $doc = new \PhpOffice\PhpWord\IOFactory::load($filePath);
    $text = '';
    foreach ($doc->getSections() as $section) {
        foreach ($section->getElements() as $element) {
            if ($element instanceof \PhpOffice\PhpWord\Element\TextRun) {
                $text .= $element->getText() . ' ';
            }
        }
    }
    return $text;
}

// Function for ATS Optimization Analysis
function analyzeATS($cvText) {
    $suggestions = [];

    // Check for missing key sections in CV
    if (strpos($cvText, 'Skills:') === false) {
        $suggestions[] = 'Missing skills section. Add relevant skills to your CV.';
    }

    if (strpos($cvText, 'Experience:') === false) {
        $suggestions[] = 'Missing work experience section. Employers look for past job roles.';
    }

    // Check for ATS-unfriendly formatting (complex layouts, images, etc.)
    if (strpos($cvText, 'image') !== false) {
        $suggestions[] = 'Avoid using images for text; ATS may not parse them correctly.';
    }

    // Check for common issues like inconsistent formatting
    if (preg_match('/\d{2}[-]\d{2}[-]\d{4}/', $cvText)) {
        $suggestions[] = 'Use a consistent date format (e.g., MM/YYYY).';
    }

    return $suggestions;
}

// Personalized feedback based on content
function generatePersonalizedFeedback($cvText) {
    $feedback = [];

    // Check for common issues and provide personalized advice
    if (strpos($cvText, 'References') === false) {
        $feedback[] = 'Consider adding a section for references at the end of your CV.';
    }

    // Check for keyword usage
    $keywords = ['JavaScript', 'PHP', 'SQL', 'Python']; // Example list of tech keywords
    $missingKeywords = array_diff($keywords, explode(' ', strtolower($cvText)));

    if (count($missingKeywords) > 0) {
        $feedback[] = 'Consider adding more relevant keywords like: ' . implode(', ', $missingKeywords);
    }

    // Generic suggestion
    if (strlen($cvText) < 300) {
        $feedback[] = 'Your CV seems to be on the shorter side. Consider adding more details about your experience and skills.';
    }

    return $feedback;
}
?>
