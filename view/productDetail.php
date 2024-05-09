<style>
    .ctn {
        position: relative;
    }

    .rowAnd {
        display: flex;

    }

    .success {
        width: 300px;
        /* border: 1px solid black; */
        top: 300px;
        left: 600px;
        text-align: center;
        height: 100px;
        padding-top: 10px;
        border-radius: 9px;
        background-color: darkslategray;
        position: absolute;
        right: 100px;
        transition: all 1s;
    }

    .success>ion-icon {
        color: greenyellow;
        font-size: 30px;
    }

    .success>.yes {
        color: aquamarine;
    }

    .product {
        margin-top: 10px;
        margin-left: 100px;

        margin-right: 150px;
        height: 610px;

    }

    .img {
        border-right: 1px solid lightgray;

    }

    .namepr {
        font-size: 26px;
        font-weight: bold;
    }

    .colAnd1 {
        margin-left: 15px;
        border-right: 1px solid lightgray;
    }

    .code {
        font-size: 21px;
    }

    .thue {
        font-size: 21px;
    }

    .mota {
        width: 350px;
        max-width: 350px;

    }

    .variation {
        position: relative;

    }

    .label {
        background-color: white;

        border: 2px solid lightgray;
        width: 70px;
        padding: 10px 10px 10px 10px;
        position: absolute;
        margin-left: -20px;
        cursor: pointer;



    }

    input[type='radio']:checked+label {
        border: 2px solid blue;
        color: red;
        /* background-color: rgb(38, 59, 252); */
        /* border: 2px solid #09C6AB; */
    }

    .labelx {
        margin-left: 30px;
        margin-top: 20px;
    }

    .labelx1 {
        margin-left: 60px;
        margin-top: 20px;
    }

    .quantity {

        margin-top: 40px;
    }

    .quantilist {
        border: 3px solid black;
        margin-left: 30px;
        margin-top: 20px;
        height: 40px;
        width: 110px;
        padding-top: 6px;
        border-radius: 10px;
    }

    #minPlus {
        width: 40px;
        border: white;
        background-color: white;
        font-weight: bold;
        margin-left: 10px;
        cursor: pointer;
    }

    #maxPlus {
        width: 40px;
        border: white;
        background-color: white;
        font-weight: bold;
        margin-left: 25px;
        cursor: pointer;


    }

    #maxPlus:hover {
        color: red;
    }

    #minPlus:hover {
        color: red;
    }

    #valueQuantity {
        margin-left: 26px;
    }

    .form {


        width: 360px;
    }

    .form>form {
        margin-left: 20px;

    }

    .mess {
        width: 340px;

    }

    .ip {
        width: 350px;
        border: 2px solid black;
        border-radius: 4px;
    }

    .bt {
        width: 150px;
        height: 35px;
        border: none;
        background-color: rgb(3, 95, 64);
        border-radius: 4px;
        color: white;
        margin-left: 80px;
    }

    .bt1 {
        width: 150px;
        height: 35px;
        border: none;
        background-color: lightgray;
        border-radius: 4px;
        color: white;
        margin-left: 80px;
        padding: 5px 0 5px 25px;
        cursor: pointer;
    }

    textarea {
        width: 350px;
        border-radius: 4px;
    }

    #strike {
        font-size: 13px;
    }

    .colAnd1 {
        width: 420px;
    }

    #pricediscout {
        color: red;
    }

    .red {
        background-color: red;
        color: white;
        border-radius: 5px;
        font-size: 17px;
    }

    .quantityUC {
        color: red;
        font-weight: bold;
    }

    #img {
        opacity: 0.5;
        width: 500px;
        height: 600px;

    }

    .alert {
        width: 400px;
        height: 70px;
        display: flex;
        align-items: center;
        box-shadow: 0 0 5px #0ebaec;
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
        border-left: 5px solid aqua;
        top: 0;
        left: 0;
        position: absolute;
        transition: 1s all;
        border-top-left-radius: 20px;
        border-bottom-left-radius: 30px;
    }

    .alert>ion-icon {
        font-size: 25px;
        color: aqua;
    }

    .rating {
        display: inline-block;
    }

    .ratting {
        margin-top: 30px;
        margin-left: 100px;
    }

    h1 {
        margin: 60px 0 0 60px;
    }

    .counterW {
        margin: 0 0 0 60px;
    }

    .ratingW {
        position: relative;
        margin: 10px 0 0;
    }

    .ratingW li {
        display: inline-block;
        margin: 0px;
    }

    .ratingW li a {
        display: block;
        position: relative;
        /*margin:0 3px;  width:28px; height:27px;color:#ccc; background:url('../img/ico/icoStarOff.png') no-repeat; background-size:100%;*/
    }

    /*.ratingW li.on a {background:url('../img/ico/icoStarOn.png') no-repeat; background-size:100%;}*/

    .star {
        position: relative;
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .9em;
        margin-right: .9em;
        margin-bottom: 1.2em;
        border-right: .3em solid transparent;
        border-bottom: .7em solid #ddd;
        border-left: .3em solid transparent;
        /* Controlls the size of the stars. */
        font-size: 24px;
    }

    .star:before,
    .star:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        position: absolute;
        top: .6em;
        left: -1em;
        border-right: 1em solid transparent;
        border-bottom: .7em solid #ddd;
        border-left: 1em solid transparent;
        -webkit-transform: rotate(-35deg);
        transform: rotate(-35deg);
    }

    .star:after {
        -webkit-transform: rotate(35deg);
        transform: rotate(35deg);
    }


    .ratingW li.on .star {
        position: relative;
        display: inline-block;
        width: 0;
        height: 0;
        margin-left: .9em;
        margin-right: .9em;
        margin-bottom: 1.2em;
        border-right: .3em solid transparent;
        border-bottom: .7em solid #FC0;
        border-left: .3em solid transparent;
        /* Controlls the size of the stars. */
        font-size: 24px;
    }

    .ratingW li.on .star:before,
    .ratingW li.on .star:after {
        content: '';
        display: block;
        width: 0;
        height: 0;
        position: absolute;
        top: .6em;
        left: -1em;
        border-right: 1em solid transparent;
        border-bottom: .7em solid #FC0;
        border-left: 1em solid transparent;
        -webkit-transform: rotate(-35deg);
        transform: rotate(-35deg);
    }

    .ratingW li.on .star:after {
        -webkit-transform: rotate(35deg);
        transform: rotate(35deg);
    }
    #name{
        width: 1300px;
    }
    #mess{
        width: 1300px;
        height: 100px;
    }
    #submit{
        width: 170px;
        height: 40px;
        border: none;
        background-color:  rgb(3, 95, 64);
        color: white;
        border-radius: 5px; 
        cursor: pointer;
    }
    .startsb{
        color: orange;
        display: inline-block;
    }
    .viewComent{
        margin-top: 30px;
        width: 1300px;
        border-top: 1px solid lightgray;
        border-bottom: 1px solid lightgray;
        height: 500px;
        padding-bottom: 100px;
        overflow-y: auto;
    }
    .viewCmt{
        width: 1300px;
        /* border-left: 4px solid blue; */
        height: 40px;
        position: relative;

    }
    .viewCmt>ion-icon{
        font-size: 30px;
    }
    .viewCmt>.span{
        position: absolute;
        top: 5px;
        font-weight: bold;
    }
    .viewCmt>.span1{
        top: 4px;
        position: absolute;
        left: 170px;
        font-size: 11px;
    }
</style>
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js"></script>


    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script> -->
<div class="ctn">
    <div class="alert">
        <div class="process">

        </div>
        <ion-icon name="shield-checkmark-outline"></ion-icon> <span>Bạn chưa đăng nhập ?</span>
    </div>


    <section class="breadcrumb-area" style="height: 150px;">
        <div class="container">
            <style>

            </style>
            <div class="row">
                <div>
                    <h4 class="title">

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
                            <a href="">Product Detail</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- <script>
         var letAlert =document.querySelector('.alert');
        var constAlert = setTimeout(()=>{
          letAlert.style.right='-500px';
        },2500);
       </script>  -->
    </section>
    <div class="product">

        <div class="rowAnd">
            <div class="colAnd">

                <div class="img">
                    <img src="./Upload/<?php echo $getVariation[0]['img'] ?> " alt="" id="img">
                </div>
            </div>
            <div class="colAnd1">
                <?php if (isset($_COOKIE['yes'])) {
                    echo $_COOKIE['yes'];
                }
                ?>
                <div class="namepr">
                    <?php echo $getVariation[0]['name'] ?>
                </div>
                <div class="code">
                    Code : <?php echo $getVariation[0]['code'] ?>
                </div>
                <div class="thue">
                    <span id="pricePr">
                        Price Rent : <span style='color:red'><?php echo number_format($getVariation[0]['price'], 0, ',', '.') ?> VNĐ</span>
                    </span>
                    <span>
                        <strike id="strike"></strike>
                    </span>
                    <span id="pricediscout">

                    </span>
                    <span id="discout" class="red"></span>
                </div>
                <div class="mota">
                    <p> <?php echo $getVariation[0]['description'] ?></p>
                </div>
                <div class="variation">
                    Color

                    <span class="labelx">
                        <input type="radio" name="exp[]" id="label1">
                        <label for="label1" class="label"><?php echo $getVariation[0]['color'] ?></label>
                    </span>
                    <?php if (!empty($getVariation[1]['color'])) { ?>
                        <span class="labelx1">
                            <input type="radio" name="exp[]" id="label2">
                            <label for="label2" class="label"><?php echo $getVariation[1]['color'] ?></label>
                        </span>
                    <?php } ?>
                    <?php if (!empty($getVariation[2]['color'])) { ?>
                        <span class="labelx1">
                            <input type="radio" name="exp[]" id="label3">
                            <label for="label3" class="label"><?php echo $getVariation[2]['color'] ?></label>
                        </span>
                    <?php } ?>
                    <?php if (!empty($getVariation[3]['color'])) { ?>
                        <span class="labelx1">
                            <input type="radio" name="exp[]" id="label4">
                            <label for="label4" class="label"><?php echo $getVariation[3]['color'] ?></label>
                        </span>
                    <?php } ?>





                </div>
                <div class="quantity">
                    quantity
                    <div class="quantityUC" id="quantityUC"></div>
                    <div class="quantilist">
                        <span id="minPlus">-</span> <span id="valueQuantity">1</span><span id="maxPlus">+</span>
                    </div>
                </div>
            </div>
            <div class="form">
                <form action="?href=addNotification" method="post">
                    <h3 class="namepr">Rent Things</h3>
                    <input type="text" name="code" id="code" placeholder="Code Product..." class="ip" value="<?php echo $getVariation[0]['code'] ?>"> <br> <br>
                    <input type="text" name="color" id="colorProduct" placeholder="Color Product..." class="ip"><br><br>
                    <input type="hidden" name="numberProduct" id="numberProduct" placeholder="Quantity Product..." class="ip">
                    <input type="text" name="email" id="email" placeholder="Email User ..." class="ip"> <br> <br>
                    <input type="text" name="phoneNumber" id="phoneNumber" placeholder="phone Number...." class="ip"><br> <br>
                    <input type="text" name="NameUser" id="phoneNumber" placeholder="Name Usser...." class="ip"><br> <br>
                    <input type="hidden" name="idpr" value="<?php echo $getVariation[0]['id'] ?>">
                    <div class="mess">
                        <textarea name="description" id="" cols="30" rows="10" placeholder="Messenger....."></textarea>
                    </div>
                    <br>
                    <input type="hidden" name="idUser" value="<?php if (isset($_SESSION['user']['id'])) {
                                                                    echo $_SESSION['user']['id'];
                                                                } ?>">
                    <input type="hidden" name="img" value="">
                    <?php if (isset($_SESSION['user']['id'])) { ?>
                        <input type="submit" class="bt" value="Submit Now" name="submit">
                    <?php } else { ?>
                        <div class="bt1">Submit Now</div>
                    <?php } ?>

                </form>
            </div>
        </div>
    </div>
</div>
<hr>
<div class="ratting">
    <h3>Đánh Giá Sản Phẩm</h3>
    <div class="RatingStar">
        <p class="counterW">score: <span class="scoreNow">3</span> out of <span>5</span></p>
        <ul class="ratingW">
            <li class="on"><a href="javascript:void(0);">
                    <div class="star"></div>
                </a></li>
            <li class="on"><a href="javascript:void(0);">
                    <div class="star"></div>
                </a></li>
            <li class="on"><a href="javascript:void(0);">
                    <div class="star"></div>
                </a></li>
            <li><a href="javascript:void(0);">
                    <div class="star"></div>
                </a></li>
            <li><a href="javascript:void(0);">
                    <div class="star"></div>
                </a></li>
        </ul>
        <?php if(isset($checkUserNotify)){?>
            <?php if(is_array($checkUserNotify)){?>
        <form action="?href=product-detail&id=<?php echo $getVariation[0]['id'] ?>" method="post" >
        <input type="hidden" name="star" class="star_rating" >
        <input type="text" name="name" placeholder="User Name..." id="name" > <br> <br>
   <input type="hidden" name="idpr" value="<?php echo $getVariation[0]['id'] ?>" >
        <textarea name="messenger" id="mess" cols="30" rows="10" placeholder="Messenger ... "></textarea> <br> <br>
        <input type="submit" value="Submit" name="submit" id="submit" >
    </form>
    <?php }}?>

    </div>
    <div class="viewComent">
        <?php foreach($listRatiing as $value){?>
        <div class="viewCmt">
        <ion-icon name="person-circle-outline"></ion-icon> <span class="span" ><?php echo $value['name'] ?></span > <span class="span1" ><?php echo $value['date']?></span><br>
        <?php for($i=1 ; $i<=$value['rating'];$i++){?>
            <li class="startsb">
                &#9733;
            </li>
            <?php } ?>
            <p><?php echo $value['mesenger'] ?> </p>

            <?php } ?>
         
        
        </div>
    </div>
</div>
</div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var min = document.querySelector('#minPlus');
        var max = document.querySelector('#maxPlus');
        var colorProduct = document.querySelector('#colorProduct');
        var valueQuantity = 1;
        var maxQuantity = 0;
        // console.log(maxQuantity);
        // console.log(valueQuantity);
        var quantity = document.querySelector('#valueQuantity');

        function updateQuantity() {
            quantity.textContent = valueQuantity;
            min.disabled = (quantity === 1)
        }
        min.addEventListener('click', function() {
            if (valueQuantity > 1) {
                valueQuantity--;
                updateQuantity();
            }
        })
        max.addEventListener('click', function() {
            if (valueQuantity < maxQuantity) {
                valueQuantity++;
                updateQuantity();
            }
        })

        var strike = "<?php echo '<h1>halo</h1>' ?>";
        var priceElement = document.querySelector('#pricePr');
        <?php if (!empty($getVariation[2]['quantity'])) { ?>
            var imgFile3 = "<?php echo $getVariation[2]['vrImg'] ?>"
            var price3 = "<?php echo $getVariation[2]['price'] ?>"
            var quantity3 = "<?php echo $getVariation[2]['quantity'] ?>"
            var discout3 = "<?php echo $getVariation[2]['discout'] ?>"
            var color3 = document.getElementById('label3');
            var colorThree = "<?php echo $getVariation[2]['color'] ?>"
        <?php } ?>
        <?php if (!empty($getVariation[1]['quantity'])) { ?>
            var imgFile2 = "<?php echo $getVariation[1]['vrImg'] ?>"
            var price2 = "<?php echo $getVariation[1]['price'] ?>"
            var quantity2 = "<?php echo $getVariation[1]['quantity'] ?>"
            var discout2 = "<?php echo $getVariation[1]['discout'] ?>"
            var color2 = document.getElementById('label2');
            var colorTwo = "<?php echo $getVariation[1]['color'] ?>"
        <?php } ?>
        <?php if (!empty($getVariation[3]['quantity'])) { ?>
            var imgFile4 = "<?php echo $getVariation[3]['vrImg'] ?>"
            var price4 = "<?php echo $getVariation[3]['price'] ?>"
            var quantity4 = "<?php echo $getVariation[3]['quantity'] ?>"
            var discout4 = "<?php echo $getVariation[3]['discout'] ?>"
            var color4 = document.getElementById('label4');
            var colorFor = "<?php echo $getVariation[3]['color'] ?>"
        <?php } ?>
        var quantity1 = "<?php echo $getVariation[0]['quantity'] ?>"

        var imgFile1 = "<?php echo $getVariation[0]['vrImg'] ?>"
        var discout1 = "<?php echo $getVariation[0]['discout'] ?>"


        var price1 = "<?php echo $getVariation[0]['price'] ?>"


        var discout1 = "<?php echo $getVariation[0]['discout'] ?>"

        var colorOne = "<?php echo $getVariation[0]['color'] ?>"

        var color1 = document.getElementById('label1');


        var strike = document.querySelector('#strike');
        var pricediscout = document.querySelector('#pricediscout');
        var discout = document.querySelector('#discout');
        var quantityUC = document.querySelector('#quantityUC');
        var valueImg = document.querySelector('#img');
        imgOpasity = setTimeout(() => {
            valueImg.style.opacity = '1';
        }, 500);
        <?php if (isset($getVariation[0]['discout'])) { ?>
            <?php if ($getVariation[0]['discout'] > 0) { ?>
                color1.addEventListener('click', function() {
                    let chietkhau = price1 * discout1 / 100;
                    priceElement.textContent = "Price Rent :";
                    strike.textContent = String(price1).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND';
                    pricediscout.textContent = String(price1 - chietkhau).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND'
                    discout.textContent = '-' + discout1 + '%';
                    discout.classList.add('red');
                    valueImg.src = './Upload/' + imgFile1;
                    colorProduct.value = colorOne;
                    if (Number(quantity1) == 0) {
                        quantityUC.textContent = "Hết Hàng";
                    } else {
                        quantityUC.textContent = "Sản phẩm còn lại : " + quantity1 + " Váy";
                    }
                    maxQuantity = quantity1;
                    if (valueQuantity.textContent > quantity1) {
                        alert('Không được quá số lượng còn trong kho !');
                        valueQuantity.textContent = quantity1;
                        valueQuantity.textContent = quantity1;
                        // quantityProduct.value = quantityL;
                    }

                })
            <?php } ?>
        <?php } ?>
        <?php if (isset($getVariation[1]['discout'])) { ?>
            <?php if ($getVariation[1]['discout']) { ?>
                color2.addEventListener('click', function() {
                    let chietkhau = price2 * discout2 / 100;
                    priceElement.textContent = "Price Rent :";
                    strike.textContent = String(price2).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND';
                    pricediscout.textContent = String(price2 - chietkhau).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND'
                    discout.textContent = '-' + discout2 + '%';
                    discout.classList.add('red');
                    valueImg.src = './Upload/' + imgFile2;
                    colorProduct.value = colorTwo;
                    maxQuantity = quantity2;
                    if (Number(quantity2) == 0) {
                        quantityUC.textContent = "Hết Hàng";
                    } else {
                        quantityUC.textContent = "Sản phẩm còn lại : " + quantity2 + " Váy";
                    }
                    if (valueQuantity.textContent > quantity2) {
                        alert('Không được quá số lượng còn trong kho !');
                        valueQuantity.textContent = quantity2;
                        valueQuantity.textContent = quantity2;
                        // quantityProduct.value = quantityL;
                    }
                })
            <?php } ?>
        <?php } ?>
        <?php if (isset($getVariation[2]['discout'])) { ?>
            <?php if ($getVariation[2]['discout']) { ?>
                color3.addEventListener('click', function() {
                    let chietkhau = price3 * discout3 / 100;
                    priceElement.textContent = "Price Rent :";
                    strike.textContent = String(price3).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND';
                    pricediscout.textContent = String(price3 - chietkhau).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND'
                    discout.textContent = '-' + discout3 + '%';
                    discout.classList.add('red');
                    valueImg.src = './Upload/' + imgFile3;
                    colorProduct.value = colorThree;
                    maxQuantity = quantity3;
                    if (Number(quantity3) == 0) {
                        quantityUC.textContent = "Hết Hàng";
                    } else {
                        quantityUC.textContent = "Sản phẩm còn lại : " + quantity3 + " Váy";
                    }
                    if (valueQuantity.textContent > quantity3) {
                        alert('Không được quá số lượng còn trong kho !');
                        valueQuantity.textContent = quantity3;
                        valueQuantity.textContent = quantity3;
                        // quantityProduct.value = quantityL;
                    }
                })
            <?php } ?>
        <?php } ?>
        <?php if (isset($getVariation[3]['discout'])) { ?>
            <?php if ($getVariation[3]['discout'] > 0) { ?>arguments color4.addEventListener('click', function() {
                let chietkhau = price4 * discout4 / 100;
                priceElement.textContent = "Price Rent :";
                strike.textContent = String(price4).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND';
                pricediscout.textContent = String(price4 - chietkhau).replace(/(.)(?=(\d{3})+$)/g, '$1,') + ' VND'
                discout.textContent = '-' + discout4 + '%';
                discout.classList.add('red');
                valueImg.src = './Upload/' + imgFile4;
                colorProduct.value = colorFor;
                maxQuantity = quantity4;
                if (Number(quantity4) == 0) {
                    quantityUC.textContent = "Hết Hàng";
                } else {
                    quantityUC.textContent = "Sản phẩm còn lại : " + quantity4 + " Váy";
                }
                if (valueQuantity.textContent > quantity4) {
                    alert('Không được quá số lượng còn trong kho !');
                    valueQuantity.textContent = quantity4;
                    valueQuantity.textContent = quantity4;
                    // quantityProduct.value = quantityL;
                }
            })
        <?php } ?>
    <?php } ?>
    var alerts = document.querySelector('.success');



    var inter = setTimeout(() => {
        alerts.style.opacity = '0';
    }, 1500);
    var bt1 = document.querySelector('.bt1');
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


    })
    function ratingStar(star) {
        star.click(function() {
            var stars = $('.ratingW').find('li')
            stars.removeClass('on');
            var thisIndex = $(this).parents('li').index();
            for (var i = 0; i <= thisIndex; i++) {
                stars.eq(i).addClass('on');
            }

            putScoreNow(thisIndex + 1);
            $('.star_rating').val(i);
        });
    }

    function putScoreNow(i) {
        $('.scoreNow').html(i);
    }


    $(function() {
        if ($('.ratingW').length > 0) {
            ratingStar($('.ratingW li a'));
        }
    });
</script>

