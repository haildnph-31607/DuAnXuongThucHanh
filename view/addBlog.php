
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>


<script>
    tinymce.init({
        selector: 'textarea'
    });
</script>
<style>
    .ctn{
        width: 1000px;
        height: auto;
        padding-bottom: 100px;
        margin-left: 260px;
        /* border: 1px solid lightgray; */
        margin-top: 20px;
    }
    .nameT{
        margin-left: 390px;
        margin-top: 20px;
    }
    .ip{
        width: 1000px;
    }
    .mess{

    }
    .fileImg {
            width: 490px;
            height: 70px;
            border: 3px solid white;
            background-color: gray;
            border: 1px solid lightgray ;
            margin-top: 10px;
            margin-left: 20px;
    }

        .fileImg>.file {
            position: absolute;
            display: hidden;
        }

        .fileImg>label {
            font-size: 23px;
            position: absolute;
            z-index: 5;
            height: 65px;
            background-color: white;
            width: 486px;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
        }
#submit{
    width: 150px;
    height: 35px;
    border-radius: 5px;
    border: none;
    background-color: rgb(3, 95, 64);
    margin-top: 20px;
    margin-left: 20px;
    color: white;
    cursor: pointer;
}
</style>
<section class="breadcrumb-area">
  
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title">
                   ADD Blog 
                </h4>
                <ul class="breadcrumb-list">
                    <li>
                        <a href="index.php">
                            <i class="fas fa-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <span><i class="fas fa-chevron-right"></i> </span>
                    </li>
                    <li>
                        <a href="?href=addBlog"> ADD Blog </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="ctn">
    <form action="?href=addBlog" method="post" enctype="multipart/form-data">
        <h3 class="nameT" >ADD BLOG </h3>
        <input type="text" name="title" placeholder="Title..." required class="ip" ><br><br>
        <textarea name="content" id="" cols="30" rows="10" placeholder="" required class="mess" aria-placeholder="Content Title..." ></textarea> <br> <br>
        <textarea name="contentDetail" id="" cols="30" rows="10" placeholder="" required class="mess" aria-placeholder="Content Detail..." ></textarea> <br> <br>
        <input type="hidden" name="id" value="<?php echo $_SESSION['user']['id'] ?>">
        <div class="fileImg">
            <label for="file">IMG TITLE</label>
            <input type="file" name="file" id="file" required>
        </div>
        <div class="fileImg">
            <label for="files">IMG CONTENT </label>
            <input type="file" name="files[]" id="files"  required multiple/>
        </div>
            <input type="submit" value="POST" name="submit" id="submit" >
    </form>
</div>