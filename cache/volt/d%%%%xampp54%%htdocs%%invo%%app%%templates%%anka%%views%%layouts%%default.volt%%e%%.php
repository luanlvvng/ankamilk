a:11:{i:0;s:52:"<!DOCTYPE html>
<html>
    <head>
        <title>";s:5:"title";N;i:1;s:463:"</title>
        <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="stylesheet" href="/skin/anka/css/core.css" media="all" />
        <link rel="stylesheet" href="/skin/anka/css/fm.scrollator.jquery.css" media="all"/>
        <script type="text/javascript" src="/skin/anka/js/jquery-1.11.2.min.js"></script>";s:4:"head";N;i:2;s:26:"</head>
    <body class="";s:9:"bodyclass";N;i:3;s:2611:"" data-base-url="<?php echo $this->url->get(); ?>" data-debug="">
        <div id="wrap-all">
            <div id="wrap-header">
                <div id="header" class="container">
                    <div class="left">
                        <span class="icon hotline left"></span>
                        Hotline: <span class="strong organce">(08) 38 483 483</span>
                    </div>
                    <div class="right">
                        <?php if (!isset($current_user)) { ?>
                            <span class="border-left-gray"><a href="<?php echo $this->url->get('/session/start'); ?>">Đăng nhập</a></span>
                            <span class="border-left-gray"><a href="<?php echo $this->url->get('/register'); ?>">Đăng ký</a></span>
                        <?php } else { ?>
                            <span class="border-left-gray"><a href="<?php echo $this->url->get('/session/end'); ?>"><?php echo $current_user['name']; ?> Đăng xuất</a></span>
                            <?php if (Custom\MyTags::isAllowed($current_user['role'], 'admin', 'index')) { ?>
                                <span class="border-left-gray"><a href="<?php echo $this->url->get('/admin'); ?>">Admin</a></span>
                            <?php } ?>

                        <?php } ?>
                        <span class="border-left-gray"><a href="#"><span class="icon cart"></span></a></span>
                        <span class="border-left-gray"><a href="#"><span class="icon search"></span></a></span>
                    </div>
                </div>
            </div>
            <div class="clear"></div>
            <div class="wrap-menu">
                <div class="container main-menu">
                    <a href="<?php echo $this->url->get(); ?>" class="logo" title="Anka Milk"><img alt="Anka Milk" src="/skin/anka/images/anka-logo.png" /><h1>Anka Milk</h1></a>
                    <ul class="menu">
                        <li><a href="<?php echo $this->url->get('gioi-thieu'); ?>">Giới thiệu</a></li>
                        <li><a href="san-pham.html">Sản phẩm</a></li>
                        <li><a href="traceability.html">Traceability</a></li>
                        <li><a href="anka-irish-farm.html">Anka irish farm</a></li>
                        <li><a href="<?php echo $this->url->get('tu-van-cung-chuyen-gia'); ?>">Tư vấn cùng chuyên gia</a></li>
                    </ul>
                </div>
            </div>
            <div class="clear"></div>
            <?php echo $this->flash->output(); ?>";s:7:"content";N;i:4;s:3186:"<div class="clear"></div>
            <div class="footer">
                <div class="container">
                    <div class="wrap-content">
                        <div class="col5 visible-animation">
                            <h3>Traceability</h3>
                            <ul>
                                <li><a href="#">From Cow to Can</a></li>
                                <li><a href="#">Traceability</a></li>
                            </ul>
                        </div>
                        <div class="col5 visible-animation">
                            <h3>Sản phẩm</h3>
                            <ul>
                                <li><a href="#">Anka Gold Grow</a></li>
                                <li><a href="#">Anka Gold IQ</a></li>
                            </ul>
                        </div>
                        <div class="col5 visible-animation">
                            <h3>Giới thiệu</h3>
                            <ul>
                                <li><a href="#">Thông điệp từ CEO</a></li>
                                <li><a href="#">Câu chuyện Anka</a></li>
                                <li><a href="#">Đối tác</a></li>
                            </ul>
                        </div>
                        <div class="col5 visible-animation">
                            <h3>Hỗ trợ</h3>
                            <ul>
                                <li><a href="#">Liên hệ Anka</a></li>
                                <li>Hotline: <span class="strong">(08) 38 483 483</span></li>
                                <li><a href="#">Câu hỏi thường gặp</a></li>
                                <li><a href="#">Tìm kiếm</a></li>
                            </ul>
                        </div>                
                        <div class="col5 visible-animation">
                            <h3>Kết nối & Liên hệ</h3>
                            <p class="strong">Anka Milk</p>
                            Tòa nhà Sunrise Tower<br />
                            Tháp 5, TPHCM<br />
                            ______<br />
                            Hotline: (08) 35 483 483
                        </div>
                        <div class="clear" style="height: 26px;"></div>
                        <a href="#" title="Anka Milk trên Facebook"><span class="icon facebook"></span></a>
                        <a href="#" title="Anka Milk trên Youtube"><span class="icon youtube"></span></a>
                    </div>
                    <div class="clear" style="height: 26px;"></div>
                    <div class="bt-top"><a href="#top" id="bt-top" title="Lên trên cùng">&nbsp;</a></div>
                </div>
                <div class="clear"></div>
            </div>
        </div>        
        <link rel="stylesheet" href="/skin/anka/css/styles.css" media="all"/>

        <script type="text/javascript" src="/skin/anka/js/fm.scrollator.jquery.js"></script>
        <script src="/skin/anka/js/common.js"></script>
        <script src="/skin/anka/js/extension.js"></script>";s:10:"footscript";N;i:5;s:16:"</body>
</html>";}