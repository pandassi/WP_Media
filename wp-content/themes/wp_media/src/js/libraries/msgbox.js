const msgbox = $(`.msgbox`);

function showMsg(msg) {
    msgbox.html(msg);

    setTimeout(() => {
        msgbox.removeClass(`success`).removeClass(`error`);
    }, 1500);
}

export function successMsg(msg) {
    showMsg(msg);
    msgbox.addClass(`success`);
}

export function errorMsg(msg) {
    showMsg(msg);
    msgbox.addClass(`error`);
}
