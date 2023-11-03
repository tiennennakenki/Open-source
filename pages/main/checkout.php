<?php
include("config.php");
$conn = mysqli_connect($servername, $username, $password, $dbname);
if ($conn->connect_error) {
  die("Kết nối tới cơ sở dữ liệu thất bại: " . $conn->connect_error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="css-rf24tk">
    <div class="teko-row css-zbluka" style="margin-left: -8px; margin-right: -8px;">
        <div class="teko-col teko-col-8 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
            <div class="teko-card css-1eks86m">
                <div class="teko-card-body css-0">
                    <div class="css-1557c61">
                        <div type="line" width="137" height="40" class="css-1sf42cy">
                            <div color="textSecondary" direction="horizontal" type="line" class="css-1ftlvw7">
                                <div type="subtitle" color="primary500" class="css-b9p25v">Nhận hàng tại nhà</div>
                            </div>
                            <div color="textSecondary" direction="horizontal" type="line" class="css-1ftlvw7">
                                <div type="body" color="textSecondary" class="css-1cka3el">Nhận hàng tại điểm</div>
                            </div>
                        </div>
                        <div class="css-1ms22as">
                            <div type="subtitle" class="css-7mlvw6">Thông tin nhận hàng</div>
                            <div class="teko-row teko-row-start css-4sc7mn" style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                                <div data-content-region-name="addressShipping" data-track-content="true" data-content-name="addNewAddress" class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;" ><a height="2.5rem" class="css-1pytm6y" type="button" style="color: rgb(132, 135, 136); min-height: 100px; flex-direction: column; height: 100%;" href = "?page=consignee-information"><svg fill="none" viewBox="0 0 24 24" size="25" class="css-1e44j4b" color="#848788" height="25" width="25" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M12.75 4C12.75 3.58579 12.4142 3.25 12 3.25C11.5858 3.25 11.25 3.58579 11.25 4V11.25H4C3.58579 11.25 3.25 11.5858 3.25 12C3.25 12.4142 3.58579 12.75 4 12.75H11.25V20C11.25 20.4142 11.5858 20.75 12 20.75C12.4142 20.75 12.75 20.4142 12.75 20V12.75H20C20.4142 12.75 20.75 12.4142 20.75 12C20.75 11.5858 20.4142 11.25 20 11.25H12.75V4Z" fill="#82869E"></path>
                                        </svg>Thêm địa chỉ<span style="margin-left: 0px;" >
                                            <div class="css-157jl91"></div>
                                        </span></a></div>
                            </div>
                            <div type="subtitle" class="css-1e46hlx">Nhận Mã online, hóa đơn qua email</div>
                            <div id="delivery-email" class="css-14zmbe9">
                                <div class="css-1dmcrfd">
                                    <div class="input-container css-zujl7w" height="40" disabled=""><input type="text" placeholder="Nhập email nhận thông tin" maxlength="255" disabled="" class="css-1acir1a" value="">
                                        <div height="40" class="css-10fj0sh"><svg fill="none" viewBox="0 0 24 24" cursor="pointer" size="20" class="css-9w5ue6" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M12 21C16.9706 21 21 16.9706 21 12C21 7.02944 16.9706 3 12 3C7.02944 3 3 7.02944 3 12C3 16.9706 7.02944 21 12 21Z" fill="#DFDFE6"></path>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.90045 8.64594C9.60755 8.35305 9.13268 8.35305 8.83979 8.64594C8.54689 8.93883 8.54689 9.41371 8.83979 9.7066L11.0765 11.9433L8.83997 14.1798C8.54707 14.4727 8.54707 14.9476 8.83997 15.2405C9.13286 15.5334 9.60773 15.5334 9.90063 15.2405L12.1371 13.004L14.3737 15.2405C14.6666 15.5334 15.1414 15.5334 15.4343 15.2405C15.7272 14.9476 15.7272 14.4727 15.4343 14.1798L13.1978 11.9433L15.4345 9.7066C15.7274 9.41371 15.7274 8.93883 15.4345 8.64594C15.1416 8.35305 14.6667 8.35305 14.3738 8.64594L12.1371 10.8826L9.90045 8.64594Z" fill="white"></path>
                                            </svg></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="css-176y93t">
                <div type="subtitle" class="css-y7yt88">Ghi chú cho đơn hàng</div>
                <div class="css-1v4kstc">
                    <div class="input-container css-kwckz4" height="40"><input type="text" placeholder="Nhập thông tin ghi chú cho nhà bán hàng" maxlength="255" class="css-1acir1a" value=""></div>
                </div>
            </div>
            <div class="teko-card css-1rtntgf">
                <div class="teko-card-header css-0">
                    <div>
                        <div type="title" class="css-2927is">Phương thức thanh toán</div>
                        <div type="body" color="textSecondary" class="css-1npqwgp">Thông tin thanh toán của bạn sẽ luôn được bảo mật</div>
                    </div>
                </div>
                <div class="teko-card-body css-0">
                    <div class="teko-row teko-row-start css-7vjpsl" style="margin-left: -8px; margin-right: -8px; row-gap: 16px;">
                        <div class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                            <div data-content-region-name="paymentMethod" data-track-content="true" data-content-name="VNPAY_GATEWAY" data-content-target="VNPAY_GATEWAY" class="css-1014eaz" style="height: 100%;">
                                <div type="subtitle" class="css-yukwon">Thanh toán VNPAY-QR<span style="padding-left: 5px;"><span class="css-1q01xub">
                                            <div type="caption" color="white" class="css-143zsia">Khuyên dùng</div>
                                        </span></span></div>
                                <div type="body" color="textSecondary" class="css-ah9bk2">Thanh toán qua Internet Banking, Visa, Master, JCB, VNPAY-QR</div>
                                <div type="body" class="css-1dqxh16"></div>
                                <div class="css-18wywdr"></div><span class="css-mpv07g"><svg fill="none" viewBox="0 0 24 24" size="20" class="css-1kpmq" color="#ffffff" height="20" width="20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg></span>
                            </div>
                        </div>
                        <div class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                            <div data-content-region-name="paymentMethod" data-track-content="true" data-content-name="COD" data-content-target="COD" class="css-64rk53" style="height: 100%;">
                                <div type="subtitle" class="css-yukwon">Thanh toán khi nhận hàng<span style="padding-left: 5px;"></span></div>
                                <div type="body" color="textSecondary" class="css-ah9bk2"></div>
                                <div type="body" class="css-1dqxh16"></div>
                            </div>
                        </div>
                        <div class="teko-col teko-col-6 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
                            <div data-content-region-name="paymentMethod" data-track-content="true" data-content-name="ZALOPAY_GATEWAY" data-content-target="ZALOPAY_GATEWAY" class="css-64rk53" style="height: 100%;">
                                <div type="subtitle" class="css-yukwon">Thanh toán QR Code ZaloPay<span style="padding-left: 5px;"></span></div>
                                <div type="body" color="textSecondary" class="css-ah9bk2">Thanh toán QR Code ZaloPay</div>
                                <div type="body" class="css-1dqxh16"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="teko-row teko-row-start teko-row-middle css-1qektwm"><label class="check-box css-1u2186j">
                    <div class="css-l24w9c"><input type="checkbox" class="att-vat-checkbox css-lc01j1">
                        <div class="checkbox-inner css-gfk8lf"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-u5ggi9" color="transparent" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg></div>
                    </div>
                </label>
                <div type="body" class="css-irycpn">Tôi muốn xuất hóa đơn</div>
            </div>
            <div data-content-region-name="staffCode" data-track-content="true" data-content-name="referralCode" data-content-target="checkout" class="css-176y93t">
                <div type="subtitle" class="css-y7yt88">Mã nhân viên tư vấn</div>
                <div class="css-1v4kstc" data-content-region-name="staffCode" data-track-content="true" data-content-name="referralCode" data-content-target="checkout">
                    <div class="input-container css-kwckz4" height="40"><input type="text" placeholder="Đây là mã giới thiệu, không có tác dụng giảm giá cho đơn hàng" maxlength="255" class="css-1acir1a" value=""></div>
                </div>
            </div>
        </div>
        <div class="teko-col teko-col-4 css-17ajfcv" style="padding-left: 8px; padding-right: 8px;">
            <div class="css-14xqo9c">
                <div class="card-header css-0">
                    <div class="css-1euuut5">
                        <h5 style="font-size: 1.25rem">Thông tin đơn hàng</h5><a href="?page=cart-page">Chỉnh sửa</a>
                    </div>
                </div>
                <div class="card-body css-0">
                    <div class="css-9op68y">
                        <div class="css-ov1ktg">
                            <div>
                                <div height="80" width="80" class="css-17nqxzh">
                                    <picture>
                                        <source srcset="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM=rw" type="image/webp">
                                        <source srcset="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM" type="image/png"><img class="lazyload css-jdz5ak" alt="product" src="https://lh3.googleusercontent.com/r_xFGeSZ4xFlzdKgItX8Jp82j10sfAnJwvyIYMNpEr9K-gaJzeBnMJJsEd6L51m1of60-l1VjFPj7mvrA7KSyu-WrAXIkxM=rw" loading="lazy" decoding="async">
                                    </picture>
                                </div>
                            </div>
                            <div class="css-f0vs3e"><a target="_blank" href="/products/221003264" aria-label="Image" class="css-587jha">
                                    <div type="body" color="textPrimary" class="css-1h5tj4c">Điện thoại Samsung Galaxy Z Flip4 8GB/128GB (Light Violet) (SM-F721BLVAXXV)</div>
                                </a>
                                <div type="caption" color="textSecondary" class="css-1f5a6jh">128GB, Purple</div>
                                <div type="caption" color="textSecondary" class="css-1f5a6jh">Số lượng 1</div><span class="css-7ofbab">15.149.000<span class="css-1ul6wk9">đ</span></span>
                                <div class="css-1vptl7o"><span class="css-p2smad">22.990.000<span class="css-1ul6wk9">đ</span></span></div>
                            </div>
                        </div>
                        <div class="css-ov1ktg">
                            <div class="css-1xjc5z">
                                <div class="css-1fmlnyw">
                                    <div class="css-1axx38a">
                                        <div height="16" width="16" class="css-xe0n85"><img class="lazyload css-jdz5ak" alt="" src="https://shopfront-cdn.tekoapis.com/cart/gift-filled.png" loading="lazy" decoding="async"></div>
                                    </div>
                                    <div class="css-5j9p1n">Giảm 7.841.000₫ (áp dụng vào giá sản phẩm)
                                        1x Tai nghe Samsung Galaxy Buds 2 (Đen) (SM-R177NZKAXXV) (Quà tặng)
                                        1x Sạc nhanh Samsung 15W Type C, Trắng (EP-T1510NWEGWW) (Quà tặng)</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="css-1pnc6ez">
                    <div class="teko-row teko-row-no-wrap teko-row-space-between css-1qrgscw">
                        <div class="teko-col css-17ajfcv"><label class="check-box css-1u2186j">
                                <div class="css-l24w9c"><input type="checkbox" class="css-lc01j1" style = "margin: 0px">
                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-u5ggi9" color="transparent" height="12" width="12" xmlns="http://www.w3.org/2000/svg" style = "vertical-align: middle;">
                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                </div>
                                <div type="body" class="checkbox-label css-6r3s23" style="flex: 1 1 0%;">
                                    <div type="subtitle" class="ellipsis css-1eh2vr2">Cài đặt</div>
                                </div>
                            </label></div>
                        <div class="teko-col css-17ajfcv">
                            <div type="subtitle" color="primary600" class="css-1e3yaee">Miễn phí</div>
                        </div>
                    </div>
                </div>
            </div>
            <div style="padding-top: 1rem;">
                <div class="css-1pnc6ez">
                    <div class="teko-row teko-row-no-wrap teko-row-space-between css-1qrgscw">
                        <div class="teko-col css-17ajfcv" style="box-sizing :border-box; display:block"><label class="check-box css-1u2186j">
                                <div class="css-l24w9c"><input type="checkbox" class="css-lc01j1" >
                                    <div class="checkbox-inner css-gfk8lf"><svg fill="none" viewBox="0 0 24 24" size="12" class="css-u5ggi9" color="transparent" height="12" width="12" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M5 12.4545L9.375 17L19 7" stroke="#82869E" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                        </svg></div>
                                </div>
                                <div type="body" class="checkbox-label css-6r3s23" style="flex: 1 1 0%; display:block">
                                    <div type="subtitle" class="ellipsis css-1eh2vr2">Hỗ trợ kỹ thuật</div>
                                </div>
                            </label></div>
                        <div class="teko-col css-17ajfcv">
                            <div type="subtitle" color="primary600" class="css-1e3yaee">Miễn phí</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="css-cssveg">
                <div class=" css-27abj6">
                    <div class="teko-card css-6j0k0x">
                        <div class="teko-card-body css-0">
                            <div class="css-nouyrl">
                                <table class="css-qc9cbn">
                                    <tbody>
                                        <tr>
                                            <td color="#848788" class="css-8ogxmh">
                                                <div class="css-99sejg">Tổng tạm tính &nbsp;<div class="css-1777v"></div>
                                                </div>
                                            </td>
                                            <td data-att-label="Tổng tạm tính" class="css-1xrkmkn">15.149.000₫</td>
                                        </tr>
                                        <tr>
                                            <td color="#848788" class="css-13izjcd">
                                                <div class="css-99sejg">Phí vận chuyển &nbsp;<div class="css-1777v"></div>
                                                </div>
                                            </td>
                                            <td data-att-label="Phí vận chuyển" class="css-fsu5pb">Miễn phí</td>
                                        </tr>
                                        <tr>
                                            <td color="#848788" class="css-13izjcd">Thành tiền </td>
                                            <td class="att-final-price css-aafp0n">15.149.000&nbsp;₫</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="css-b2d3vz">(Đã bao gồm VAT)</div>
                            </div>
                        </div>
                        <div class="teko-card-footer css-0">
                            <div data-content-region-name="bottomCheckOut" data-track-content="true" data-content-name="checkout" class="css-0"><button class="att-checkout-button css-v463h2">
                                    <div class="css-1lqe6yk">THANH TOÁN</div>
                                </button></div>
                            <div class="css-dzomrg">
                                <p style = "margin-top: 0; margin-bottom: 1rem">Nhấn "Thanh toán" đồng nghĩa với việc bạn đọc và đồng ý tuân theo <a href="https://help.phongvu.vn/chinh-sach-ban-hang/quyen-va-nghia-vu-cac-ben" target="_blank" style="text-decoration: underline">Điều khoản và Điều kiện</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="checkoutInlineRight"></div>
        </div>
    </div>
</div>
</body>
</html>