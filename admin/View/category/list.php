<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Category</title>
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
            width: 70px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
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
        <h1>Categorys</h1>
        <a href="?href=addCategory"><button>ADD CATEGORY</button></a><a href="?href=restoreCategory"><button>RESTORE</button></a>
        <table>
            <thead>
                <th>Click</th>
                <th>ID</th>
                <th>CATEGORYS</th>
                <th>OPTION</th>
            </thead>
            <tbody>
                <?php foreach ($listCategory as $value) : ?>
                    <tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td><?php echo $value['id'] ?></td>
                        <td><?php echo $value['name'] ?></td>
                        <td><a href="?href=deleteCategoryHard&id=<?php echo $value['id'] ?>"><button onclick="return confirm('Bạn muốn xóa ?')" class="delete">Delete</button></a>
                            <a href="?href=deleteCategorySoft&id=<?php echo $value['id'] ?>"><button class="deletes">Erase</button></a>
                            <a href="?href=updateCategory&id=<?php echo $value['id'] ?>"><button class="update">Update</button></a>
                        </td>
                    </tr>
                <?php endforeach ?>
            </tbody>
        </table>
    </div>
</body>

</html>