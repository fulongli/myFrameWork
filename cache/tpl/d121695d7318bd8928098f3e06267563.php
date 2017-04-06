<?php include "../cache/tpl/57864b256b9cbcc447ad6e28b7a55608.php";?>

  <!-- sidebar end -->

  <!-- content start -->
  <div class="admin-content"  style="min-height:800px">
    <div class="am-cf am-padding">
      <div class="am-fl am-cf"><strong class="am-text-primary am-text-lg">个人资料</strong> / <small>Personal information</small></div>
    </div>

    <hr/>

    <div class="am-g">

      <div class="am-u-sm-12 am-u-md-4 am-u-md-push-8">
<!--         <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="am-g">
              <div class="am-u-md-4">
                <img class="am-img-circle am-img-thumbnail" src="http://s.amazeui.org/media/i/demos/bw-2014-06-19.jpg?imageView/1/w/200/h/200/q/80" alt=""/>
              </div>
              <div class="am-u-md-8">
                <p>你可以使用<a href="javascript:;">gravatar.com</a>提供的头像或者使用本地上传头像。 </p>
                <form class="am-form">
                  <div class="am-form-group">
                    <input type="file" id="user-pic">
                    <p class="am-form-help">请选择要上传的文件...</p>
                    <button type="button" class="am-btn am-btn-primary am-btn-xs">保存</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
 -->
<!--         <div class="am-panel am-panel-default">
          <div class="am-panel-bd">
            <div class="user-info">
              <p>等级信息</p>
              <div class="am-progress am-progress-sm">
                <div class="am-progress-bar" style="width: 60%"></div>
              </div>
              <p class="user-info-order">当前等级：<strong>LV8</strong> 活跃天数：<strong>587</strong> 距离下一级别：<strong>160</strong></p>
            </div>
            <div class="user-info">
              <p>信用信息</p>
              <div class="am-progress am-progress-sm">
                <div class="am-progress-bar am-progress-bar-success" style="width: 80%"></div>
              </div>
              <p class="user-info-order">信用等级：正常当前 信用积分：<strong>80</strong></p>
            </div>
          </div>
        </div> -->

      </div>

      <div class="am-u-sm-12 am-u-md-8 am-u-md-pull-4">
        <form class="am-form am-form-horizontal" action="<?=$sr;?>?c=Admin&a=reva" method="post">
          <div class="am-form-group">
            <label for="user-name" class="am-u-sm-3 am-form-label">姓名</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-name" name="username" value="<?=$user[0]['username'];?>">
              <!-- <small>输入你的名字，让我们记住你。</small> -->
            </div>
          </div>

          <div class="am-form-group" mothod="post">
            <label for="user-email" class="am-u-sm-3 am-form-label">电子邮件</label>
            <div class="am-u-sm-9">
              <input type="email" id="user-email" name="email" value="<?=$user[0]['email'];?>">
              <!-- <small>邮箱你懂得...</small> -->
            </div>
          </div>
          <input type="hidden" name="uid" value="<?=$user[0]['id'];?>">
          <div class="am-form-group">
            <label for="user-phone" class="am-u-sm-3 am-form-label">手机号</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-phone"  name="phone" value="<?=$user[0]['phone'];?>">
            </div>
          </div>

          <div class="am-form-group">
            <label for="user-QQ"  class="am-u-sm-3 am-form-label">获奖类型</label>
            <div class="am-u-sm-9">
              <input type="text" id="user-QQ" name="awardType" value="<?=$user[0]['awardType'];?>">
            </div>
          </div>

<!--           <div class="am-form-group">
            <label for="user-weibo" class="am-u-sm-3 am-form-label">微博 / Twitter</label>
            <div class="am-u-sm-9">
              <input type="email" id="user-weibo" value="输入你的微博 / Twitter">
            </div>
          </div> -->

          <div class="am-form-group">
            <label for="user-intro"  class="am-u-sm-3 am-form-label">简介</label>
            <div class="am-u-sm-9">
              <textarea class="" rows="5" name="brief" id="user-intro"><?=$user[0]['brief'];?></textarea>
              <!-- <small>250字以内写出你的一生...</small> -->
            </div>
          </div>

          <div class="am-form-group">
            <div class="am-u-sm-9 am-u-sm-push-3">
              <button type="submit" class="am-btn am-btn-primary">保存修改</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- content end -->
</div>
<?php include "../cache/tpl/c84406e919af2225ef073a88917030ca.php";?>