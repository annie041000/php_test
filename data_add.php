<?php
//require __DIR__ . '/__connect_db.php';
$page_name = 'data_add';

?>
<?php include __DIR__ . '/__html_head.php' ?>

<?php include __DIR__ . '/__navbar.php' ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">新增帳戶</h5>
                        <form name="form1" method="post" onsubmit="return formCheck();">
                            <div class="form-group">
                                <label for="name">姓名</label>
                                <input type="text" class="form-control" name="name" id="name">
                                <small id="nameHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="email">信箱</label>
                                <input type="text" class="form-control" name="email" id="email">
                                <small id="emailHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="mobile">手機</label>
                                <input type="text" class="form-control" name="mobile" id="mobile">
                                <small id="mobileHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="birthday">生日</label>
                                <input type="text" class="form-control" name="birthday" id="birthday">
                                <small id="birthdayHelp" class="form-text text-muted"></small>
                            </div>
                            <div class="form-group">
                                <label for="address">地址</label>
                                <textarea class="form-control" name="address" id="address" cols="30" rows="3"></textarea>
                                <small id="addressHelp" class="form-text text-muted"></small>
                            </div>
                            <button type="submit" class="btn btn-primary">新增</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // //
        var fields = ['name','email','mobile','birthday','address'];
        var i,s;

        function formCheck() {
            for(s in fields){
                cancleAlert(fields[s]);
            }
            var ispass = true;
            var email_pattern = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
            if(document.form1.name.value.length<2){
                setAlert('name','請輸入正確姓名');
                ispass = false;
            }
            if(! email_pattern.test(document.form1.email.value)){
                setAlert('email','請輸入正確的 email 格式');
                ispass = false;
            }

            return false;
        }

        // 設定警示
        function setAlert(fieldName,msg){
            $('#'+fieldName).css('border','2px solid red');
            $('#'+fieldName+'Help').text(msg);
        }
        //取消警示
        function cancleAlert(fieldName){
            $('#'+fieldName).css('border','1px solid #cccccc');
            $('#'+fieldName+'Help').text('');
        }



    </script>

<?php include __DIR__ . '/__html_foot.php' ?>