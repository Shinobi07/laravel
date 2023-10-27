
function loadPageInIframe(id) {
    var iframe = document.getElementById('myIframe');
    iframe.src = "/user/application/" + id + "/0";
}

function registration(id) {
    var iframe = document.getElementById('myIframe');
    iframe.src = "/user/registration_info/" + id;
}

function bank(id) {
    var iframe = document.getElementById('myIframe');
    iframe.src = "/user/bank_info/" + id;
}

function required_doc(id) {
    var iframe = document.getElementById('myIframe');
    iframe.src = "/user/required_doc/" + id;
}

function products(id) {
    var fram = document.getElementById('pf2');
    fram.src = "/user/products_purchase/" + id + "/1";
}

function good(id) {
    let token = $("meta[name=csrf-token]").attr("content");
    let postData = {
        _token: token,
        status: '1',
        id: id,
    };
    $.ajax({
        url: "/user/products_purchase/" + id + "/1",
        type: 'get',
        data: postData,
        success: function (response) {
            $("#statu-" + id).css("background-color", "#fffacd");
        },
        error: function (xhr, status, error) {

        }
    });

}

function bad(id) {
    let token = $("meta[name=csrf-token]").attr("content");
    let postData = {
        _token: token,
        status: '2',
        id: id,
    };
    $.ajax({
        url: "/user/products_purchase/" + id + "/2",
        type: 'get',
        data: postData,
        success: function (response) {
            $("#statu-" + id).css("background-color", "#ff0000");
        },
        error: function (xhr, status, error) {

        }
    });

}

function del(id) {
    let token = $("meta[name=csrf-token]").attr("content");
    let postData = {
        _token: token,
        id: id,
    };
    $.ajax({
        url: "/user/products_purchase/" + id + "/3",
        type: 'get',
        data: postData,
        success: function (response) {
            window.location.reload(true);
        },
        error: function (xhr, status, error) {

        }
    });

}

function modify(id) {
    let token = $("meta[name=csrf-token]").attr("content");
    let postData = {
        _token: token,
        id: id,
    };
    $.ajax({
        url: "/user/modify/" + id,
        type: 'get',
        data: postData,
        success: function (response) {
            console.log(response)
            $("#modi-" + id).css("display", "none");
        },
        error: function (xhr, status, error) {

        }
    });
}