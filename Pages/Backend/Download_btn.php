<?php
    $zip = new ZipArchive();
    $zipFile = "Files/all_pdf.zip";

    if ($zip ->open($zipFile,ZipArchive::CREATE | ZipArchive::OVERWRITE)=== TRUE){
        $files = ["Files/Resume.pdf", "Files/Cover_Letters.pdf"];
        foreach ($files as $file){
            if(file_exists($file)){
                $zip->addFile($file,basename($file));
            }
        }
    $zip ->close();

    header("Content-Type: application/zip");
    header("Conten-Diposition: attachment;filename=\"all_pdfs.zip\"");
    header("content-length:" . filesize($zipFile));
    readfile($zipFile);

    unlink($zipFile);
    exit;
    }else{
        echo "Failed to create ZIP File.";
    }
?>