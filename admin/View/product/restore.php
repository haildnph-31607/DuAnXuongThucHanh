<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Product</title>
    <style>
        .ctn {
            margin-left: 320px;
            margin-top: 30px;
            border: 1px solid black;
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
            width: 70px;
            border-radius: 4px;
            height: 30px;
        }

        .deletes {
            background-color: orange;
            color: white;
            border: none;
            width: 70px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
        }

        .update {
            background-color: lightblue;
            color: black;
            border: none;
            width: 150px;
            border-radius: 4px;
            height: 30px;
            margin-left: 55px;
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
            background-color: lightgreen;
            border-radius: 4px;
            margin-left: 50px;
            margin-top: 30px;
            /* position: absolute; */

        }
    </style>
</head>

<body>
    <div class="ctn">
        <h1>Products</h1>
        <a href="?href=addProduct"><button>ADD PRODUCT</button></a><a href="?href=restoreProduct"><button>RESTORE</button></a>
        <table>
            <thead>
                <th>CODE</th>
                <th>PRODUCT</th>
                <th>IMG</th>
                <th>DESCRIPTION</th>
                <th>PRICE</th>
                <th>OPTION</th>
            </thead>
            <tbody>
                <?php foreach ($productRestore as $value) : ?>
                    <tr>
                        <td><?php echo $value['code_product'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td>
                            <img src="../upload/<?php echo $value['img'] ?>" alt="" width="100px">
                        </td>
                        <td><?php echo $value['description'] ?></td>
                        <td><?php echo number_format($value['price'],0,',','.') ?> VNĐ</td>

                        <td>
                            <a href="?href=restoreProduct&id=<?php echo $value['id'] ?>"><button class="update">Restore</button></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>