<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>修改密码</title>

        <div >
            <a href="/xunmi/index.php/Home/Index/index">首页</a><span>&gt;</span><span style="color: red;">修改密码</span>
        </div>
            <div>
                <form action="" method="post" id="myform" name="myform" enctype="multipart/form-data">
                <input type="hidden" name="user_id" value="<?php echo ($users["user_id"]); ?>" />
                <input type="hidden" name="user_name" value="<?php echo ($users["username"]); ?>">
                    <section class="_135editor" data-tools="135编辑器" data-id="95587">
    <section style="padding:1em 0px;">
        <section style="text-align:right;margin-bottom:-50px;margin-right:5px;">
            <section style="display:inline-block;width:40px;background:#fefefe;">
                <img class="assistant" style="width:100%;display:block;" src="http://image2.135editor.com/cache/remote/aHR0cHM6Ly9tbWJpei5xbG9nby5jbi9tbWJpel9wbmcvN1FSVHZrSzJxQzd1OVlHajFYSlY4elJmcWliMFpzYkRwcmZMbWVNNk9HTWZqNWcyUVFac3B3T3ZvdXhtZVZVMnpWYnNXV0pOVVlMdDVUZ1g5QnRidGV3LzA/d3hfZm10PXBuZw==" data-ratio="1.0166666666666666" data-width="100%"/>
            </section>
        </section>
        <section style="border:1px solid #e8cdb1;padding:6px;background:#fefefe;">
            <section style="border:1px dashed #e8cdb1;padding: 1em 3em 2em 1em;">
                <section data-autoskip="1" class="135brush" style="background:url(http://image2.135editor.com/cache/remote/aHR0cHM6Ly9tbWJpei5xbG9nby5jbi9tbWJpel9wbmcvN1FSVHZrSzJxQzZVSUczWlhNcGV5ODlEeG1pYVlUc0JpYTJlUldtU3hJUGljMmhPeXhUNVZ3Y3RpYmhBaWFSdHhMTkFOcmp3bVEwUW5yYjNzek1pYjNNaWEyS2JnLzA/d3hfZm10PXBuZw==)no-repeat;background-size:100px;background-position:bottom right; font-size: 14px;text-align: justify;letter-spacing: 1.5px;line-height: 1.75em;color: #3f3e3f;padding-bottom:2em;">
                    <p>
                        *原密码:<input name="oldpassword" size="20" type="text"><br/>
                    </p>
                    <p>
                        <br/>
                    </p>
                    <p>
                        *新密码:<input name="user_password" size="20"  type="text"><br/>
                    </p>
                    <p>
                        <br/>
                    </p>
                    <p>
                        *确认密码:<input name="checkpassword" size="20" type="text">
                    </p>
                    <p>
                        <br/>
                    </p>
					<p style="margin-left:55px;">
                                   <input value="提交" type="submit">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input onclick="history.go(-1)" value="返回" type="button">
					</p>
                </section>
            </section>
        </section>
        <section style="text-align:left;margin-top:-65px;margin-left:5px;">
            <section style="display:inline-block;width:60px;background:#fefefe;padding:10px;">
                <img class="assistant" style="width:100%;display:block;" src="http://image2.135editor.com/cache/remote/aHR0cHM6Ly9tbWJpei5xbG9nby5jbi9tbWJpel9wbmcvN1FSVHZrSzJxQzd1OVlHajFYSlY4elJmcWliMFpzYkRwNmlhZ1BhaWJZZnd5QWlhalNiRGVTMzNkRFd4MldzVDFmUXljQkNlSWE4Z2JLRDE1a2tMSGJnN1FBLzA/d3hfZm10PXBuZw==" data-ratio="1.025" data-width="100%"/>
            </section>
        </section>
    </section>
</section>
<section data-role="paragraph" class="_135editor">
    <p>
        <br/>
    </p>
</section>
                               
                </form>
        </div>

</body>
</html>