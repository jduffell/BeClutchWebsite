# PowerShell Deployment Script for BeClutch Website (DEV)
#
# This script copies files from the project's 'rec' directory to the
# local XAMPP server directory for development testing.

# --- Configuration ---

# The source directory containing your website files (relative to this script).
$sourceDir = ".\rec"

# The destination directory on your local XAMPP server.
$destinationDir = "c:\xampp\htdocs\beclutch\rec"

# --- Deployment Logic ---

Write-Host "Starting deployment to DEV environment..."

# 1. Check if the destination directory exists. If not, create it.
if (-not (Test-Path -Path $destinationDir)) {
    Write-Host "Destination directory does not exist. Creating it at: $destinationDir"
    New-Item -ItemType Directory -Force -Path $destinationDir
}

# 2. Copy files from source to destination.
#    -Recurse: Copies all subdirectories and files.
#    -Force: Overwrites existing files in the destination.
Copy-Item -Path "$sourceDir\*" -Destination $destinationDir -Recurse -Force

Write-Host "✅ Deployment successful!"
Write-Host "Files copied to: $destinationDir"