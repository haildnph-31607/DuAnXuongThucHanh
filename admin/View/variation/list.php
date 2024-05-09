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
    }

    table {
        text-align: center;
        margin-top: 40px;
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
</style>
</head>

<body>
    <div class="ctn">
        <h1>Variation</h1>
        
            <a href="?href=addVariation"><button    >ADD VARIATION</button></a>
           

            <table>
                <thead>
                    <th>ID PR</th>
                    <th>ID COLOR</th>
                    <th>PRICE</th>
                    <th>DISCOUNT</th>
                    <th>QUANTITY</th>
                    <th>OPTION</th>
                </thead>
                <tbody>
                    <?php foreach ($listVariation as $value) : ?>
                        <tr>
                            <td><?php echo $value['id_product'] ?></td>
                            <td><?php echo $value['id_color'] ?></td>
                            <td>
                                <?php echo number_format( $value['price'],0,',','.') ?> VNĐ
                            </td>
                            <td><?php echo $value['discout'] ?></td>
                            <td><?php echo $value['quatity'] ?> </td>

                            <td><a href="?href=deleteVariationHard&id=<?php echo $value['id'] ?> "><button title="Xóa Cứng" onclick="return confirm('Bạn muốn xóa ?')" class="delete"><ion-icon name="trash-outline"></ion-icon></button></a>
                                <a href="?href=deleteVariationSoft&id=<?php echo $value['id'] ?>"><button title="Xóa Mềm" class="deletes"><ion-icon name="trash-bin-outline"></ion-icon></button></a>
                                <a href="?href=updateVariation&id=<?php echo $value['id'] ?>"><button title="Sửa" class="update"><ion-icon name="create-outline"></ion-icon></button></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
    </div>