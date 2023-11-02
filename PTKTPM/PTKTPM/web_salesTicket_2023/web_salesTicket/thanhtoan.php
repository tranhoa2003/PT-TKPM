<!DOCTYPE html>
<html>

<head>
    <title id="hdtitle">CINESTAR - Hệ thống Rạp chiếu phim giá rẻ, hiện đại bậc nhất</title>
    <link rel="SHORTCUT ICON" href="https://www.cinestar.com.vn/catalog/view/theme/default/images/favicon.ico">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="header">
        <div class="logo-mb">
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
                <a class="link-home" href="index.php">
                    <h1>Trang chủ</h1>
                </a>
                <div class="nav">
                    <ul>
                        <li>
                            <a href="phim.php">
                                <h1>Phim</h1>
                            </a>
                        </li>
                        <li>
                            <a href="lichchieu.php">
                                <h1>Lịch chiếu</h1>
                            </a>
                        </li>
                        <li>
                            <a href="rapvagia.php">
                                <h1>Rạp và giá</h1>
                            </a>
                        </li>
                        <li>
                            <a href="khuyenmai.php">
                                <h1>Khuyến mãi</h1>
                            </a>
                        </li>
                        <li>
                            <a href="hoivadap.php">
                                <h1>Hỏi và đáp</h1>
                            </a>
                        </li>
                        <li>
                            <a href="tintuc.php">
                                <h1>Tin tức</h1>
                            </a>
                        </li>
                        <li>
                            <a href="gioithieu.php">
                                <h1>Giới thiệu</h1>
                            </a>
                        </li>
                        <li>
                            <a href="lienhe.php">
                                <h1>Liên hệ</h1>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Khi mà nhấn vào nó sẽ chuyển sang ngôi nhà khác -->
            <script src="lenxuong.js"></script>
            <!-- menu -->
        </div>
    </div>
    <div class="container">
        <div class="HoaDon" id="chonVe">
            <center>
                <h1 style="padding-top: 1%;">Chọn vé</h1>
            </center>
            <div class="chooseTicket" id="single">
                <table>
                    <thead>
                        <tr style="background-color: orange;">
                            <th>Loại vé</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                    </thead>
                    <?php
                        $servername = "localhost";
                        $username = "nnv";
                        $password = "";
                        $dbname = "movie_theater";
                        $conn = new mysqli($servername, $username, $password, $dbname);

                        // Kiểm tra kết nối
                        if ($conn->connect_error) {
                            die("Kết nối thất bại: " . $conn->connect_error);
                        }

                        $sql = "select tenVe, giaTien, idVe from gia";
                        $result = $conn->query($sql);
                        if ($result !== false) {
                            // Hiển thị thông tin phim nếu có kết quả
                            if ($result->num_rows > 0) {
                                while ($row = $result->fetch_assoc()) {
                                    $tenVe = $row["tenVe"];
                                    $giaTien = $row["giaTien"];
                                    $idVe = $row["idVe"];
                            ?>

                            <tr id="<?= $idVe ?>">
                                <th><?= $tenVe ?></th>
                                <th class="sizz">
                                    <a href="javascript:void(0)" class="tru" onclick="thayDoiGiaTri(<?= $idVe ?>, 'tru', <?= $giaTien ?>, 1)">-</a>
                                    <input type="text" value="0" readonly size="3" id="input<?= $idVe ?>">
                                    <a href="javascript:void(0)" class="cong" onclick="thayDoiGiaTri(<?= $idVe ?>, 'cong', <?= $giaTien ?>, 1)">+</a>
                                </th>
                                <th><?= number_format($giaTien) ?><sub>đ</sub></th>
                                <th id="tong<?= $idVe ?>">0<sub>đ</sub></th>
                            </tr>
                            <?php }
                            } else {
                                echo "Lỗi trong quá trình truy vấn dữ liệu: " . $conn->error;
                            }

                            $conn->close();
                        }
                        ?>


                    <tr>
                        <th colspan="3">Tổng tiền: </th>
                        <th id="sumAll">0<sub>đ</sub></th>
                    </tr>
                </table>
                <div class="buttonww">
                    <button id="Huy" onclick="Chon('Cancle')">Cancle</button>
                    <button id="Agree" onclick="Chon('Agree')">Xác nhận</button>
                </div>
                <script>
                    function thayDoiGiaTri(inputId, action, giaTien, giaTriGhe) {
                        var input = document.getElementById("input" + inputId);
                        var tong = document.getElementById("tong" + inputId);

                        // Lấy giá trị hiện tại từ phần 'value' của input
                        var giaTri = parseInt(input.value);

                        // Thực hiện hành động tương ứng
                        if (action === "tru") {
                            if (giaTri > 0) {
                                giaTri--;
                            }
                        } else if (action === "cong") {
                            if (giaTri < 8) {
                                giaTri++;
                            } else {
                                alert("Mỗi khách hàng chỉ được đặt tối đa 8 vé ghế đơn");
                            }
                        }

                        // Cập nhật giá trị mới vào 'value' của input
                        input.value = giaTri;
                        // Cập nhật giá trị tổng
                        tong.textContent = giaTri * giaTien + "đ";
                        sumAll();
                    }


                            function sumAll() {
                                var giaTri1 = parseInt(document.getElementById("input1").value);
                                var giaTri2 = parseInt(document.getElementById("input2").value);
                                var giaTri3 = parseInt(document.getElementById("input3").value);

                                var tong1 = giaTri1 * 60000;
                                var tong2 = giaTri2 * 100000;
                                var tong3 = giaTri3 * 80000;
                                var soLuongVe = giaTri1 + giaTri2 + giaTri3;
                                var sumAll = tong1 + tong2 + tong3;

                                document.getElementById("sumAll").textContent = sumAll + "đ";
                            }

                            function Chon(action) {
                                var soLuongVe = parseInt(document.getElementById("input1").value) + parseInt(document.getElementById("input2").value) + parseInt(document.getElementById("input3").value);
                                var hoaDonDiv = document.getElementById("chonVe");
                                var chonGheDiv = document.getElementById("Ghe");
                                if (action === 'Agree') {
                                    if (soLuongVe === 0) {
                                        alert("Hãy chọn vé trước khi xác nhận!");
                                        return; // Không tiếp tục xử lý nút "Xác nhận" nếu số lượng vé bằng 0
                                    } else {
                                        // Xử lý khi ấn nút "Xác nhận" và có đủ vé
                                        hoaDonDiv.style.display = "none"; // Ẩn phần "HoaDon"
                                        chonGheDiv.style.display = "block";
                                    }
                                } else if (action === 'Cancle') {
                                    // Xử lý khi ấn nút "Hủy"
                                    document.getElementById("input1").value = 0;
                                    document.getElementById("input2").value = 0;
                                    document.getElementById("input3").value = 0;
                                    document.getElementById("tong1").textContent = "0đ";
                                    document.getElementById("tong2").textContent = "0đ";
                                    document.getElementById("tong3").textContent = "0đ";
                                    sumAll(); // Cập nhật lại tổng và đặt lại giá trị về 0
                                }
                            }
                        </script>

            </div>
        </div>
        <div class="chonGhe" id="Ghe">
            <div id="GheDon">
                <div class="seat">
                    <input type="checkbox" id="seat-1">
                    <label for="seat-1">A1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-2">
                    <label for="seat-2">A2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-3">
                    <label for="seat-3">A3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-4">
                    <label for="seat-4">A4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-5">
                    <label for="seat-5">A5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-6">
                    <label for="seat-6">A6</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-7">
                    <label for="seat-7">A7</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-8">
                    <label for="seat-8">A8</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-9">
                    <label for="seat-9">A9</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-10">
                    <label for="seat-10">A10</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-21">
                    <label for="seat-21">A11</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-57">
                    <label for="seat-57">A12</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-11">
                    <label for="seat-11">B1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-12">
                    <label for="seat-12">B2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-13">
                    <label for="seat-13">B3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-14">
                    <label for="seat-14">B4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-15">
                    <label for="seat-15">B5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-16">
                    <label for="seat-16">B6</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-17">
                    <label for="seat-17">B7</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-18">
                    <label for="seat-18">B8</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-19">
                    <label for="seat-19">B9</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-20">
                    <label for="seat-20">B10</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-22">
                    <label for="seat-22">B11</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-58">
                    <label for="seat-58">B12</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-23">
                    <label for="seat-23">C1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-24">
                    <label for="seat-24">C2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-25">
                    <label for="seat-25">C3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-26">
                    <label for="seat-26">C4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-27">
                    <label for="seat-27">C5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-28">
                    <label for="seat-28">C6</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-29">
                    <label for="seat-29">C7</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-30">
                    <label for="seat-30">C8</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-31">
                    <label for="seat-31">C9</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-32">
                    <label for="seat-32">C10</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-33">
                    <label for="seat-33">C11</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-59">
                    <label for="seat-59">C12</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-34">
                    <label for="seat-34">D1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-35">
                    <label for="seat-35">D2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-36">
                    <label for="seat-36">D3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-37">
                    <label for="seat-37">D4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-38">
                    <label for="seat-38">D5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-39">
                    <label for="seat-39">D6</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-40">
                    <label for="seat-40">D7</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-41">
                    <label for="seat-41">D8</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-42">
                    <label for="seat-42">D9</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-43">
                    <label for="seat-43">D10</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-44">
                    <label for="seat-44">D11</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-60">
                    <label for="seat-60">D12</label>
                </div>
            </div>
            <div class="GheRandom" id="GheR">
                <div class="seat">
                    <input type="checkbox" id="seat-45">
                    <label for="seat-45">R1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-46">
                    <label for="seat-46">R2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-47">
                    <label for="seat-47">R3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-48">
                    <label for="seat-48">R4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-49">
                    <label for="seat-49">R5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-50">
                    <label for="seat-50">R6</label>
                </div>
            </div>
            <div class="GheDoi" id="GheDoi">
                <div class="seat">
                    <input type="checkbox" id="seat-51">
                    <label for="seat-51">G1</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-52">
                    <label for="seat-52">G2</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-53">
                    <label for="seat-53">G3</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-54">
                    <label for="seat-54">G4</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-55">
                    <label for="seat-55">G5</label>
                </div>
                <div class="seat">
                    <input type="checkbox" id="seat-56">
                    <label for="seat-56">G6</label>
                </div>


                <button type="submit" id="submitButton" onclick="ChonXN('Agree')">Xác nhận</button>
                <button type="reset" id="canclebutton" onclick="ChonHuy('Canclee')">Hủy</button>
            </div>

            <script>
                var chonGheDiv = document.getElementById("Ghe");
                var Showbill = document.getElementById("bill");

                function Choose(id) {
                    document.getElementById("submitButton").addEventListener("click", function() {
                        chonGheDiv.style.display = "none"
                        Showbill.style.display = "block"

                    });

                }

                function ChonHuy() {
                    var chonVeDiv = document.getElementById("chonVe");
                    var chonGheDiv = document.getElementById("Ghe");

                    chonVeDiv.style.display = "block"; // Hiện phần chọn vé
                    chonGheDiv.style.display = "none"; // Ẩn phần chọn ghế
                }

                function ChonXN() {
                    var chonGheDiv = document.getElementById('Ghe');
                    var Showbill = document.getElementById('bill');

                    const selectedSeatsDon = document.querySelectorAll('#GheDon input:checked');
                    const selectedSeatsGhep = document.querySelectorAll('#GheR input:checked');
                    const selectedSeatsDoi = document.querySelectorAll('#GheDoi input:checked');

                    // Đọc số lượng ghế cần mua từ input
                    const soLuongGheDon = parseInt(document.getElementById("input1").value);
                    const soLuongGheGhep = parseInt(document.getElementById("input2").value);
                    const soLuongGheDoi = parseInt(document.getElementById("input3").value);

                    // Kiểm tra số lượng ghế đã chọn
                    if (selectedSeatsDon.length === soLuongGheDon &&
                        selectedSeatsGhep.length === soLuongGheGhep &&
                        selectedSeatsDoi.length === soLuongGheDoi) {
                        alert("Bạn đã chọn đủ số lượng ghế cho mỗi loại. Tiếp tục để thanh toán.");
                        Showbill.style.display = "block";
                        chonGheDiv.style.display = "none";
                    } else {
                        alert("Số lượng ghế chưa đủ hoặc bạn  đã chọn quá số lượng ghế đã đặt.");
                    }
                }
            </script>
            <div class="Note"> </div>
        </div>

    </div>
    <div class="Thanhtoan" id="bill">
        <h2>Hóa đơn</h2>
        <ul id="Bill-list" style="list-style-type: none;">
        </ul>

    </div>
    <script>
        // Hàm cập nhật thông tin hóa đơn
        function updateBill() {
            var giaTri1 = parseInt(document.getElementById("input1").value);
            var giaTri2 = parseInt(document.getElementById("input2").value);
            var giaTri3 = parseInt(document.getElementById("input3").value);

            // Đọc loại ghế và tổng tiền từ trang "Chọn Vé"
            const loaiGheDon = "Ghế đơn";
            const loaiGheDoi = "Ghế đôi";
            const loaiGheGhep = "Ghế Ghép";
            const tongTienGhe = parseInt(document.getElementById("sumAll").textContent);

            // Đọc tên ghế từ trang "Chọn Ghế"
            const selectedSeats = document.querySelectorAll('.seat input:checked');
            const tenGheDaChon = Array.from(selectedSeats).map(seat => seat.nextElementSibling.textContent);

            // Lấy phần tử "bill" để cập nhật thông tin hóa đơn
            const billElement = document.getElementById('bill');
            billElement.innerHTML = '<h2>Hóa đơn</h2>';
            // Lấy phần tử HTML mà bạn muốn chèn biểu tượng vào (ví dụ: một thẻ <div> có id="icon-container")

            // Hiển thị thông tin trên hóa đơn dựa trên điều kiện
            if (giaTri1 > 0) {
                billElement.innerHTML += '<p>Loại ghế: ' + loaiGheDon + ': ' + giaTri1 + '</p>' + '<br>';

            }
            if (giaTri2 > 0) {
                billElement.innerHTML += '<p>Loại ghế: ' + loaiGheDoi + ': ' + giaTri2 + '</p>' + '<br>';

            }
            if (giaTri3 > 0) {
                billElement.innerHTML += '<p>Loại ghế: ' + loaiGheGhep + ': ' + giaTri3 + '</p>' + '<br>';
            }

            const tongTienHTML = '<p>Tổng tiền: ' + tongTienGhe + 'đ</p>';
            const tenGheHTML = '<p>Ghế đã chọn: ' + tenGheDaChon.join(', ') + '</p>' + '<br>' + '<img src="images/QRHoabittut.jpg" style="width: 250px; height: 250px;">';




            // Thêm các đoạn HTML vào phần tử "bill"
            billElement.innerHTML += tongTienHTML;
            billElement.innerHTML += tenGheHTML;
        }

        // Gọi hàm updateBill khi có ghế được chọn
        document.querySelectorAll('.seat input').forEach(function(seat) {
            seat.addEventListener('change', updateBill);
        });
    </script>
</body>

</html>