<!DOCTYPE html>
<html>
    <head>
        <title id="hdtitle">CINESTAR - Hệ thống Rạp chiếu phim giá rẻ, hiện đại bậc nhất</title>
        <link rel="SHORTCUT ICON" href="https://www.cinestar.com.vn/catalog/view/theme/default/images/favicon.ico">
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="hoivadap.css">
        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <link
            rel="stylesheet"
            type="text/css"
            href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"
        />
          <style>
          </style>
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
                                <li class="mau1"><a href="hoivadap.php"><h1>Hỏi và đáp</h1></a></li>
                                <li><a href="tintuc.php"><h1>Tin tức</h1></a></li>
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
                <div class="content-page" style="z-index: 0;">
                    <div class="faq-content">
                        <div class="section-title2">
                            <h2>Hỏi và đáp</h2>
                        </div>
                        <div class="faq-wrap">
                            <div class="faq">
                                <ul>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">01</span>
                                            <h3>Làm thế nào để mua vé online?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p style="text-align: center;">HƯỚNG DẪN MUA VÉ ONLINE</p>
                                                    <p style="text-align: center;"><u>Điều kiện:</u></p>
                                                    <p>- Bạn phải là thành viên Cinestar</p>
                                                    <p>- Nếu không là thành viên vui lòng đăng ký thành viên trên website để được mua vé</p>
                                                    
                                                    <p style="text-align: center;"><u>Bước 2:</u></p>
                                                    <p>Đăng nhập tài khoản thành viên</p>
                                                    <p>Đăng nhập</p>
                                                    <p>Trường hợp khách hàng&nbsp;đăng nhập không được vui lòng liên hệ:</p>
                                                    <p>- Rạp Cinestar QT:</p>
                                                    <p>- Rạp Cinestar Hai bà Trưng:</p>
                                                    <p>- Rạp Cinestar Đà Lạt:</p>
                                                    <p style="text-align: center;"><u>Bước 3:</u></p>
                                                    <p>- Chọn loại vé và số lượng:</p>
                                                    
                                                    <p style="text-align: center;"><u>Bước 4:</u></p>
                                                    <p>Chọn ghế:</p>
                                                    
                                                    <p>Chọn thức ăn:</p>
                                                    
                                                    <p style="text-align: center;"><u>Bước 5:</u></p>
                                                    <p>- Đồng ý.</p>
                                                    <p>- Đồng ý&nbsp; các điều khoản</p>
                                                    <p>- Chọn loại thẻ thanh toán.</p>
                                                    <p>- Thanh toán.</p>
                                                    <p style="margin-left: 54pt; text-align: center;">&nbsp;</p>
                                                    <p style="text-align: center;">B6:&nbsp;&nbsp;&nbsp; Nhập thông tin tài khoản để thanh toán việc mua online.&nbsp;</p>
                                                    <p style="text-align: center;">HOÀN TẤT</p>


                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">02</span>
                                            <h3>Thủ tục đặt vé online và phương thức thanh toán như thế nào?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                    <div class="answer-detail">
                                                        <p style="line-height: 22.4px;"><b>CÁCH ĐẶT VÉ ONLINE:</b></p>

                                                        <p style="line-height: 22.4px;"><strong>1/</strong>&nbsp;Đặt vé online trên mục MUA VÉ ONLINE&nbsp;ở trang chủ Cinestar Cinema.</p>

                                                        <p style="line-height: 22.4px;"><strong>2/</strong>&nbsp;Chọn Phim, Rạp, Ngày va&nbsp;Suất chiếu&nbsp;.</p>

                                                        <p style="line-height: 22.4px;"><strong>3/&nbsp;</strong>Bạn chọn vị trí&nbsp;ghế, nhập thông tin liên hệ.</p>

                                                        <p style="line-height: 22.4px;"><strong>4/&nbsp;</strong>Bạn&nbsp;chọn&nbsp;phương thức thanh toán.</p>

                                                    

                                                        <p style="line-height: 22.4px;"><strong>5</strong><strong>/</strong>Sau khi hoàn tất thanh toán hệ thống sẽ gửi thông tin vé đến liên hệ của bạn. Vui long xuất thông tin đặt vé khi đến rap.</p>

                                                        <p style="line-height: 22.4px;"><strong>CHÚC BẠN XEM PHIM VUI VẺ</strong></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">03</span>
                                            <h3>Làm sao để được cấp thẻ thành viên?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p>Bạn chỉ cần mua 02 vé xem phim bất kỳ tại rạp Cinestar là đã có thể tạo thẻ C'Friend&nbsp;
                                                        <span style="line-height: 1.6em;">và thẻ chỉ có giá trị sử dụng từ lần giao dịch sau.</span>
                                                    </p>

                                                    <p>Khi bạn tích đủ 10,000 điểm tích lũy thì sẽ được nâng lên thẻ C'vip</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">04</span>
                                            <h3>Lợi ích khi tham gia thẻ thành viên là gì?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p>
                                                        <span style="line-height: 1.6em;">Thẻ thành viên của Cinestar bao gồm 2 hạng mục là C'Friend và C'Vip. Cụ thể quyền lợi như sau</span>
                                                    </p>

                                                    <p>Khi điểm của thẻ đạt mức như sau sẽ có thể đổi được phần thưởng tương ứng.&nbsp;</p>

                                                    <p>Khi điểm tích lũy của thẻ đạt 10.000 sẽ được nâng cấp lên thẻ&nbsp;C'Vip (Điểm tích lũy&nbsp;= tổng điểm cộng dồn từ trước đến giờ, không phải điểm còn lại của thẻ)</p>

                                                    

                                                    <p><strong>Thẻ C’Friend: </strong></p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được cấp lần đầu khi mua 2 vé xem phim bất kỳ tại Cinestar.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tích lũy điểm theo giá trị mua hàng hóa dịch vụ như trên.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được giảm 10% trực tiếp trên giá trị hóa đơn bắp nước khi mua tại quầy.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tặng 1 vé xem phim 2D vào tuần sinh nhật (tính từ Thứ Hai đến Chủ Nhật), Điều kiện: tối thiểu có 500 điểm tích lũy</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tham gia các chương trình dành cho thành viên.</p>

                                                    <p><strong>Thẻ C’VIP:</strong></p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được cấp cho thành viên C’Friend khi tích lũy được ít nhất 10,000 điểm.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tích lũy điểm theo giá trị mua hàng hóa dịch vụ như trên.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được giảm 15% trực tiếp trên giá trị hóa đơn bắp nước khi mua tại quầy.</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Được tặng 2 vé xem phim 2D và 1 combo gồm coke 16oz + popcorn 32oz vào tuần sinh nhật (tính từ Thứ Hai đến Chủ Nhật).</p>

                                                    <p>-&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Có cơ hội nhận vé tham gia Lễ Ra Mắt Phim và các chương trình khuyến mãi khác của Cinestar.</p>

                                                    <p>&nbsp;</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">05</span>
                                            <h3>Làm sao để biết được số điểm đã tích lũy?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p>​<span style="font-size: 12.8px; color: rgb(34, 34, 34); font-family: arial, sans-serif;">Khách hàng&nbsp;có thể hỏi nhân viên&nbsp;lúc sử dụng thẻ thành viên để mua vé hoặc kiểm tra thông tin khách hàng&nbsp;trên website cinestar.com.vn&nbsp;bằng tài khoản online.</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">06</span>
                                            <h3>Làm thế nào để đăng nhập vào Website khi đã có thẻ C'Friend?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p><u><strong style="font-style: italic;">ĐỐI VỚI C'FRIEND:</strong></u>&nbsp;Bạn thêm "CF" vào trước mã thẻ</p>

                                                    <p><strong>Ví dụ:</strong>&nbsp;Thẻ của bạn là 1013484</p>

                                                    <p>Bạn đăng nhập là: CF1013484</p>

                                                    <p>Mật khẩu (giống tên đăng nhập): CF1013484</p>

                                                    <p>&nbsp;</p>

                                                    <p><strong style="font-style: italic;"><u>ĐỐI VỚI C'VIP:</u>&nbsp;</strong>Bạn thêm "CV" vào trước mã thẻ<em><strong>&nbsp;</strong>&amp; thêm 01 số "0" vào dãy số 0</em></p>

                                                    <p><strong>Ví dụ:</strong> Thẻ của bạn là 1001234</p>

                                                    <p>Bạn đăng nhập là: CV1<strong>0</strong>001234</p>

                                                    <p>Mật khẩu (giống tên đăng nhập): CV1<strong>0</strong>001234</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ask">
                                            <span class="cycle-num">07</span>
                                            <h3>Dolby Atmos là gì?</h3>
                                            <span class="st-arrow"></span>
                                        </div>
                                        <div class="answer-wrap">
                                            <div class="answer">
                                                <span class="cycle-num">Trả lời</span>
                                                <div class="answer-detail">
                                                    <p>Atmos là một hệ thống âm thanh được phát triển bởi Dolby, về cơ bản, nó thay đổi cách âm thanh được thiết kế cho các bộ phim và thể hiện chúng trong rạp chiếu phim. Với Dolby Atmos, nhà làm phim có thể định vị trí và đưa âm thanh đi khắp nơi trong một rạp hát, thậm chí lên phía trên đầu, đề cao chủ nghĩa hiện thực và tác động từ mỗi cảnh phim đem lại. Atmos dùng một phương pháp tiếp cận dựa trên đối tượng để thiết kế âm thanh, thay vì chỉ bao gồm các kênh âm thanh (channel), trong đó, nhà làm phim được tự do sáng tạo cho âm thanh "bay quanh" khán giả trong không gian 3 chiều (3D).</p>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- --------------js---------------- -->
                        <script src="sc.js"></script>

                        <div class="section-title1">
                            <h2>Gửi câu hỏi</h2>
                        </div>
                        <div class="faq-form">
                            <form id="frm_contact" name="frm_contact" method="post">
                                <div class="require-col">
                                    <div class="input-text name">
                                        <input name="name" value="HỌ TÊN (*)" id="name" type="text" onfocus="if(this.value=='HỌ TÊN (*)') this.value='';" onblur="if(this.value=='') this.value='HỌ TÊN (*)';">
                                    </div>
                                    <div class="input-text tel">
                                        <input name="phone" value="ĐIỆN THOẠI (*)" id="phone" type="text" onfocus="if(this.value=='ĐIỆN THOẠI (*)') this.value='';" onblur="if(this.value=='') this.value='ĐIỆN THOẠI (*)';">
                                    </div>
                                    <div class="input-text email">
                                        <input name="email" value="EMAIL (*)" id="email" type="text" onfocus="if(this.value=='EMAIL (*)') this.value='';" onblur="if(this.value=='') this.value='EMAIL (*)';">
                                    </div>
                                    <div class="input-area">
                                        <textarea id="comments" name="comments" onfocus="if(this.value=='NỘI DUNG (*)') this.value='';" onblur="if(this.value=='') this.value='NỘI DUNG (*)';">NỘI DUNG (*)</textarea>
                                    </div>                                    
                                    <div class="input-but">
                                        <input id="btn-contact-submit" type="submit" value="Gửi">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="bg-cover" style="background-image:url(https://www.cinestar.com.vn/pictures/moi/3HoiDap/Background/hhv2dyu.jpg);"></div>        
                    </div>
                    <!-- -----------------chuyen anh-------------- -->
                    <div class="morong"> 
                        <div class="phimdangchieu">
                            <p>CÁC PHIM ĐANG CHIẾU</p>
                        </div>
                        <div class="image-slider">
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh2.jpg" alt="">
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                            </div>
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh3.jpg" alt="">
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                                
                            </div>
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh4.jpg" alt="">
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                                
                            </div>
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh5.jpg" alt="">
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                                
                            </div>
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh6.jpg" alt="">        
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                            </div>
                            <div class="image-item">
                                <div class="image">
                                    <img src="images/anh1.jpg" alt="">                   
                                </div>
                                <div class="image-title">
                                    <h3>MỘNG DU (T16)</h3>
                                </div>
                                <div class="icon-2d">
                                    <img src="images/icon_2d.png" alt="">
                                </div>
                                <div class="manden">
                                    <p>Sau bao ngày chờ đợi, dự án điện ảnh gợi ký ức tuổi thơ của nhiều thế hệ người Việt chính thức tung hình ảnh đầu tiên đầy cảm xúc. First look poster khắc họa hình ảnh đối lập: bé An đang ôm chặt mẹ</p>
                                    <a href="chitiet.htm"><p>Chi Tiết</p></a>
                                    <a href=""><h3 class="xem-trailer">XEM TRAILER</h3></a>
                                    <a href="lichchieu.php"><h3>Mua Ve</h3></a>
                                    <img src="images/icon_start.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- -----------------------------js của chuyển cảnh và nhấn đúp chuyển ảnh---------------------- -->
                    <script
                        type="text/javascript"
                        src="https://code.jquery.com/jquery-1.11.0.min.js"
                        ></script>
                        
                        <script
                        type="text/javascript"
                        src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"
                        ></script>
                        
                        <script>
                            $(document).ready(function() {
                                $('.image-slider').slick({
                                    slidesToShow: 5, // Hiển thị 5 slide
                                    slidesToScroll: 1,
                                    infinite: true,
                                    arrows: true,
                                    draggable: false,
                                    autoplay: true,           // Enable automatic slideshow
                                    autoplaySpeed: 1000, 
                                    prevArrow: `<button type='button' class='slick-prev slick-arrow'></button>`,
                                    nextArrow: `<button type='button' class='slick-next slick-arrow'></button>`,
                                    
                                    responsive: [
                                        {
                                            breakpoint: 1024,
                                            settings: {
                                                slidesToShow: 3,
                                            }
                                        },
                                        {
                                            breakpoint: 480,
                                            settings: {
                                                slidesToShow: 1,
                                                arrows: false,
                                                infinite: false
                                            }
                                        }
                                    ]
                                });
                            });
                        </script>
                
<!-- -----------------------bottom-------------------------------------------------------------- -->
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