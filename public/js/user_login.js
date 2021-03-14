(function(){
    $('#login-submit').click(function(){
        var params = $('#login-form').serializeArray();
        console.log(params);
        if (params.length <= 0) {
            console.log()
            toast('请输入登录信息', forum_warning);
            return false;
        }


        var data = {};
        for(var key in params) {
            var name = params[key].name;
            var value = params[key].value;

            //check login params
            if(value == '') {
                if (name == 'username') {
                    toast('请输入用户名', forum_warning);
                } else if (name == 'password') {
                    toast('请输入密码', forum_warning);
                } else {
                    toast('请输入登录信息', forum_warning)
                }

                return false;
            }

            data[name] = value;
        }

        $.ajax({
            method: 'post',
            url: '/user/login',
            data: data,
            success: function(response){
                if(response.code ==  200) {
                    toast(response.msg, forum_success);
                    $('#login').modal('hide', 'fit');
                    location.reload();
                } else {
                    toast(response.msg, forum_error)
                }

                return false;
            },
            error: function(){
                toast('登录失败请稍后再试');
            }
        });


    })
})();