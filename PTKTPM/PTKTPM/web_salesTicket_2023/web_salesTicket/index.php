<!DOCTYPE html>
<html>
    <head>
        <title id="hdtitle">CINESTAR - Hệ thống Rạp chiếu phim giá rẻ, hiện đại bậc nhất</title>
        <link rel="SHORTCUT ICON" href="https://www.cinestar.com.vn/catalog/view/theme/default/images/favicon.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="hoivadap.css">
        <link rel="database" href="KetnoiDB.php">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
        <style>
            .AnPhim{
                display: none;
            }
            /* ----------index-------------- */
            /* Đảm bảo rằng các phần tử có độ rộng và chiều cao cố định */
            .slide-slidebox {
                width: 100%; /* Điều này sẽ đảm bảo rằng slider nằm trọn trong khung của nó */
                margin-left: 100px;
            }

            .slide-item {
                width: 30%; /* Số này sẽ đảm bảo 3 ảnh cùng hiển thị trên một hàng */
                display: flex;
            }

            .promotion-pic img {
                max-width: 95%; /* Đảm bảo ảnh không vượt quá kích thước của container */
            }

        </style>
    </head>
    <body>
        <div id="quangcaoModal" class="modal">
            <div class="modal-content">
                <span class="close" onclick="closeAd()">&times;</span>
                <img src="images/imgQC.jpg" alt="Quảng cáo">
            </div>
        </div>        
        <script>
            // Đảm bảo tài liệu đã tải xong
            document.addEventListener('DOMContentLoaded', function() {
                // Hiển thị quảng cáo khi tài liệu tải xong
                showAd();
            });

            function showAd() {
                var quangcaoModal = document.getElementById('quangcaoModal');
                quangcaoModal.style.display = 'block';
                // Đặt z-index của modal quảng cáo lớn hơn tất cả các phần khác trên trang web
                quangcaoModal.style.zIndex = '9999';
                // Ẩn hoạt động trang web bằng cách thêm một lớp CSS hoặc bất kỳ cách nào khác tùy theo cấu trúc trang web
                // Ví dụ: document.body.classList.add('modal-open');
            }

            function closeAd() {
                var quangcaoModal = document.getElementById('quangcaoModal');
                quangcaoModal.style.display = 'none';
            }
        </script>
        <div class="header">
            <div class="logo-mb" >
                <img src="https://www.cinestar.com.vn/pictures/moi/9Logo/white-2018.png" alt="">
            </div>
            <div class="top">
                <div class="facilities-nav">
                    <!-- search -->
                    <div class="search-form">
                        <div class="form-row-search">
                            <form action="" id="search" method="get">
                                <input id="qsearch" type="text" class="search-field" placeholder="Tìm kiếm...">
                            </form>
                        </div>
                        <a href="" class="search">Search</a>
                    </div>                   
                    <!-- search -->

                    <form>
                        <a style="text-transform: uppercase" href="">en</a>
                    </form>

                </div>

                <!-- menu -->
                <div class="navigation">
                    <a class="link-home current" href="index.php"><h1>Trang chủ</h1></a>
                    <div class="nav">
                        <ul>
                                <li><a href="phim.php"><h1>Phim</h1></a></li>
                                <li><a href="lichchieu.php"><h1>Lịch chiếu</h1></a></li>
                                <li><a href="rapvagia.php"><h1>Rạp và giá</h1></a></li>
                                <li><a href="khuyenmai.php"><h1>Khuyến mãi</h1></a></li>
                                <li><a href="hoivadap.php"><h1>Hỏi và đáp</h1></a></li>
                                <li><a href="tintuc.php"><h1>Tin tức</h1></a></li>
                                <li><a href="gioithieu.php"><h1>Giới thiệu</h1></a></li>
                                <li><a href="lienhe.php"><h1>Liên hệ</h1></a></li>
                        </ul>
                    </div>
                </div>
                <!-- menu -->
            </div>
        </div>
        <div class="container">
            <div class="container-bg">
                <div class="register-content">
                    <div class="register-wrap">
                        <ul>
                            <li class="btn-register">
                                <a onclick="toggleRegistrationForm();">Đăng ký thành viên</a>
                            </li>
                            <li class="btn-login">
                                <a onclick="toggleLoginForm();">Đăng nhập</a>
                            </li>
                        </ul>
                        <a class="hotline" href="tel:028 7300 8881">028 7300 8881</a>
                        <div class="block-user-dk" id="registration-form" onmouseleave="hideRegistrationForm();">
                            <div class="icon-dk">
                                <img src="http://cinestar.com.vn/catalog/view/theme/default/images/arrow-up.png" alt="">
                            </div>
                            <p>Vui lòng nhập thông tin</p>
                            <form method="post">
                                <div class="from-gender">
                                    <div class="from-gender1">
                                        <label for="nam">Nam</label> 
                                        <input type="radio" name="gender" value="1" id="nam">
                                        
                                        <span class="button-gender"></span>
                                    </div>
                                    <div class="from-gender1">
                                        <label for="nu">Nữ</label>
                                        <input type="radio" name="gender" value="0" id="nu">
                                        <span class="button-gender"></span>
                                    </div>
                                </div>
                                <div class="form-input">
                                    <div class="input-ten input-thongtin">
                                        <input name="name" value="HỌ TÊN (*)" id="name" type="text" onfocus="if(this.value=='HỌ TÊN (*)') this.value='';" onblur="if(this.value=='') this.value='HỌ TÊN (*)';">
                                    </div>
                                    <div class="input-ngaysinh input-thongtin">
                                        <input name="ngaysinh" type="text" value="DD/MM/YYYY ( Ngày sinh*)" id="ngaysinh" onfocus="if(this.value=='DD/MM/YYYY ( Ngày sinh*)') this.value='';" onblur="if(this.value=='') this.value='DD/MM/YYYY ( Ngày sinh*)';">
                                    </div>
                                    <div class="input-diachi input-thongtin">
                                        <input name="diachi" type="text" value="ĐỊA CHỈ (*)" id="diachi" onfocus="if(this.value=='ĐỊA CHỈ (*)') this.value='';" onblur="if(this.value=='') this.value='ĐỊA CHỈ (*)';">
                                    </div>
                                    <div class="input-cmnd input-thongtin">
                                        <input name="cmnd" type="text" value="SỐ CMNN/BẰNG LÁI (*)" id="cmnd" onfocus="if(this.value=='SỐ CMNN/BẰNG LÁI (*)') this.value='';" onblur="if(this.value=='') this.value='SỐ CMNN/BẰNG LÁI (*)';">
                                    </div>
                                    <div class="input-dienthoai input-thongtin">
                                        <input name="phone" value="ĐIỆN THOẠI (*)" id="phone" type="text" onfocus="if(this.value=='ĐIỆN THOẠI (*)') this.value='';" onblur="if(this.value=='') this.value='ĐIỆN THOẠI (*)';">
                                    </div>
                                    <div class="input-email input-thongtin">
                                        <input name="email" value="EMAIL (*)" id="email" type="text" onfocus="if(this.value=='EMAIL (*)') this.value='';" onblur="if(this.value=='') this.value='EMAIL (*)';">
                                    </div>
                                    <div class="input-tendangnhap input-thongtin">
                                        <input name="tendanhnhap" type="text" value="TÊN ĐĂNG NHẬP (*)" id="tendangnhap" onfocus="if(this.value=='TÊN ĐĂNG NHẬP (*)') this.value='';" onblur="if(this.value=='') this.value='TÊN ĐĂNG NHẬP (*)';">
                                    </div>
                                    <div class="input-matkhau input-thongtin">
                                        <input name="matkhau" type="password" placeholder="MẬT KHẨU (*)">
                                    </div>
                                    <div class="input-nhaplaimatkhau input-thongtin">
                                        <input name="nhaplaimatkhau" type="password" placeholder="NHẬP LẠI MẬT KHẨU (*)">
                                    </div>
                                    <div style="clear: both;"></div>
                                    <div class="input-fix">
                                        <p>Chính sách bảo mật thông tin</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="block-user-dn" id="login-form" onmouseleave="hideLoginForm();">
                            <div class="icon-dk">
                                <img src="http://cinestar.com.vn/catalog/view/theme/default/images/arrow-up.png" alt="">
                            </div>
                            <p>Vui lòng nhập tên người dùng(email) và mật khẩu</p>
                            <form method="post">
                                <div class="form-input">
                                    <div class="input-nguoidung input-thongtin">
                                        <input name="name" type="text" placeholder="">
                                        <img src="https://cinestar.com.vn/catalog/view/theme/default/images/icon-user.png" alt="">
                                    </div>
                                    <div class="input-matkhauchinh input-thongtin">
                                        <input name="ngaysinh" type="password" placeholder="">
                                        <img src="https://cinestar.com.vn/catalog/view/theme/default/images/icon-pass.png" alt="">
                                    </div>
                                    <div class="button-dangnhap">
                                        <input name="danhnhap" type="button" value="ĐĂNG NHẬP">
                                    </div>
                                    <a href="">TÌM LẠI MẬT KHẨU</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            
                <script src="hienform.js"></script>
                
                <section id="Slider-index">
                    <div class="aspect-ratio-169">
                        <a href="lichchieu.php">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740555387_88fc044837bea7695ee9ec8320a39cef.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740545178_a8a9f7496b64b022c7303a779f958fc3.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740548307_572fb6880f511449ec1b78168c547d3b.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740555616_cf6d683f88aa9447af57b89917e84acb.jpg" alt="">
                        </a>
                    </div>
                    <div class="dot-index">
                        <div class="dot active"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </section>

                <!-- hiệu ứng  Chuyển ảnh -->
                <script>
                    const imgPosition = document.querySelectorAll(".aspect-ratio-169 img")
                    const imgContainer = document.querySelector('.aspect-ratio-169')
                    const dotItem = document.querySelectorAll(".dot")
                    let imgNuber = imgPosition.length
                    let index = 0
                    //console.log(imgPosition)
                    imgPosition.forEach(function(image,index){
                        image.style.left = index*100 + "%"
                        dotItem[index].addEventListener("click", function(){
                        slider (index)
                        })
                    })
                    function imgSlide (){
                        index++;
                        console.log(index)
                        if(index>=imgNuber){
                            index=0
                        }
                        slider (index)
                    }
                    function slider (index){
                        imgContainer.style.left = "-" +index*100+ "%"
                        const dotActive = document.querySelector('.active')
                        dotActive.classList.remove("active") 
                        dotItem[index].classList.add("active")
                
                    }
                    setInterval(imgSlide,3000)
                
                </script>

                <div class="cart-content">
                    <div class="cart-wrap">
                        <div class="block-title">
                            <h2>
                                Mua vé
                            <br>
                                Online
                            </h2>
                        </div>
                        <div class="block-list">
                            <div class="select-list" data-cate="film">
                                <div class="select-box">
                                    <select name="film" id="filmSelect">
                                        <option value="" selected style="display: none;">Chọn phim</option>
                                        <option value="v1"><a style="background-color: white;"  href="">ĐẤT RỪNG PHƯƠNG NAM (K)</a></option>
                                        <option value="v2">THANH GƯƠM TRỪ TÀ (T16)</option>
                                        <option value="v3">THÀNH PHỐ NGỦ GẬT (T18)</option>
                                        <option value="v4">KUMATHONG: QUỶ LINH NHI (T18)</option>
                                        <option value="v5">MỘNG DU (T16)</option>
                                        <option value="v6">WOLFOO VÀ HÒN ĐẢO KỲ BÍ 2D LT (P)</option>
                                        <option value="v7">CÚ MÁY ĂN TIỀN (T16)</option>
                                        <option value="v8">QUỶ ÁM (T18)</option>
                                        <option value="v9">HỘI CHỨNG TUỔI THANH XUÂN: EM GÁI XUẤT HÀNH (T13)</option>
                                        <option value="v10">GIAO LỘ 8675 (K)</option>
                                    </select>
                                </div>
                            </div>



                            <div class="select-list" data-cate="cine">
                                <div class="select-box1">
                                    <select name="cine" id="filmSelect">
                                        <option value="" selected style="display: none;">Chọn rạp</option>
                                        <option value="v1">THÁI BÌNH </option>
                                        <option value="v2">NAM ĐỊNH CITY</option>
                                        <option value="v3">BẮC GIANG</option>
                                        <option value="v4">HÀ NỘI(HÀ ĐÔNG)</option>
                                        <option value="v5">NGUYỄN TRÃI(HÀ NỘI)</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="select-list" data-cate="day">
                                <div class="select-box2">
                                    <select name="day" id="filmSelect">
                                        <option value="" selected style="display: none;">Chọn ngày</option>
                                        <option value="v1">4/6/2222</option>
                                        <option value="v2">5/6/2222</option>
                                        <option value="v3">6/6/2222</option>
                                        <option value="v4">7/6/2222</option>
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="select-list" data-cate="hour">
                                <div class="select-box3">
                                    <select name="hour" id="filmSelect">
                                        <option value="" selected style="display: none;">Chọn suất chiếu</option>
                                        <option value="v1">8:00 AM</option>
                                        <option value="v2">9:00 AM</option>
                                        <option value="v3">10:00 AM</option>
                                        <option value="v4">11:00 AM</option>
                                        <option value="v5">12:00 AM</option>
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-page">
                    <div class="nav-icon-content">
                        <div class="nav-icon-wrap">
                            <ul>
                                <li><a href="" data-name="1"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/dolby.png" alt="DOBLY ATMOS - CÔNG NGHỆ ÂM THANH MỚI MANG TÍNH ĐỘT PHÁ"></a></li>
                                <li><a href="" data-name="2"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/christie.png" alt="Máy chiếu CHRISTIE"></a></li>
                                <li><a href="" data-name="3"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/2d.png" alt="Công nghệ chiếu phim 2D Digital"></a></li>
                                <li><a href="" data-name="4"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/3d3.png" alt="Công nghệ chiếu phim 3D Digital"></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="sub-tab">
                        <ul>
                            <li style="z-index: 5;"><a href="" data-name="playing">Phim đang chiếu</a></li>
                            <li style="z-index: 4;"><a href="" data-name="coming">Phim sắp chiếu</a></li>
                            <li style="z-index: 3;"><a href="" data-name="special">Suất chiếu đặc biệt</a></li>
                        </ul>
                    </div>
                    <!--  -->
                    <!-- -----------------chuyen anh-------------- -->
                    <div class="morong_morongx1" id="playing"> 
                        <div class="image-slider">
                            <?php
                                // Kết nối cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
                                $servername = "localhost";
                                $username = "nnv";
                                $password = "";
                                $dbname = "movie_theater";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Kiểm tra kết nối
                                if ($conn->connect_error) {
                                    die("Kết nối thất bại: " . $conn->connect_error);
                                }

                                // Truy vấn dữ liệu từ cơ sở dữ liệu (lấy các bản ghi có kieuPhim=playing)
                                $sql = "SELECT * FROM movie WHERE kieuPhim = 'playing'";
                                $result = $conn->query($sql);

                                // Hiển thị thông tin phim trong    một vòng lặp
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<div class="image-item">';
                                        echo '<div class="image">';
                                        echo '<img src="' . $row["linkImg"] . '" alt="">';
                                        echo '</div>';
                                        echo '<div class="image-title">';
                                        echo '<h3>' . $row["tenPhim"] . '</h3>';
                                        echo '</div>';
                                        echo '<div class="icon-2d">';
                                        echo '<img src="images/icon_2d.png" alt="">';
                                        echo '</div>';
                                        echo '<div class="manden">';
                                        echo '<p class="detailks">' . $row["moTa"] . '</p>';
                                        echo '<a href="chitiet.php?tenPhim=' . urlencode($row["tenPhim"]) . '"><p>Chi Tiết</p></a>';
                                        echo '<a href="lichchieu.php"><h3>Mua Ve</h3></a>';
                                        echo '<img src="images/icon_start.png" alt="">';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "Không tìm thấy phim đang chiếu.";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="morong_morongx1" id="coming" > 
                        <div class="image-slider">
                            <?php
                                // Kết nối cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
                                $servername = "localhost";
                                $username = "nnv";
                                $password = "";
                                $dbname = "movie_theater";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Kiểm tra kết nối
                                if ($conn->connect_error) {
                                    die("Kết nối thất bại: " . $conn->connect_error);
                                }

                                // Truy vấn dữ liệu từ cơ sở dữ liệu (lấy các bản ghi có kieuPhim=playing)
                                $sql = "SELECT * FROM movie WHERE kieuPhim = 'coming'";
                                $result = $conn->query($sql);

                                // Hiển thị thông tin phim trong một vòng lặp
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<div class="image-item">';
                                        echo '<div class="image">';
                                        echo '<img src="' . $row["linkImg"] . '" alt="">';
                                        echo '</div>';
                                        echo '<div class="image-title">';
                                        echo '<h3>' . $row["tenPhim"] . '</h3>';
                                        echo '</div>';
                                        echo '<div class="icon-2d">';
                                        echo '<img src="images/icon_2d.png" alt="">';
                                        echo '</div>';
                                        echo '<div class="manden">';
                                        echo '<p class="detailks">' . $row["moTa"] . '</p>';
                                        echo '<a href="chitiet.php?tenPhim=' . urlencode($row["tenPhim"]) . '"><p>Chi Tiết</p></a>';
                                        echo '<a href="lichchieu.php"><h3>Mua Ve</h3></a>';
                                        echo '<img src="images/icon_start.png" alt="">';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "Không tìm thấy phim đang chiếu.";
                                }
                            ?>
                        </div>
                    </div>
                    <div class="morong_morongx1 " id="special"> 
                        <div class="image-slider" >
                            <?php
                                // Kết nối cơ sở dữ liệu (sử dụng thông tin kết nối của bạn)
                                $servername = "localhost";
                                $username = "nnv";
                                $password = "";
                                $dbname = "movie_theater";

                                $conn = new mysqli($servername, $username, $password, $dbname);

                                // Kiểm tra kết nối
                                if ($conn->connect_error) {
                                    die("Kết nối thất bại: " . $conn->connect_error);
                                }

                                // Truy vấn dữ liệu từ cơ sở dữ liệu (lấy các bản ghi có kieuPhim=playing)
                                $sql = "SELECT * FROM movie WHERE kieuPhim = 'special'";
                                $result = $conn->query($sql);

                                // Hiển thị thông tin phim trong một vòng lặp
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        echo '<div class="image-item">';
                                        echo '<div class="image">';
                                        echo '<img src="' . $row["linkImg"] . '" alt="">';
                                        echo '</div>';
                                        echo '<div class="image-title">';
                                        echo '<h3>' . $row["tenPhim"] . '</h3>';
                                        echo '</div>';
                                        echo '<div class="icon-2d">';
                                        echo '<img src="images/icon_2d.png" alt="">';
                                        echo '</div>';
                                        echo '<div class="manden">';
                                        echo '<p class="detailks">' . $row["moTa"] . '</p>';
                                        echo '<a href="chitiet.php?tenPhim=' . urlencode($row["tenPhim"]) . '"><p>Chi Tiết</p></a>';
                                        echo '<a href="lichchieu.php"><h3>Mua Ve</h3></a>';
                                        echo '<img src="images/icon_start.png" alt="">';
                                        echo '</div>';
                                        echo '</div>';
                                    }
                                } else {
                                    echo "Không tìm thấy phim đang chiếu.";
                                }
                            ?>
                        </div>
                    </div>
                    <?php
                                if (isset($_GET['tenPhim'])) {
                                    $tenPhim = $_GET['tenPhim'];
                                    if ($conn->connect_error) {
                                        die("Kết nối thất bại: " . $conn->connect_error);
                                    }

                                    // Thực hiện truy vấn dựa trên tên phim và hiển thị thông tin chi tiết
                                    $sql = "SELECT * FROM movie WHERE tenPhim = '" . $tenPhim . "'";
                                    $result = $conn->query($sql);

                                    if ($result->num_rows > 0) {
                                        while ($row = $result->fetch_assoc()) {
                                            // Hiển thị thông tin chi tiết về phim
                                            echo '<h1>' . $row["tenPhim"] . '</h1>';
                                            echo '<p class="detail">' . $row["moTa"] . '</p>';
                                            // Các thông tin khác về phim
                                        }
                                    } else {
                                        echo "Không tìm thấy thông tin phim.";
                                    }

                                    $conn->close();
                                } else {
                                }
                                ?>


                        <!-- Js chuyển phim -->
                            <script>
                         // JavaScript
                        // Lấy các liên kết trong sub-tab
                        const tabLinks = document.querySelectorAll('.sub-tab a');

                        // Lấy các phần tử chứa nội dung phim
                        const playing = document.getElementById('playing');
                        const coming = document.getElementById('coming');
                        const special = document.getElementById('special');

                        // Ẩn tab "coming" và "special" khi trang được tải
                        coming.style.display = 'none';
                        special.style.display = 'none';

                        // Xử lý sự kiện khi người dùng click vào tab
                        tabLinks.forEach(function (tabLink) {
                            tabLink.addEventListener('click', function (e) {
                                e.preventDefault(); // Ngăn chặn chuyển hướng trang khi click vào liên kết

                                // Lấy data-name từ liên kết để xác định loại nội dung
                                const dataName = tabLink.getAttribute('data-name');

                                // Ẩn tất cả nội dung và khoảng trống
                                playing.style.display = 'none';
                                coming.style.display = 'none';
                                special.style.display = 'none';

                                // Hiển thị nội dung dựa trên tab được chọn
                                if (dataName === 'playing') {
                                    playing.style.display = 'block';
                                } else if (dataName === 'coming') {
                                    coming.style.display = 'block';
                                } else if (dataName === 'special') {
                                    special.style.display = 'block';
                                }
                            });
                        });
                        // Xử lý sự kiện khi người dùng click vào tab "Playing" để quay lại phần "Playing"
                        const playingTab = document.querySelector('.sub-tab [data-name="playing"]');
                        playingTab.addEventListener('click', function (e) {
                            e.preventDefault(); // Ngăn chặn chuyển hướng trang khi click vào tab "Playing"

                            // Ẩn tất cả nội dung và khoảng trống trừ phần "Playing"
                            coming.style.display = 'none';
                            special.style.display = 'none';
                            playing.style.display = 'block';

                            // Loại bỏ lớp 'active' từ tất cả các tab trước đó
                            tabLinks.forEach(function (link) {
                                link.classList.remove('active');
                            });

                            // Thêm lớp 'active' vào tab "Playing"
                            playingTab.classList.add('active');
                        });

                            </script>

                    <!-- -----------------------------js của chuyển cảnh và nhấn đúp chuyển ảnh---------------------- -->
                    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
                    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
                    
                    <script>
                        $(document).ready(function () {
                            // Khởi tạo slider với autoplay ban đầu
                            $('.image-slider').slick({
                                slidesToShow: 5, // Hiển thị 5 slide
                                slidesToScroll: 1,
                                infinite: true,
                                arrows: true,
                                draggable: false,
                                autoplay: true, // Enable automatic slideshow
                                autoplaySpeed: 800,
                                prevArrow: `<button type='button' class='slick-prev slick-trang'></button>`,
                                nextArrow: `<button type='button' class='slick-next slick-trang'></button>`,
                            });

                            // Sử dụng setTimeout để bật autoplay sau khi trang web tải lên
                            setTimeout(function() {
                                $('.image-slider').slick('slickPlay');
                            }, 10); // Bật autoplay sau 1 giây (1000 milliseconds)
                        });
                    </script>
                    
                    <div class="promotion-content">
                        <div class="promotion-wrap">
                                <div class="promotion-title">
                                    <h2>Ưu đãi</h2>
                                </div>
                                <div class="slide-slidebox">
                                    <div class="slide-wrapper">
                                        <div class="slide-item">
                                            <div class="promotion-item">
                                                <a href="#">
                                                    <div class="promotion-pic">
                                                        <img class="lazyload" src="https://www.cinestar.com.vn/pictures/0330-web.jpg">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="promotion-item">
                                                <a href="#">
                                                    <div class="promotion-pic">
                                                        <img class="lazyload" src="https://www.cinestar.com.vn/pictures/c_monday.jpg">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="promotion-item">
                                                <a href="#">
                                                    <div class="promotion-pic">
                                                        <img class="lazyload" src="images/c_ten.jpg">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="promotion-item">
                                                <a href="#">
                                                    <div class="promotion-pic">
                                                        <img class="lazyload" src="images/0330-web.jpg">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="slide-item">
                                            <div class="promotion-item">
                                                <a href="#">
                                                    <div class="promotion-pic">
                                                        <img class="lazyload" src="https://www.cinestar.com.vn/pictures/Hình%20nền%20CTKM/c'member.jpg">
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>                               
                        </div>
                    </div>

                    <div class="news-content">
                        <div class="news-wrap">
                            <div class="news-title"><h2>Tin tức</h2></div>
                            <div class="news-list" style="width: 1084px; margin-left: 116px;">
                                <div class="news-row">       
                                    <div class="link-page" style="height: 186px;">
                                        <div class="pic">
                                            <img src="https://www.cinestar.com.vn/pictures/Tin%20tức/c'hunt.jpg" >
                                        </div>
                                        <div class="txt">
                                            <h3>RẠP PHIM CINESTAR TUYỂN NHÂN VIÊN PARTIME </h3>
                                            <p>Cùng trở thành nhân viên rạp phim để được làm việc trong môi trường chuyên nghiệp. Đến ngay Cinestar Vietnam để trao cho mình cơ hội tuyển dụng đặc biệt vào 13.12.2022 nhé!</p>
                                        </div>
                                    </div>
                                    <div class="link-page link-page1" style="height: 186px;">
                                        <div class="pic">
                                            <img src="https://www.cinestar.com.vn/pictures/tuyỂn-dỤng-Đt-ld-.png" >
                                        </div>
                                        <div class="txt">
                                            <h3>CINESTAR LÂM ĐỒNG (ĐỨC TRỌNG) - TUYỂN DỤNG NHÂN SỰ</h3>
                                            <p>Cinestar Lâm Đồng (Đức Trọng) tuyển dụng các ứng viên tiềm năng, đam mê phim ảnh giải trí và làm việc trong môi trường năng động, chuyên nghiệp mong muốn được cống hiến và phát triển bản thân. </p>
                                        </div>
                                    </div>
                                </div>                            
                                <div class="news-row">
                                    <div class="link-page link-page2" style="height: 186px;">
                                    <div class="pic"><img src="https://www.cinestar.com.vn/pictures/Tin%20tức/cinestar-da-lat-1.jpeg" alt="Chung kết Hoa hậu Nhân ái Việt Nam 2023 sẽ diễn ra tại Đà Lạt"></div>
                                    <div class="txt">
                                        <h3>CHUNG KẾT HOA HẬU NHÂN ÁI VIỆT NAM 2023 SẼ DIỄN RA TẠI ĐÀ LẠT</h3>
                                        <p>(NSMT) - Miss Petite Vietnam – Hoa hậu Nhân ái Việt Nam 2023 được Uỷ Ban nhân dân tỉnh Lâm Đồng cấp giấy phép số 1676/UBND-VX4, do Công ty cổ phẩn Giải trí Tiếp thị Truyền thông Tân Thành Công phối hợp với Công ty Cổ phần Truyền thông Giải trí Kim Lợi Global tổ chức.</p>
                                    </div>
                                </div>
                                    <div class="link-page link-page3" style="height: 186px;">
                                    <div class="pic"><img src="https://www.cinestar.com.vn/pictures/Tin%20tức/Nangluongmattroi/cinestar-hue.jpg" alt="CÓ THỂ BẠN CHƯA BIẾT CINESTAR HUẾ ĐANG SỬ DỤNG 100% ĐIỆN NĂNG LƯỢNG MẶT TRỜI"></div>
                                    <div class="txt">
                                        <h3>CÓ THỂ BẠN CHƯA BIẾT CINESTAR HUẾ ĐANG SỬ DỤNG 100% ĐIỆN NĂNG LƯỢNG MẶT TRỜI</h3>
                                        <p>Hướng đến sự phát triển bền vững, khách hàng có thể trải nghiệm những thước phim điện ảnh chất lượng tại Cinestar Huế với 100% điện năng lượng mặt trời thân thiện với môi trường và sẽ đầu tư cho toàn hệ thống trong tương lai.</p>
                                    </div>
                                </div>               
                            </div>
                        </div>
                    </div>
                    <script>
                        $(document).ready(function () {
                            // Khởi tạo slider với autoplay ban đầu
                            $('.slide-wrapper').slick({
                                slidesToShow: 3, 
                                slidesToScroll: 1,
                                infinite: true,
                                arrows: false,
                                draggable: true,
                                autoplay: true, // Enable automatic slideshow
                                autoplaySpeed: 1000,
                            });
                        });
                    </script>
                </div>

                <div class="bottom" style="position: relative; top: 100px;">
                    <div class="bottom-nav">
                        <div class="logo-footer" style="background-image:url(https://www.cinestar.com.vn/pictures/cache/moi/9Logo/trang-100x100.png);"></div>
                        <div class="bottom-wrap">
                            <div class="social">
                                <h2>Liên kết</h2>
                                <ul>
                                    <li><a href="" target="_blank" class="facebook">Facebook</a></li>
                                    <li><a href="" target="_blank" class="youtube">Youtube</a></li>
                                </ul>
                                <h2>Hotline</h2>
                                <a class="hotline-tel" href="tel:028 7300 8881">028 7300 8881</a>
                            </div>
                
                            <div class="cinestart-price">
                                <h2>Hệ thống rạp</h2>
                                <ul>
                                    <li><a href="">CineStar Quốc Thanh</a></li>
                                    <li class="current" ><a href="">CineStar Đà Lạt</a></li>
                                    <li><a href="">CineStar Hai Bà Trưng (TP.HCM)</a></li>
                                    <li class="current" ><a href="">CineStar Bình Dương(Sinh Viên)</a></li>
                                    <li class="current" ><a href="">CineStar Huế</a></li>
                                    <li><a href="">Cinestar Mỹ Tho</a></li>
                                    <li><a href="">CineStar Kiên Giang</a></li>
                                    <li><a href="">CineStar Đức Trọng</a></li>
                                </ul>
                            </div>
                            <div class="cinestart">
                                <h2>CINESTAR</h2>
                                <ul>
                                    <li><a href="">Phim đang chiếu</a></li>
                                    <li><a href="">Phim sắp chiếu</a></li>
                                    <li><a href="">Suất chiếu đặc biệt</a></li>
                                    <li><a href="">Lịch chiếu</a></li>
                                    <li><a href="">Khuyến mãi</a></li>
                                </ul>
                            </div>
                
                            <div class="info">
                                <h2>Thông tin</h2>
                                <ul>
                                    <li><a href="">Giới thiệu</a></li>
                                    <li><a href="">Tin tức</a></li>
                                    <li><a href="">Hỏi và đáp</a></li>
                                    <li><a href="">Liên hệ</a></li>
                                </ul>
                            </div>
                
                            <div class="info terms_and_condition">
                                <h2>CHÍNH SÁCH VÀ QUY ĐỊNH</h2>
                                <ul>
                                    <li><a href="">Quy định chung</a></li>
                                    <li><a href="">Điều khoản giao dịch</a></li>
                                    <li><a href="">Chính sách bảo mật</a></li>
                                    <li><a href="">Thông tin công ty</a></li>
                                </ul>
                            </div>
                
                        </div>
                
                    </div>
                
                    <div class="bottom-nav-icon">
                        <ul>
                            <li><a href="" data-name="1"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/dolby2.png"></a></li>
                            <li><a href="" data-name="2"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/crhistie.png" ></a></li>
                            <li><a href="" data-name="3"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/2d.jpg" ></a></li>
                            <li><a href="" data-name="4"><img src="https://www.cinestar.com.vn/pictures/moi/8DinhDang/3d.png" ></a></li>
                            <li><a href="" data-name="5"><img src="https://www.cinestar.com.vn/pictures/webimages/Coffee/cinestar-coffee-02.png" ></a></li>
                        </ul>
                    </div>
                
                </div>
            </div>
            <div class="footer">
                <!--//payment-part//--->
                <div class="payment">
                    <h2>Chấp nhận thanh toán</h2>
                    <ul>
                        <li><a href=""><img src="https://www.cinestar.com.vn/pictures/cache/webimages/9Rest/1Logo/napas-40.png"></a></li>
                        <li><a href=""><img src="https://www.cinestar.com.vn/pictures/moi/ThanhToan/payment-visa.png"></a></li>
                        <li><a href=""><img src="https://www.cinestar.com.vn/pictures/moi/ThanhToan/payment-mastercard.png" ></a></li>
                        <li><a href=""><img src="https://www.cinestar.com.vn/pictures/webimages/momo.jpg"></a></li>
                    </ul>
                </div>
                
                <div class="copyright">
                    <p><a href="" target="_blank"><img width="150px" src="https://www.cinestar.com.vn/catalog/view/theme/default/images/dathongbao.png" alt=" đã được duyệt"></a> </p>
                    <p>CÔNG TY CỔ PHẦN GIẢI TRÍ PHÁT HÀNH PHIM – RẠP CHIẾU PHIM NGÔI SAO<br>
                    Địa chỉ: 135 Hai Bà Trưng, phường Bến Nghé, Quận 1, TP.HCM<br>
                    Giấy CNĐKDN số: 0312742744, đăng ký lần đầu ngày 18/04/2014, đăng ký thay đổi lần thứ 2 ngày 15/09/2014, cấp bởi Sở KH&amp;ĐT TP.HCM<br><br>
                    2015 © <strong>CINESTAR</strong>. All rights reserved.</p> 
                </div>
            </div>
        </div>
    </body>
</html>