#!/bin/bash

# Specify the directory path to modify
dir_path="/var/www/html/africhild.newsite/CMS"

# Move to the specified directory
cd "$dir_path"

# Loop through all subdirectories in the directory
for folder in */; do
  # Get the current folder name
  folder_name=$(basename "$folder")
  # Prepend "c_" to the folder name
  new_folder_name="c_$folder_name"
  # Rename the folder with the new name
  mv "$folder" "$new_folder_name"
done
