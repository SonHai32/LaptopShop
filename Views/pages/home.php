<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Ducky - Thời trang giới trẻ</title>
    <link href="./style/Font-Awsome/css/all.css" rel="stylesheet" />
    <link rel="stylesheet" href="./style/style.css" type="text/css" />
    <script src="./script/jquery-3.4.1.min.js" charset="utf-8"></script>
    <script charset="utf-8" src="../../script/ProductList.js"></script>
    <script charset="utf-8" src="../../script/search.js"></script>
    <script charset="utf-8" src="../../script/countdown.js"></script>
    <script charset="utf-8" src="../../script/banner.js"></script>
    <script charset="utf-8">
      // Dùng để Display Các sản phầm ra trang web
      $(document).ready(function () {
        //Lấy các sản phẩm giảm giá từ ProductList
        let SALE_PRODUCTS = [
          ...PRODUCTS.BACK_PACK.filter((backPack) => {
            return backPack.SALE;
          }),
          ...PRODUCTS.TSHIRT.filter((tshirt) => {
            return tshirt.SALE;
          }),
          ...PRODUCTS.SHOES.filter((shoes) => {
            return shoes.SALE;
          }),
          ...PRODUCTS.HOODIE.filter((hoodie) => {
            return hoodie.SALE;
          }),
          ...PRODUCTS.PANTS.filter((pant) => {
            return pant.SALE;
          }),
        ];
        for (let i = 0; i < SALE_PRODUCTS.length; i++) {
          //display các sản phẩm giảm giá
          $(".sale-item>a")[i].setAttribute(
            "href",
            "./page/product.html?tag=" +
              SALE_PRODUCTS[i].TAG +
              "&id=" +
              SALE_PRODUCTS[i].ID
          );
          $(".sale-item>a>img")[i].setAttribute(
            "src",
            SALE_PRODUCTS[i].IMG_URLS[0].slice(
              1,
              SALE_PRODUCTS[i].IMG_URLS[0].length
            )
          );
          $(".sale-item-id")[i].innerHTML = SALE_PRODUCTS[i].NAME;
          $(".sale-item-price")[i].innerHTML = SALE_PRODUCTS[i].SALE_PRICE;

          //Gắn nhãn giảm giá
          let sale_label = document.createElement("div");
          sale_label.setAttribute("class", "sale-label");
          sale_label.innerHTML = "off";
          $(".sale-item")[i].appendChild(sale_label);
        }
      });
    </script>
  </head>
  <body>
    <div class="wrapper">
      <div class="lock-screen">
        <div class="search-container">
          <div class="search-bar flex flex-row space-around align-center">
            <i class="fal fa-search"></i>
            <input
              type="text"
              name=""
              placeholder="Tìm kiếm"
              class="search-bar-input"
            />
            <div class="search-list flex flex-column">
              <div class="notfound"></div>
            </div>
          </div>
          <div class="close-search">
            <i class="fal fa-times"></i>
          </div>
        </div>
      </div>

      <div class="banner">
        <div class="switch-banner prev-banner">
          <i class="fal fa-chevron-left"></i>
        </div>
        <div class="switch-banner next-banner">
          <i class="fal fa-chevron-right"></i>
        </div>
      </div>
      <!-- Editable Region -->
      <div class="main-container flex flex-row">
        <div class="menu-items flex flex-column">
          <h1>Menu</h1>
          <div class="item item-ao flex flex-row space-between">
            <a href="./page/Clothes.html">Áo</a>
            <i class="far fa-chevron-right"></i>
            <ul class="list-ao">
              <li><a href="./page/T-Shirt.html">T-SHIRT</a></li>
              <li><a href="./page/Hoodie.html">HOODIE</a></li>
            </ul>
          </div>
          <div class="item item-quan flex flex-row space-between align-center">
            <a href="./page/Trouser.html">Quần</a>
            <i class="far fa-chevron-right"></i>
            <ul class="list-quan">
              <li><a href="./page/Pants.html">Quần Dài</a></li>
              <li><a href="./page/Shorts.html">Quần short</a></li>
            </ul>
          </div>
          <div class="item item-balo flex flex-row space-between">
            <a href="./page/Back_Pack.html">Balo</a>
          </div>
          <div class="item item-giay flex flex-row space-between">
            <a href="./page/Shoes.html">Giày</a>
          </div>
          <div class="item flex flex-row space-between">
            <a href="./page/Sale.html">Khuyến mãi</a>
          </div>
        </div>
        <div class="sale-items">
          <div class="sale-header flex align-center">
            <p>Sản phẩm bán chạy</p>
          </div>
          <div class="sale-list-items flex flex-row space-between align-center">
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>

            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>

            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
          </div>

          <div class="sale-list-items flex flex-row space-between align-center">
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>

            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>

            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
            <div class="sale-item flex flex-column space-between align-center">
              <a href=""><img src="" alt="" /></a>
              <p class="sale-item-id"></p>
              <p class="sale-item-price"></p>
              <p class="sale-item-add">Thêm vào giỏ hàng</p>
            </div>
          </div>
        </div>
      </div>
      <section class="payment-and-delivery flex flex-row justify-center">
        <div class="payment">
          <i class="far fa-credit-card"></i>
          <div class="payment-content flex flex-column">
            <p>Thanh toán trực tiếp nhanh chóng và an toàn</p>
            <p>với các đơn vị uy tín</p>
            <h2>Hình thức thanh toán</h2>
            <div class="payment-icon flex flex-row space-around">
              <i class="fab fa-cc-visa"></i>
              <i class="fab fa-cc-paypal"></i>
              <i class="fab fa-cc-mastercard"></i>
              <i class="fab fa-cc-jcb"></i>
            </div>
          </div>
        </div>
        <div class="delivery">
          <i class="far fa-plane"></i>
          <div class="delivery-content">
            <p>
              Chúng tôi hợp tác với các đối tác vận chuyển lớn trên toàn quốc
              như GHN Giaohangtietkiem Viettel Post VietNam Post.Chúng tôi cam
              kết việc giao hàng đúng với chất luọng và thời gian quy định
            </p>
          </div>
        </div>
      </section>
      
    </div>
  </body>
</html>
