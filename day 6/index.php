<?php




//fopen we use to open a file
// $my_file = fopen("ds.txt", "w");

//fclose we use it to close a file // fclose($my_file);
//fread we use it to read a file // $myfile_name = "ds.txt";
// $my_file = fopen( $myfile_name, "r"); // $my_size = filesize($my_filename);
// $my_filedata = fread($my_file, $my_size);

//feof we use to print everything in a file $file = fopen("ds.txt", "r");

//feof we uwse to print everything in a file

// while(!feof($file)){
//     echo fgets($file). "<br>"
//     }

//     fclose($file);


// $my_file = fopen("ds.txt", "w");
// $my_text ="Dutugal School \n";
// fwrite($my_file, $my_text);

// $h = fopen("data.txt", "w++");
// fwrite($h, "TEst 1");

//a+ mose lets us write content in a file 

// $h = fopen("data.txt", "a");
// fwrite($h, "\n Add more lines to the file");
// fclose($h);

//file_put_contents is identic to fopen() fwrite(), fclose()
file_put_contents("test.txt", "Add ,ore text");
echo file_getcotents("test.txt")










?>
