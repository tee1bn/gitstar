<!DOCTYPE html>
<html>
    <head>
		<title>Upload Multiple Images Using jquery and PHP</title>
		<!-------Including jQuery from google------>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="script.js"></script>
		
		<!-------Including CSS File------>
        <link rel="stylesheet" type="text/css" href="style.css">
    <body>
        <div id="maindiv">

            <div id="formdiv">
                <h2>Multiple Image Uploader</h2>
                <form enctype="multipart/form-data" action="" method="post">
                    Allowed extension: JPEG, PNG and JPG. Image Size Should Be Less Than 900 KB.
                    <hr/>
                    <div id="filediv"><input name="file[]" type="file" id="file"/></div><br/>
           
                    <input type="button" id="add_more" class="upload" value="Add More"/>
                    <input type="submit" value="Upload" name="submit" id="upload" class="upload"/>
                </form>
                <br/>
                <br/>
				<!-------Including PHP Script here------>
                <?php include "upload.php"; ?>
            </div>
            
        </div>
    </body>
</html>