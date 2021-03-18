<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<div class="ms2_total_cost">Вот он</div>


<button class="to-cart-btn1">кнопка1</button>
<button class="to-cart-btn2">кнопка2</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script type="text/javascript">
    $('.to-cart-btn1, .to-cart-btn2').click(function () {
            localStorage.setItem('lh_cart_sum', $(".ms2_total_cost").text());
            console.log($(".ms2_total_cost").text())
        }
    );
</script>
</html>

some changes