var forum_success='success';
var forum_warning='warning';
var forum_error  ='error';

function toast(message, type='success') {
    icon = 'check-sign';
    if (type == 'warning') {
        icon = 'warning-sign';
    } else if (type == 'error' ){
        icon = 'exclamation-sign';
    }

    new $.zui.Messager(message, {
        icon : icon,
        placement : 'top',
        type : type,
        time : 1500,
        cssClass: 'fixed-toast'
    }).show();
}