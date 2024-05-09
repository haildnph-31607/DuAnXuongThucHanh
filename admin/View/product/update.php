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

        textarea {
            
      
        }

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
            color: red;
            border: 1px solid blue;

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
        <h1>UPDATE PRODUCT</h1>
        
        <form action="?href=updateProduct" method="post" enctype="multipart/form-data">
          
            <select name="iddm" id="">
            <?php foreach($listCategory as $value):?>
                <option value="<?php echo $value['id'] ?>" <?php echo ($dataFillProduct['id_category']==$value['id']) ? 'selected' : '' ?>><?php echo $value['name'] ?></option>
                <?php endforeach ?>
            </select> <br> <br>
            <input type="hidden" name="id" value="<?php echo $dataFillProduct['id']?>">
            <input type="hidden" name="file" value="<?php echo $dataFillProduct['img']?>">
            <input type="text" name="code" placeholder="CODE PRODUCT..." class="ip" value="<?php echo $dataFillProduct['code_product']?>"> <br><br>
            <input type="text" name="name" placeholder="NAME PRODUCT..." class="ip" value="<?php echo $dataFillProduct['name']?>"> <br><br>
            <input type="number" name="price" placeholder="PRICE PRODUCT..." class="ip" value="<?php echo $dataFillProduct['price']?>"> <br><br>
            <img src="./<?php echo $dataFillProduct['price']?>" width="100px" alt="">
           <div class="area">
           <textarea name="description" id="" cols="30" rows="10" placeholder="Message..."><?php echo $dataFillProduct['description']?></textarea>

           </div><br>
            <div class='fileImg'>

           <label for="file" class='label'><ion-icon name="cloud-download-outline"></ion-icon></label>
            <input type="file" name='file' id="file" class="file">
           </div>
            <br>
            <input type="submit" value="Submit" class="update" name="submit">
             <input type="reset" value="Reset" class="deletes"> 
             <a href="index.php?href=product"><button disabled>List Product</button></a>
        </form>
    </div>
    <script type="text/javascript">
        CKEDITOR.replace('desciption')
        CKEDITOR.replace('exampleInputtext5')
    </script>
</body>

</html>
</body>
</html>