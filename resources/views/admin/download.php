<?php

use App\Models\StudentApplication;
use App\Models\User;
use Illuminate\Http\Request;

$decoded = base64_decode($application->transcript_data);
$file = $application->user->first_name . " " . $application->user->last_name . " Transcript." . $application->transcript_file_ext;
file_put_contents($file, $decoded);

if (file_exists($file)) {
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($file).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($file));
    readfile($file);
    exit;
   
}