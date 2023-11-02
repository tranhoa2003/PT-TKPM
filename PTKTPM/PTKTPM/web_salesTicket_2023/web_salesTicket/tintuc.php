<!DOCTYPE html>
<html>
    <head>
        <title id="hdtitle">CINESTAR - Hệ thống Rạp chiếu phim giá rẻ, hiện đại bậc nhất</title>
        <link rel="SHORTCUT ICON" href="https://www.cinestar.com.vn/catalog/view/theme/default/images/favicon.ico">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
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
                    <a class="link-home" href="index.php"><h1>Trang chủ</h1></a>
                    <div class="nav">
                        <ul>
                                <li><a href="phim.php"><h1>Phim</h1></a></li>
                                <li><a href="lichchieu.php"><h1>Lịch chiếu</h1></a></li>
                                <li><a href="rapvagia.php"><h1>Rạp và giá</h1></a></li>
                                <li><a href="khuyenmai.php"><h1>Khuyến mãi</h1></a></li>
                                <li><a href="hoivadap.php"><h1>Hỏi và đáp</h1></a></li>
                                <li class="mau1"><a href="tintuc.php"><h1>Tin tức</h1></a></li>
                                <li><a href="gioithieu.php"><h1>Giới thiệu</h1></a></li>
                                <li><a href="lienhe.php"><h1>Liên hệ</h1></a></li>
                        </ul>
                    </div>
                </div>
                <!-- Khi mà nhấn vào nó sẽ chuyển sang ngôi nhà khác -->
                <script src="lenxuong.js"></script>
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
                <section id="Slider">
                    <div class="aspect-ratio-169">
                        <a href="khuyenmai.php">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740555387_88fc044837bea7695ee9ec8320a39cef.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740545178_a8a9f7496b64b022c7303a779f958fc3.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740548307_572fb6880f511449ec1b78168c547d3b.jpg" alt="">
                            <img src="https://www.cinestar.com.vn/pictures/z2161740555616_cf6d683f88aa9447af57b89917e84acb.jpg" alt="">
                        </a>
                    </div>
                    <div class="dot-container">
                        <div class="dot active"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                        <div class="dot"></div>
                    </div>
                </section>
                <!-- js dùng để chuyển ảnh tự động -->
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
                    setInterval(imgSlide,5000)
                
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
                    <div class="section-title">
                        <h2>Tin tức</h2>
                    </div>
                    <div class="sub-tab news">
                        <ul>
                            <li style="z-index: 2;" class="current"><a style="color: black; font-family: Arial, Helvetica, sans-serif; font-weight: bold;" href="" data-name="1" >Tin điện ảnh</a></li>
                            <li style="z-index: 1;"><a style="font-family: Arial, Helvetica, sans-serif; font-weight: bold;" href="tintuyendung.php" data-name="10" >TUYỂN DỤNG</a></li>
                        </ul>
                    </div>
                    <div class="news-tab-content">
                        <div class="news-tab-wrap">
                            <div id="news">
                                <div class="news-item" style="display: block; position: absolute; left: 0px; top: 0px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                        <div class="news-pic">
                                            <img alt="pic" src="https://www.cinestar.com.vn/pictures/biet-doi-danh-thue-1.jpeg">
                                        </div>
                                        <div class="news-txt">
                                            <h3>[EXPEND4BLE - BIỆT ĐỘI ĐÁNH THUÊ 4] - Rapper Binz cùng bản hit BigCityBoi sẽ xuất hiện trong bom tấn hành động công phá phòng vé tháng 9 “Biệt Đội Đánh Thuê 4” </h3>
                                            Bản hit đình đám của rapper Binz năm 2020 "BigCityBoi" sẽ được sử dụng trong bom tấn hành động đáng chú ý nhất phòng vé toàn cầu tháng 9 - Expend4bles (tựa Việt: Biệt Đội Đánh Thuê 4).             
                                        </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 389px; top: 0px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/the-nun-ii-6.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/the-nun-ii-6.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[Ác Quỷ Ma Sơ II] - Loạt Easter Egg rùng rợn nhất của THE NUN 2: Một cảnh cũ của Valak “tiên tri” tương lai của nhân vật bất ngờ?</h3>
                                            Là bom tấn kinh dị của Warner Bros. trong dịp Hè năm nay, THE NUN 2 mang trở lại ác quỷ đình đám Valak cùng chương tiếp theo trong Vũ trụ The Conjuring. Bộ phim mang đến nhiều phân đoạn thót tim, hồi hộp nhưng cũng gây tò mò với "fan ruột" nhờ nhiều chi tiết Easter Egg cài cắm xuyên suốt, cũng như một phân đoạn After-Credit thú vị hé lộ bước đi tiếp theo của vũ trụ phim kinh dị này.            </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 779px; top: 0px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/tinh-ban-dieu-ky-5.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/tinh-ban-dieu-ky-5.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[Tình Bạn Diệu Kỳ] - List những bộ phim hoạt hình phiêu lưu, kỳ thú mà các gia đình không thể bỏ lỡ</h3>
                                            Những bộ phim hoạt hình không chỉ thu hút sự chú ý của các bạn nhỏ nhờ hình ảnh tươi sáng, câu chuyện đậm chất nhân văn mà trong đó là những chuyến phiêu lưu, khám phá những điều mới lạ khiến không chỉ khán giả nhí vô cùng thích thú khi đắm chìm vào. Hãy cùng xem lại những bộ phim chủ đề phiêu lưu mà các bạn không thể bỏ lỡ.            </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 389px; top: 447px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/expendables-1.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/expendables-1.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[EXPEND4BLE - BIỆT ĐỘI ĐÁNH THUÊ 4] - Thương hiệu hành động “Biệt Đội Đánh Thuê” trở lại màn ảnh sau một thập kỷ, quy tụ dàn sao hạng A Hollywood</h3>
                                            Một trong những thương hiệu phim hành động nổi tiếng bậc nhất Hollywood - Biệt Đội Đánh Thuê (The Expendables) sẽ chính thức trở lại vào tháng 9 tới đây. Những gương mặt biểu tượng của loạt phim như Sylvester Stallone hay Jason Statham sẽ đồng loạt trở lại, cùng sự xuất hiện của những tên tuổi đình đám mới như Megan Fox hay 50 Cent.             </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 0px; top: 460px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/shin-2.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/shin-2.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[Shin - Cậu Bé Bút Chì: Đại Chiến Siêu Năng Lực Sushi Bay] - Thương hiệu “Shin - Cậu Bé Bút Chì” công phá màn ảnh rộng với phần phim 3D đầu tiên, “chốt đơn” khởi chiếu 25.08</h3>
                                            Vừa có màn quậy tung màn ảnh rộng hồi đầu năm trong phần phim 2D thứ 30, mùa hè năm nay, Shin - Cậu Bé Bút Chì tiếp tục "công phá" phòng vé với phần phim 3D đầu tiên trong toàn loạt phim. Đây là dự án trọng điểm được thực hiện trong suốt 7 năm của loạt phim Shin - Cậu Bé Bút Chì, hứa hẹn sẽ làm mưa làm gió phòng vé khi chính thức ra mắt tại Việt Nam vào ngày 25.08 tới đây.             </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 779px; top: 784px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/ac-quy-ma-so-2.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/ac-quy-ma-so-2.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[Ác Quỷ Ma Sơ II] - Biểu tượng kinh dị đình đám Valak chính thức trở lại trong trailer mới của “Ác Quỷ Ma Sơ II”</h3>
                                            Một trong những biểu tượng kinh dị đình đám nhất của vũ trụ kinh dị The Conjuring nói riêng và điện ảnh thế giới thế kỷ 21 nói chung - ma sơ Valak - sẽ có màn trở lại trong phần phim riêng mới The Nun II (tựa Việt: Ác Quỷ Ma Sơ II).             </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 0px; top: 940px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/challengers-2.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/challengers-2.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[CHALLENGERS] - Zendaya kết hợp dùng đạo diễn “Call Me By Your Name” Luca Guadagnino trong tựa phim táo bạo bậc nhất nửa cuối năm nay</h3>
                                            Tháng 10 năm nay, màn ảnh rộng tiếp tục chào đón một màn kết hợp đáng mong chờ giữa những cái tên đình đám. Nữ diễn viên trẻ sáng giá bậc nhất Hollywood hiện tại Zendaya sẽ trở thành gương mặt trung tâm trong Challengers (tựa Việt: Những Kẻ Thách Đấu), bộ phim mới của đạo diễn Call Me By Your Name Luca Guadagnino.             </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 779px; top: 1155px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/the-hunger-game-5.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/the-hunger-game-5.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[ĐẤU TRƯỜNG SINH TỬ: KHÚC HÁT CỦA CHIM CA VÀ RẮN ĐỘC] - Thương hiệu phim Đấu Trường Sinh Tử tái xuất màn ảnh rộng sau 8 năm, hé lộ nguồn gốc của trò chơi đáng sợ và quá khứ của kẻ phản diện Coriolanus Snow</h3>
                                            Đã 8 năm trôi qua kể từ khi một trong những thương hiệu phim nổi tiếng bậc nhất thế giới Đấu Trường Sinh Tử kết thúc với phần phim Húng Nhại, là bước đệm cho sự nghiệp của hàng loạt các diễn viên nổi tiếng như Jennifer Lawrence, Josh Hutcherson, Liam Hemsworth,.. Sắp tới đây, vào tháng 11 năm nay, thương hiệu đình đám này sẽ được hãng Lionsgate hồi sinh, dự kiến tái xuất màn ảnh với khán giả trong một tác phẩm mới chính là phần tiền truyện mang tên Đấu Trường Sinh Tử: Khúc Hát Của Chim Ca Và Rắn Độc (tựa gốc: The Hunger Games: The Ballad Of Songbirds And Snakes).            </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 389px; top: 1163px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                                    <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/dune-3.jpeg" alt="pic" src="https://www.cinestar.com.vn/pictures/dune-3.jpeg">
                                        </div>
                                                    <div class="news-txt">
                                            <h3>[Dune: Hành Tinh Cát - Phần Hai] - Phần tiếp theo của "Dune" hé lộ những hình ảnh đầu tiên: Kiệt tác điện ảnh chính thức trở lại</h3>
                                            Ra mắt vào thời kỳ đại dịch COVID-19 vẫn đang diễn biến căng thẳng, Dune (tựa Việt: Dune: Hành Tinh Cát) được coi là một chiến thắng quan trọng tại phòng vé của Warner Bros. Pictures, nhất là khi nhìn vào số vốn đầu tư khủng mà studio này dành ra cho siêu phẩm của đạo diễn Denis Villeneuve. Thông tin phần hai của Dune được bật đèn xanh đã khiến không ít khán giả hào hứng, và sau hai năm, những hình ảnh đầu tiên trong kiệt tác điện ảnh này đã chính thức được hé lộ.              </div>
                                    </div>
                                </div>
                                <div class="news-item" style="display: block; position: absolute; left: 0px; top: 1404px;">
                                    <div class="news-bg">
                                        <a class="view-detail" href=""></a>
                                        <div class="news-pic">
                                            <img data-src="https://www.cinestar.com.vn/pictures/mnĐl-Đoàn-khách.jpg" alt="pic" src="https://www.cinestar.com.vn/pictures/mnĐl-Đoàn-khách.jpg">
                                        </div>
                                        <div class="news-txt">
                                            <h3>[MÓN NGON ĐÀ LẠT] KHÁM PHÁ ẨM THỰC MÙA LỄ HỘI TẠI NHÀ HÀNG MÓN NGON ĐÀ LẠT</h3>
                                            Trong không khí mát mẻ của tiết trời Đà Lạt, còn gì tuyệt vời hơn là được cùng gia đình, bạn bè thưởng thức một bữa tiệc ấm cúng mừng dịp lễ lớn tại Nhà hàng Món ngon Đà Lạt.            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="view-more">
                            <a class="xem_them" href="">XEM THÊM</a>
                        </div>
                    </div>
                </div>

                <div class="bottom">
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