<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CATEGORY</title>
    <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>


    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>
    <style>
      .ctn {
            margin-left: 320px;
            margin-top: 30px;
            border: 1px solid black;
            width: 1160px;
            border-radius: 4px;
            height: auto;
            position: relative;
        }

        .ctn>h1 {
            margin: 10px 0 0 20px;
        }

        .deletes {
            background-color: orange;
            color: white;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;

        }

        .update {
            background-color: lightblue;
            color: black;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;

        }

        a>button {
            background-color: lightgreen;
            color: black;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;
            display: inline;
        }

        form {
            margin-top: 50px;
            margin-bottom: 100px;
            margin-left: 50px;
        }

        .ip {
            width: 1000px;
            height: 35px;
            border: none;

            border-bottom: 1px solid black;
            background-color: transparent;

            padding: 20px;
            border-radius: 3px;

        }

        /* textarea {
            
      
        } */

        ::placeholder {
            font-weight: bold;

        }

        .fileImg {
            width: 490px;
            height: 70px;
            border: 3px solid white;
            background-color: gray;
        }

        .fileImg>.file {
            position: absolute;
            display: hidden;
        }

        .fileImg>label {
            font-size: 50px;
            position: absolute;
            z-index: 5;
            height: 65px;
            background-color: white;
            width: 486px;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
        }

        select {
            width: 1000px;
            height: 35px;
            color: black;
            border: 1px solid blue;
            border-radius: 5px;

        }
        .area{
            width: 1000px;
            background-color: transparent;
        }
        .area>textarea{
            background-color: transparent;

        }

    </style>
</head>
<body>
    <div class="ctn">
        <h1>Update Color</h1>
        <form action="?href=updateColor" method="post">
            <input type="text" name="color" placeholder="Name Color..." class="ip" value="<?php echo  $fixColor['color'] ?>"> <br><br>
          <input type="hidden" name="id" value="<?php echo  $fixColor['id'] ?>">
            <input type="submit" value="Submit" class="update" name="submit">
             <input type="reset" value="Reset" class="deletes"> 
             <a href="index.php?href=color"><button disabled>List Color</button></a>
        </form>
    </div>
</body>
</html>