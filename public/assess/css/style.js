$(document).ready(function () {
    $(".input-year").change(function (e) {
        const val = parseInt(e.target.value);
        if (val > 2050) {
            $(this).val(2050);
        } else if (val < 2000) {
            $(this).val(2000);
        }

    })

    $(".input-month").change(function (e) {
        const val = parseInt(e.target.value);
        if (val > 12) {
            $(this).val(12);
        } else if (val < 1) {
            $(this).val(1);
        }
    })

    $(".input-date").change(function (e) {
        const val = parseInt(e.target.value);
        if (val > 31) {
            $(this).val(31);
        } else if (val < 1) {
            $(this).val(1);
        }
    })
})


document.addEventListener('DOMContentLoaded', function () {
    const bar = document.querySelector('.split__bar');
    const left = document.querySelector('.split__left');
    let mouse_is_down = false;

    bar.addEventListener('mousedown', function (e) {
        mouse_is_down = true;
    });

    document.addEventListener('mousemove', function (e) {
        if (!mouse_is_down) return;
        left.style.width = e.clientX + 'px';
    });

    document.addEventListener('mouseup', function () {
        mouse_is_down = false;
    });
});


document.addEventListener('DOMContentLoaded', function () {
    const bar = document.querySelector('.req__bar');
    const left = document.querySelector('.req__left');
    let mouse_is_down = false;

    bar.addEventListener('mousedown', function (e) {
        mouse_is_down = true;
    });

    document.addEventListener('mousemove', function (e) {
        if (!mouse_is_down) return;
        left.style.width = e.clientX + 'px';
    });

    document.addEventListener('mouseup', function () {
        mouse_is_down = false;
    });
});

