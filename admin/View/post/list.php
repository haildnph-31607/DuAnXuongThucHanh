<!-- @extends 'main';
@section 'title' 'List Variation'; -->
<style>
    .ctn {
        margin-left: 320px;
        margin-top: 30px;
        /* border: 1px solid black; */
        width: 1160px;
        border-radius: 4px;
        height: auto;
        /* position: relative; */
    }

    .ctn>h1 {
        margin: 10px 0 0 20px;
    }

    .delete {
        background-color: red;
        color: white;
        border: none;
        /* width: 70px; */
        border-radius: 4px;
        height: 30px;
        width: 40px;
        border-radius: 4px;
        height: 35px;

        font-size: 20px;
        font-weight: bold;
        margin-left: -5px;
    }

    .deletes {
        background-color: orange;
        color: white;
        border: none;
        /* width: 70px; */
        border-radius: 4px;
        height: 30px;
        margin-left: 4px;
        width: 40px;
        border-radius: 4px;
        height: 35px;

        font-size: 20px;
        font-weight: bold;
    }

    .update {
        background-color: lightblue;
        color: black;
        border: none;
        width: 40px;
        border-radius: 4px;
        height: 35px;
        font-size: 20px;
        font-weight: bold;
        /* margin-left: px; */
        margin-left: 3px;

    }

    th,
    tr {
        width: 290px;
        border: 1px solid gray;
    }

  
    table, th, td{
    /* border-top:1px solid #ccc; */
    border-bottom:1px solid #ccc;
}
table{
    /* border-collapse:collapse; */
    text-align: center;
        margin-top: 70px;
        margin-bottom: 40px;
}

    a>button {
        width: 200px;
        height: 35px;
        border: none;
        background-color: rgb(4, 90, 4);
        border-radius: 4px;
        /* margin-left: 50px; */
        margin-top: 30px;
        color: white;
        margin-left: 20px;
        /* position: absolute; */
        cursor: pointer;

    }

    form {
        margin: 10px 0 0 50px;
    }

    form>select {
        width: 200px;
        height: 35px;
        border: 2px solid blue;
    }

    form>button {
        width: 70px;
        font-size: 24px;
        height: 35px;
        background-color: rgb(4, 90, 4);
        color: white;
        cursor: pointer;
        border: none;
        border-radius: 3px;
    }
    form>input[type='text']{
        padding-top: 15px;
        width: 200px;
    }
    thead {
        background-color: black;
        height: 40px;
        color: white;
    }
    ::placeholder{
        font-size: 17px;
        margin-bottom: 10px;
    }
    .options{
        position: absolute;
        right:190px ;
    }
    .form-export{
        position: absolute;
        right: 40px;
        top: 210px;
    }
    .form-export>button{
        width: 135px;
        font-size: 17px;
        height: 35px;
    }
</style>
</head>

<body>
    <div class="ctn">
        <h1>POST</h1>
        <form action="?href=post" method="post">
            <input type="text" placeholder="Title..." name="titleSearch">

           <button type="submit" name="search-outline"><ion-icon name="search-outline"></ion-icon></button>
           </form>
        
            <table>
                <thead>
                    <th>TITLE</th>
                    <th>CONTENT</th>
                    <th>CONTENT DETIAL</th>
                    <th>IMG</th>
                    <th>DATE</th>
                    <th>OPTION</th>
                </thead>
                <tbody>
                    <?php foreach ($listBlog as $value) : ?>
                        <tr>
                            <td><?php echo $value['title'] ?></td>
                            <td><?php echo $value['content'] ?></td>
                           
                            <td><?php echo $value['contentDetail'] ?></td>
                             <td>
                                <img src="../<?php echo $value['img'] ?>" alt="" width="100px">
                            </td>
                            <td><?php echo $value['date'] ?> </td>

                            <td ><a href="?href=deleteBlog&id=<?php echo $value['id'] ?> "><button title="Xóa Cứng" onclick="return confirm('Bạn muốn xóa ?')" class="delete"><ion-icon name="trash-outline"></ion-icon></button></a>
                               
                                <a href="?href=updateBlog&id=<?php echo $value['id'] ?>"><button title="Sửa" class="update"><ion-icon name="create-outline"></ion-icon></button></a>
                            </td>
                            
                        </tr>
                        
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>