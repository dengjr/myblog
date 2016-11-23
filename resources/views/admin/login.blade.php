@extends('admin.layouts')

@section('title',"登录")

@section('body')
<body>
<div class="bg"></div>
<div class="container">
    <div class="line bouncein">
        <div class="xs6 xm4 xs3-move xm4-move">
            <div style="height:150px;"></div>
            <div class="media media-y margin-big-bottom">           
            </div>         
            <form action="" method="post" style="margin-top:-80px;">
            {{ csrf_field()}}
            <div class="panel loginbox">
                <div class="text-center margin-big padding-big-top"><h1>后台管理中心</h1></div>
                <div class="panel-body" style="padding:30px; padding-bottom:10px; padding-top:10px;">
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="text" class="input input-big" name="name" placeholder="登录账号" data-validate="required:请填写账号" />
                            <span class="icon icon-user margin-small"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="field field-icon-right">
                            <input type="password" class="input input-big" name="password" placeholder="登录密码" data-validate="required:请填写密码" />
                            <span class="icon icon-key margin-small"></span>
                        </div>
                    </div>
  <!--                   <div class="form-group">
                        <div class="field">
                            <input type="text" class="input input-big yzm" name="code" placeholder="填写右侧的验证码" data-validate="required:请填写右侧的验证码" />
                            <p class="tip" style="position: absolute;top:50px;left:20px;display:none;">输入验证码有误</p>
                           <img src="{{ URL('kit/captcha') }}" alt="" width="120" height="32" class="passcode" style="height:43px;cursor:pointer;" onclick="this.src=this.src+'?'">  
                                                   
                        </div>
                    </div> -->
                </div>
                <div style="padding:30px;"><input type="submit" class="button button-block bg-main text-big input-big submit" value="登录"></div>
            </div>
            </form>          
        </div>
    </div>
</div>
<!-- <?php echo session('milkcaptcha');?>
<script type="text/javascript">
    var yzm = "{{session('milkcaptcha')}}";

    $(".submit").click(function(e){
        e.preventDefault();
        if($(".yzm").val() == yzm){
            e.target.submit();
        }
        else{
            $(".tip").css("display","block");

        }
    })

</script> -->
</body>
@endsection