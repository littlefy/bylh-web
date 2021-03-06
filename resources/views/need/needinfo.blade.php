@extends('demo.admin')
@extends('demo.nav')

@section('content')
<!--发布需求-->
<div class="am-g am-g-fixed" style="padding-top: 45px;">
    <div class="am-u-lg-8 am-u-md-8 am-u-sm-8" >
        <div class="container1" style="border: 2px solid #eee;padding: 20px;background: #fff;">
            <div class="title" style="height: 37px;font-family: 'Microsoft YaHei';color: #666666;font-size: 18px;font-weight: 700;line-height: 37px;width:  850px;overflow: hidden;">简单小问卷，人人可做<span style="font-size: 20px;color: #b84554;padding-left: 20px;">￥50</span>
            </div>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-dashed" />
            <div class="item-mode">
                <div class="item-lesstime">
                    <div class="fl " id="djsTime" style="font-family: 'Microsoft YaHei';color: #666666;font-size: 16px;font-weight: bold;">剩余时间：
                        <strong id="RemainD" style="color: #FF6600">21</strong>天<strong id="RemainH" style="color: #FF6600">9</strong>时<strong id="RemainM" style="color: #FF6600">23</strong>分<strong id="RemainS" style="color: #FF6600">40</strong>秒</div>
                </div>
                <div class="fl item_xs" style="margin-top: 10px;"><div class="xs_morearr xs_morearr_nobg">赏金分配：计件工资，雇主需要 <b>25</b> 个稿件，每个 <b>2</b> 元。<br>目前已选定<font color="green"> 0</font> 个合格，还需要 <font color="red">25</font> 个稿件。
                    </div>
                </div>
            </div>
            <div class="item_process" style="margin-top:20px;background: #F2F2F2;padding: 25px 20px 30px 20px;border: solid 1px #E9E9E9;overflow: hidden;">
                <div class="jinduline">
                    <div class="fl jindu_item am-u-lg-3 am-u-md-3 am-u-sm-3" style="float: left;">
                        <div class="jindu_y_line jindu_out" style="background: url(images/process_red.jpg) left 15px repeat-x;"><div class="jindu_y_q_blue_s" style="background: url(../images/process_cr_red.jpg) center center no-repeat;text-align: center;font-size: 22px;color: #fff;height: 34px;margin: 0 auto;"></div></div>
                        <div class="jindu_y_text">发布需求<br><span class="jd_date"></span></div>
                    </div>

                    <div class="fl jindu_item am-u-lg-3 am-u-md-3 am-u-sm-3" style="float: left;">
                        <div class="jindu_y_line jindu_out" style="background: url(images/process_red.jpg) left 15px repeat-x;"><div class="jindu_y_q_blue_s" style="background: url(../images/process_cr_red.jpg) center center no-repeat;text-align: center;font-size: 22px;color: #fff;height: 34px;margin: 0 auto;"></div></div>
                        <div class="jindu_y_text">进行中<br><span class="jd_date"></span></div>
                    </div>

                    <div class="fl jindu_item am-u-lg-3 am-u-md-3 am-u-sm-3" style="float: left;">
                        <div class="jindu_y_line jindu_out" style="background: url(images/process_red.jpg) left 15px repeat-x;"><div class="jindu_y_q_blue_s" style="background: url(../images/process_cr_red.jpg) center center no-repeat;text-align: center;font-size: 22px;color: #fff;height: 34px;margin: 0 auto;"></div></div>
                        <div class="jindu_y_text ">验收付款
                            <br><span class="jd_date">  </span>
                        </div>
                    </div>

                    <div class="fl jindu_item am-u-lg-3 am-u-md-3 am-u-sm-3" style="float: left;">
                        <div class="jindu_y_line jindu_out" style="background: url(images/process_red.jpg) left 15px repeat-x;"><div class="jindu_y_q_blue_s" style="background: url(../images/process_cr_red.jpg) center center no-repeat;text-align: center;font-size: 22px;color: #fff;height: 34px;margin: 0 auto;"></div></div>
                        <div class="jindu_y_text">评价<br><span class="jd_date"></span> </div>
                    </div>

                    <div class="clear"></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="desct-container" style="margin-top: 10px;height: 300px;">
                <div class="desct-title" style="height: 25px;line-height: 25px;font-size: 18px;color: #333;margin-bottom: 20px;margin-left: 10px;padding-top: 10px;">任务详情
                    <div class="desct-content" >
                        <p>
                            这个任务我奖励2元，加上网站能得到2元，实际到手的是4元，希望大家踊跃交稿<br>
                            任务要求：<br>
                            1 注册地址： http://www.juxiangyou.com/floor/recom/6863544 （不是本链接注册无效）<br>
                            2 注册就送10000U币，通过试玩游戏达到20000U币（注册网站就送10000U币，相当于只用玩游戏赚10000U币即可）<br>
                            3 绑定支付宝，成功提现2元。截图交稿（截图看下方的示范）<br><br>


                            如有不懂的加***进空间看攻略，此网站可长期做长期赚钱，做的好的一天几十上百没有问题<br><br>
                        <h3 style="font-size: 15px;font-weight: bold;">网站类型：其他类型</h3>

                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="guessrequest" style="margin-top: 20px;border-width: 2px;border-color: #e9e5e5;border-style: solid;background-color: #ffffff;box-shadow:0px 3px 0px 0px rgba(4,0,0,0.1);padding-left:24px;padding-top: 35px;padding-bottom: 20px;padding-right: 20px;">
            <div class="title" style="font-family: 'Microsoft YaHei';color: #333;font-size: 24px;font-weight: 400;line-height: 24px;">
                <span class="sign" style="padding: 0px 3px;background-color: #ff8a00;margin-right: 15px;"></span>推荐服务商
            </div>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
            <ul data-am-widget="gallery" class="am-gallery am-avg-sm-2
							  am-avg-md-3 am-avg-lg-4 am-gallery-default" data-am-gallery="{ pureview: true }" >
                <li>
                    <div class="am-gallery-item">
                        <a href="images/f1.jpg" class="">
                            <img src="images/f1.jpg"  alt="远方 有一个地方 那里种有我们的梦想"/>
                            <h3 class="am-gallery-title">远方 有一个地方 那里种有我们的梦想</h3>
                            <div class="am-gallery-desc">2375-09-26</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="am-gallery-item">
                        <a href="images/f1.jpg"  class="">
                            <img src="images/f1.jpg"   alt="某天 也许会相遇 相遇在这个好地方"/>
                            <h3 class="am-gallery-title">某天 也许会相遇 相遇在这个好地方</h3>
                            <div class="am-gallery-desc">2375-09-26</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="am-gallery-item">
                        <a href="images/f1.jpg"  class="">
                            <img src="images/f1.jpg"   alt="不要太担心 只因为我相信"/>
                            <h3 class="am-gallery-title">不要太担心 只因为我相信</h3>
                            <div class="am-gallery-desc">2375-09-26</div>
                        </a>
                    </div>
                </li>
                <li>
                    <div class="am-gallery-item">
                        <a href="../images/f1.jpg"  class="">
                            <img src="../images/f1.jpg"   alt="终会走过这条遥远的道路"/>
                            <h3 class="am-gallery-title">终会走过这条遥远的道路</h3>
                            <div class="am-gallery-desc">2375-09-26</div>
                        </a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
    <div class="am-u-lg-4 am-u-md-4 am-u-sm-4">
        <div class="need-user-title" style="margin-left:20px;padding: 33px;border-width: 2px;border-color: #e9e5e5;border-style: solid;background-color: #ffffff;box-shadow: 0px 3px 0px 0px rgba(4, 0, 0, 0.1);">
            <div class="company_left am-u-lg-4 am-u-md-4 am-u-sm-4">
                <a href="http://hi.680.com/1265780" target="_blank">
                    <img src="http://p3.680.com/Myfile/2012-5/9/s/2038823_1265780.gif" alt="" style="width: 84px; height: 84px;border: solid 1px #ddd;"></a>
            </div>
            <div class="company_rigth am-u-lg-4 am-u-md-4 am-u-sm-4" style="float: right; font-family: SimSun;font-weight: 400;line-height: 28px;color: #666666;font-size: 12px;width: 120px;">
                <a class="company_name" href="http://hi.680.com/1265780" target="_blank" style="font-family: SimSun; color: #333333; font-weight: 700;font-size: 16px;height: 30px;line-height: 30px;display: block;overflow: hidden;">
                    liyuxiao88</a>
                <div>
                    浙江 宁波<br>
                    信用等级：<span style="color:#ff6600">金牌雇主</span>
                </div>
            </div>
            <div class="clear"></div>
            <div class="company_button" style="padding-top:10px;">
                <button class="am-btn am-btn-danger js-alert" type="button" data-am-modal="{target: '#doc-modal-1', closeViaDimmer: 0, width: 400, height: 225}">立即购买</button>
                <button class="am-btn am-btn-success" type="button" style="float: right;">给我留言</button>
            </div>
            <script>
                $('.js-alert').on('click', function() {
                    var $actions = AMUI.dialog.actions({
                        title: '扫一扫微信，完成支付',
                        items: [
                            {content: '<a href="#" ><img src="/images/wechat.png" style="width:40%;height:40%;text-align:center;"></a>'},
                        ],
                        onConfirm: function(index, target) {
                            console.log(index);
                            $actions.close();
                        }
                    });
                    $actions.show();
                });
            </script>
        </div>
        <div class="need-siminar" style="padding-left: 24px;padding-top: 35px;padding-bottom: 20px;border-width: 2px;border-color: #e9e5e5;border-style: solid;background-color: #ffffff;margin-top: 25px;margin-left:20px;padding-right: 10px;">
            <div class="title" style="height: 25px;font-family: 'Microsoft YaHei';color: #333;font-size: 24px;font-weight: 400;line-height: 24px;">
                <span class="sign" style="padding: 0px 3px;background-color: #ff8a00;margin-right: 15px;"></span>推荐同类项目
            </div>
            <hr data-am-widget="divider" style="" class="am-divider am-divider-default" />
            <div class="moreItems">

                <ul style="line-height: 28px;">

                    <li><a href="/" target="_blank" title="全民营销"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;全民营销</a></li>

                    <li><a href="/" target="_blank" title="营销推广"><span style="color: #ff0000;font-weight: 700;">￥1000元</span>&nbsp;营销推广</a></li>

                    <li><a href="/" target="_blank" title="全民营销"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;全民营销</a></li>

                    <li><a href="/" target="_blank" title="全民QQ群推广"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;全民QQ群推广</a></li>

                    <li><a href="/" target="_blank" title="QQ群推广"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;QQ群推广</a></li>

                    <li><a href="/" target="_blank" title="全民营销"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;全民营销</a></li>

                    <li><a href="/" target="_blank" title="APP注册"><span style="color: #ff0000;font-weight: 700;">￥66元</span>&nbsp;APP注册</a></li>

                    <li><a href="/" target="_blank" title="APP下载手机注册2元一单，进微信群每天签到0.5元"><span style="color: #ff0000;font-weight: 700;">￥200元</span>&nbsp;APP下载手机注册2元一单，进微信群每天签到0.5元</a></li>

                    <li><a href="/" target="_blank" title="TB社区评价，2元一条，不需付钱，只要有TB号都可以做"><span style="color: #ff0000;font-weight: 700;">￥50元</span>&nbsp;TB社区评价，2元一条，不需付钱，只要有TB号都可以做</a></li>

                    <li><a href="/" target="_blank" title="手机秒变POS机，带你日赚3000，500元购物卡限量送"><span style="color: #ff0000;font-weight: 700;">￥50元</span>&nbsp;手机秒变POS机，带你日赚3000，500元购物卡限量送</a></li>

                    <li><a href="/" target="_blank" title="全民营销 扫码激活手机银行，充1元送10元话费"><span style="color: #ff0000;font-weight: 700;">￥60元</span>&nbsp;全民营销 扫码激活手机银行，充1元送10元话费</a></li>

                    <li><a href="/" target="_blank" title="每日任务，可重复提交。最高每日99元。1分钟即可完成"><span style="color: #ff0000;font-weight: 700;">￥50元</span>&nbsp;每日任务，可重复提交。最高每日99元。1分钟即可完成</a></li>

                    <li><a href="/" target="_blank" title="回收支付宝红包/每天可做"><span style="color: #ff0000;font-weight: 700;">￥100元</span>&nbsp;回收支付宝红包/每天可做</a></li>

                    <li><a href="/" target="_blank" title="手机app刷信用卡不求人，99钱管家来帮你的忙"><span style="color: #ff0000;font-weight: 700;">￥50元</span>&nbsp;手机app刷信用卡不求人，99钱管家来帮你的忙</a></li>

                    <li><a href="/" target="_blank" title="广东地区微信填资料jiefeng，60元一单   QQ  1853261468"><span style="color: #ff0000;font-weight: 700;">￥60元</span>&nbsp;广东地区微信填资料jiefeng，60元一单   QQ  1853261468</a></li>

                    <li><a href="/" target="_blank" title="转发一条朋友圈"><span style="color: #ff0000;font-weight: 700;">￥120元</span>&nbsp;转发一条朋友圈</a></li>

                </ul>

            </div>
        </div>
    </div>
</div>
@section('footer')
    <div class="footer " style="border: none;">
        <div class="footer-hd ">
        </div>
        <div class="footer-bd ">
            <br>
            <p style="text-align: center;">

                Copyright © 2017-2018  bylehu 版权所有  蜀ICP备17027037<br>
                客服电话：88888888<br>
                联系邮箱：不亦乐乎＠bylehu.com

            </p>
        </div>
    </div>
@endsection
@endsection