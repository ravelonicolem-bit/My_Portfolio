<?php
$zip = new ZipArchive();

// go up 2 levels (../../) to reach PORTFOLIO/Files
$filesDir = __DIR__ . "/Files";
$zipFile = $filesDir . "all_pdf.zip"; 

// Make sure the Files directory exists and is writable
if (!is_dir($filesDir)) {
    die("❌ The directory 'Files' does not exist at: $filesDir");
}
if (!is_writable($filesDir)) {
    die("❌ The directory 'Files' is not writable. Check permissions.");
}

if ($zip->open($zipFile, ZipArchive::CREATE | ZipArchive::OVERWRITE) === TRUE) {
    $files = [
        $filesDir . "/RAVELO_ RESUME.pdf",
        $filesDir . "/Certificate_of_Completion.pdf"
    ];

    foreach ($files as $file) {
        if (file_exists($file)) {
            $zip->addFile($file, basename($file));
        } else {
            echo "⚠ File not found: $file<br>";
        }
    }
    $zip->close();

    if (file_exists($zipFile) && filesize($zipFile) > 22) {
        header("Content-Type: application/zip");
        header("Content-Disposition: attachment; filename=all_pdfs.zip");
        header("Content-Length: " . filesize($zipFile));
        readfile($zipFile);
        unlink($zipFile); // delete after download
        exit;
    } else {
        echo "❌ ZIP file is empty or missing.";
    }
} else {
    echo "❌ Failed to create ZIP File at: $zipFile";
}
?>
