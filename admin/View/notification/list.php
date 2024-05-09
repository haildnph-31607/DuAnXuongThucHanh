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


    table,
    th,
    td {
        /* border-top:1px solid #ccc; */
        border-bottom: 1px solid #ccc;
    }

    table {
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

    form>input[type='text'] {
        padding-top: 15px;
        width: 200px;
    }

    thead {
        background-color: black;
        height: 40px;
        color: white;
    }

    ::placeholder {
        font-size: 17px;
        margin-bottom: 10px;
    }

    .options {
        position: absolute;
        right: 190px;
    }

    .form-export {
        position: absolute;
        right: 40px;
        top: 210px;
    }

    .form-export>button {
        width: 135px;
        font-size: 17px;
        height: 35px;
    }

    .submit {
        width: 130px;
        height: 30px;
        background-color: lightblue;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .submit1 {
        width: 130px;
        height: 30px;
        background-color: lightgray;
        color: white;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        padding-top: 5px;
        margin-left: 15px;
    }

    #select {
        width: 150px;
        height: 30px;
        background-color: rgb(4, 90, 4);
        color: white;
        border-radius: 5px;
    }

    .alert {
        width: 400px;
        height: 70px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 5px lightcoral;
        position: fixed;
        top: 100px;
        right: -500px;
        background-color: white;
        font-weight: bold;

        border-radius: 10px;

        transition: all .6s;

    }

    .process {
        height: 70px;
        border-left: 5px solid red;
        top: 0;
        left: 0;
        position: absolute;
        transition: 1s all;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 30px;
    }

    .alert>ion-icon {
        font-size: 25px;
        color: red;
        margin-left: 20px;
    }
</style>
<?php

use App\Models\NotificationModel;

require_once '../models/NotificationModel.php';
?>
</head>

<body>
    <div class="ctn">
        <div class="alert">
            <div class="process">

            </div>
            <ion-icon name="close-circle-outline"></ion-icon> <span> Đã hết hạn ?</span>
        </div>
        <h1>NotifyCation</h1>
        <form action="?href=notification" method="post">
            <select name="id" id="">
                <option value="0">Chờ Xác Nhận</option>
                <option value="1">Đang Thuê</option>
                <option value="2">Hết Hạn</option>
                <option value="3">Không Liên Lạc Được</option>
            </select>

            <button type="submit" name="search-outline"><ion-icon name="search-outline"></ion-icon></button>
        </form>


        <table>
            <thead>
                <th>NAME</th>
                <th>MESS</th>
                <th>EMAIL</th>
                <th>PHONE</th>
                <th>CODE </th>
                <th>COLOR</th>
                <th>OPTION</th>
                <th>STATUS</th>
                <th>UPDATE</th>
            </thead>
            <tbody>
                <?php foreach ($listNotification as $value) : ?>
                    <form action="?href=notification" method="post">
                        <tr>
                            <td><?php echo $value['name_user'] ?></td>
                            <td><?php echo $value['messeger'] ?></td>
                            <td>
                                <?php echo $value['email'] ?>
                            </td>
                            <td><?php echo $value['phone_number'] ?></td>
                            <td><?php echo $value['code_product'] ?> </td>
                            <td><?php echo $value['color'] ?></td>
                            <td>
                                <?php $idOP = $value['option'];
                                $id_F = $value['option'];
                                $id = $value['id_user'];
                                $date = date('Y-m-d H:i:s');
                                $notis = new NotificationModel();
                                if ($id_F == 3) {
                                    $notis->deleteNotify($id);
                                    $notis->setNotifical($id, $date);
                                }
                                if ($id_F == 2) {
                                    // $notis->deleteNotify($id);
                                    $notis->setNotificalS($id,$date);
                                }
                                $getStatus = $notis->getNotify($idOP);
                                ?>
                                <?php echo $getStatus ?>
                            </td>


                            <td>
                                <input type="hidden" name="id" value=" <?php echo $value['id'] ?>">
                                <select name="idStatus" id="select">
                                    <option value="0" <?php echo ($value['option'] == 0) ? 'selected' : '' ?>>Chờ Xác Nhận</option>
                                    <option value="1" <?php echo ($value['option'] == 1) ? 'selected' : '' ?>>Đang Thuê</option>
                                    <option value="2" <?php echo ($value['option'] == 2) ? 'selected' : '' ?>>Hết Hạn</option>
                                    <option value="3" <?php echo ($value['option'] == 3) ? 'selected' : '' ?>>Không Liên Lạc Được</option>
                                </select>
                            </td>
                            <td>
                                <?php if ($value['option'] == 2) { ?>
                                    <div class="submit1">UPDATE</div>
                                <?php } else { ?>
                                    <input type="submit" value="UPDATE" name="submit" class="submit">
                                <?php } ?>


                            </td>




                        </tr>
                    </form>

                <?php endforeach ?>
            </tbody>
        </table>
        <script>
            var bt1 = document.querySelector('.submit1');
            var alert = document.querySelector('.alert');
            var process = document.querySelector('.process');
            bt1.addEventListener('click', () => {
                alert.style.right = '20px';
                let leng = 70
                let run = setInterval(() => {
                    process.style.height = leng + 'px';
                    leng -= 5;
                    if (leng <= -10) {
                        clearInterval(run);
                        alert.style.right = '-500px';
                    }
                }, 250)
            })
        </script>
    </div>