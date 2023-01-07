
    function mua1() {
        var pro = document.getElementById('pro');
        var price = pro.getAttribute('data-price');
        var quantity = qty1.value;
        var amount = price * quantity;
        document.getElementById("td1").innerHTML = amount;
    }
    function mua2() {
        var pri = document.getElementById('pri');
        var price1 = pri.getAttribute('data-price1');
        var quantity1 = qty2.value;
        var amount1 = price1 * quantity1;
        document.getElementById("td2").innerHTML = amount1;
    }
    function mua3() {
        var pre = document.getElementById('pre');
        var price2 = pre.getAttribute('data-price2');
        var quantity2 = qty3.value;
        var amount2 = price2 * quantity2;
        document.getElementById("td3").innerHTML = amount2;
    }

    function xoa1(){
        dem = 0;
        document.getElementById('td1').innerHTML = dem;
    }

    function xoa2(){
        dem = 0;
        document.getElementById('td2').innerHTML = dem;
    }

    function xoa3(){
        dem = 0;
        document.getElementById('td3').innerHTML = dem;
    }

    function dong_y(){
        var pro = document.getElementById('pro');
        var price = pro.getAttribute('data-price');
        var quantity = qty1.value;
        var amount = price * quantity;

        var pri = document.getElementById('pri');
        var price1 = pri.getAttribute('data-price1');
        var quantity1 = qty2.value;
        var amount1 = price1 * quantity1;

        var pre = document.getElementById('pre');
        var price2 = pre.getAttribute('data-price2');
        var quantity2 = qty3.value;
        var amount2 = price2 * quantity2;

        var sum = amount + amount1 + amount2

        document.getElementById("tong").innerHTML = sum;
    }

    function xoa_gio(){
        dem = 0;
        document.getElementById("tong").innerHTML = dem;
        document.getElementById('td1').innerHTML = dem;
        document.getElementById('td2').innerHTML = dem;
        document.getElementById('td3').innerHTML = dem;
    }

    
