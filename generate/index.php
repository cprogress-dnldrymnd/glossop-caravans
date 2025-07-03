<?php 
//error_reporting(E_ERROR | E_PARSE);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>

</head>

<style type="text/css">
    body {
        font-family: calibri!important;
        font-size: 15px!important;
    }
</style>

<body>
    <div id="wrap">
        <div class="container">
            <div class="row">

                <form class="form-horizontal" action="" method="post" name="upload_excel" enctype="multipart/form-data">
                    <fieldset>

                        <!-- Form Name -->
                        <legend>Create templates through csv</legend>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Enter Folder Name</label>
                            <div class="col-md-4">
                                <input type="text" name="folder_name" class="input-large" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label" for="filebutton">Select File</label>
                            <div class="col-md-4">
                                <input type="file" name="file" id="file" class="input-large" accept=".csv" required>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="singlebutton">Create Templates</label>
                            <div class="col-md-4">
                                <input type="submit" name="submitButton" class="btn btn-primary button-loading">
                            </div>
                        </div>                      
                    </fieldset>
                </form>

                                
            </div>
            
            
        </div>
    </div>
</body>

</html>

<?php


if ( isset($_POST["submitButton"]) ) {

   if ( isset($_FILES["file"])) {

            //if there was an error uploading the file
        if ($_FILES["file"]["error"] > 0) {
            echo "Return Code: " . $_FILES["file"]["error"] . "<br />";

        }
        else {
              //Print file details
            
			 $file_parts = pathinfo($_FILES["file"]["name"]);
			 echo '<pre>';
			 print_r( $file_parts);
			 if($file_parts['extension'] != 'csv'){
				  echo "Only csv file is allowed: <br />";
				  exit();
			 }

                 //if file already exists
             if (file_exists("upload/" . $_FILES["file"]["name"])) {
           		 echo $_FILES["file"]["name"] . " already exists. ";
             }
             else {
    
            move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
           echo "Stored in: " . "upload/" . $_FILES["file"]["name"] . "<br />";
			
			
			$file_name = 'upload/'.$_FILES["file"]["name"];
			
			$f = fopen($file_name, "r");
	
			$folderName = $_POST['folder_name'];
			
	
			if (!file_exists($folderName)) {
				mkdir($folderName);
				
				while (($line = fgetcsv($f)) !== false) {
					$row = $line[0];    // We need to get the actual row (it is the first element in a 1-element array)
					$cells = explode(";",$row);
					echo '<pre>';
					print_r($line);
	
					//foreach ($cells as $cell) {
					foreach ($line as $cell) {
						if(empty($cell)){
							break;
						}
						echo $cell."<br/>";
						$templateFileName = $cell;						
						$templateFileName = trim(mb_strtolower(str_replace(" ","-",$templateFileName)));
						copy("used-caravans-template.html",$folderName."/".$templateFileName.".html");
						chmod($folderName,0755); 
	
						$myfile = fopen($folderName."/".$templateFileName.".html", "r");
						$txt = "Template";
	
                        $cell_value = $string = trim(preg_replace('/\s+/', ' ', $cell));;
						$contents = file_get_contents ($folderName."/".$templateFileName.".html");
						$contents = str_replace(array($txt), array($cell_value), $contents);
						file_put_contents($folderName."/".$templateFileName.".html", $contents);
						fclose($myfile);
					}
				}
				echo "<script>alert('Templates created')</script>";
			}
			else{
				echo "<script>alert('Folder already exist')</script>";
			}
			fclose($f);
			unlink($file_name);
			
			
            }
        }
     } else {
             echo "No file selected <br />";
     }
}
exit();


?>