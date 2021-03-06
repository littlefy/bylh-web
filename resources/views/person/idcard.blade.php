@extends('demo.admin2')
@section('content')
<div class="center">
    <div class="col-main">
        <div class="main-wrap">
            <div class="am-cf am-padding">
                <div class="am-fl am-cf"><strong class="am-text-danger am-text-lg">实名认证</strong> / <small>Real&nbsp;authentication</small></div>
            </div>
            <hr/>
            <div class="authentication">
                <p class="tip">请填写您身份证上的真实信息，以用于报关审核</p>
                <div class="authenticationInfo">
                    <p class="title">填写个人信息</p>

                    <div class="am-form-group">
                        <label for="user-name" class="am-form-label">真实姓名</label>
                        <div class="am-form-content">
                            <input type="text" id="user-name" placeholder="请输入您的真实姓名">
                        </div>
                    </div>
                    <div class="am-form-group">
                        <label for="user-IDcard" class="am-form-label">身份证号</label>
                        <div class="am-form-content">
                            <input type="tel" id="user-IDcard" placeholder="请输入您的身份证信息">
                        </div>
                    </div>
                </div>
                <div class="authenticationPic">
                    <p class="title">上传身份证照片</p>
                    <p class="tip">请按要求上传身份证</p>
                    <ul class="cardlist">
                        <li>
                            <div class="cardPic">
                                <img src="images/cardbg.jpg">
                                <div class="cardText"><i class="am-icon-plus"></i>
                                    <p>正面照片</p>
                                </div>
                                <p class="titleText">身份证正面</p>
                            </div>
                            <div class="cardExample">
                                <img src="images/cardbg.jpg">
                                <p class="titleText">示例</p>
                            </div>

                        </li>
                        <li>
                            <div class="cardPic">
                                <img src="images/cardbg.jpg">
                                <div class="cardText"><i class="am-icon-plus"></i>
                                    <p>背面照片</p>
                                </div>
                                <p class="titleText">身份证背面</p>
                            </div>
                            <div class="cardExample">
                                <img src="images/cardbg.jpg">
                                <p class="titleText">示例</p>
                            </div>

                        </li>
                    </ul>
                </div>
                <div class="info-btn">
                    <div class="am-btn am-btn-danger">提交</div>
                </div>
            </div>
        </div>
        <!--底部-->
        @section('footer')
        <div class="footer ">
            <div class="footer-hd ">
            </div>
            <div class="footer-bd ">
                <p style="text-align: center;">
                    ©2017-2018 bylh.com 成备xxxxxxxx号<br>
                    不亦乐乎（成都）有限公司<br>
                    客服：xxxx-xxx-xxx

                </p>
            </div>
        </div>
            @endsection
    @endsection
