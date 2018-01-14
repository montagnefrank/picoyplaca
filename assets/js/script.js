// LIVE EVENT LISTENER
$(document).on("click", "#continue_btn", function () {
    var element, plate, date, time, plate_lc, date_obj, day;
    element = this;
    $(element).find(".beforeLoad,.loading_img").toggle();
    // WE SET TIMEOUT SO IT WONT COLLIDE WITH THE HIDE ANIMATION
    setTimeout(function () {
        // CALLING THE INPUT VALUES
        plate = $("#platenumber").val();
        date = $("#date").val();
        time = $("#time").val();
        // CUSTOM VALIDATION *NOT EMPTY*
        if (plate.length > 0 && date.length > 0 && time.length > 0) {
            plate_lc = plate.substr(plate.length - 1);
            // CUSTOM VALIDATION *LAST PLATE CHARACTER IS NUMBER*
            if (valid_plate(plate_lc)) {
                // CUSTOM VALIDATION *DATE IS RIGHT FORMAT*
                if (valid_date(date)) {
                    date = date.split('-');
                    date_obj = new Date(date[0], date[1] - 1, date[2]);
                    day = date_obj.getDay();
                    // CUSTOM VALIDATION *TIME IS RIGHT FORMAT*
                    if (valid_time(time)) {
                        // WE HIDE THE FORM AND SHOW THE RESULT
                        if (picoyplaca(day, time, plate_lc)) {
                            // IF TRUE, THE CAR IS NOT ALLOWED TO CIRCULATE
                            $.when(
                                    $(".login-container:eq(0)").slideUp("slow"))
                                    .then(function () {
                                        $(".login-container:eq(1)").slideDown("slow");
                                        $(".message_text").html("This Vehicle is not allowed to be on the road");
                                    });
                        } else {
                            // IF FALSE, THE CAR IS ALLOWED TO CIRCULATE
                            $.when(
                                    $(".login-container:eq(0)").slideUp("slow"))
                                    .then(function () {
                                        $(".login-container:eq(1)").slideDown("slow");
                                        $(".message_text").html("This Vehicle is allowed to be on the road");
                                    });
                        }
                    } else {
                        alert(element, 'Please enter a valid time format');
                    }
                } else {
                    alert(element, 'Please enter a valid date format');
                }
            } else {
                alert(element, 'Please enter a valid License Plate');
            }
        } else {
            alert(element, 'You must fill all the inputs');
        }
    }, 1000);
});
// HIDE NOTIFICATION BOX ON CLICK
$(document).on("click", function () {
    $(".notificactionbox,.customalert").animate({width: 'hide'}, 600);
});

// CHECK IF PICO Y PLACA IS VALID
function picoyplaca(day, time, plate) {
    if (day >= 1 && day <= 5) {
        switch (day)
        {
            case 1:
                if (plate == 1 || plate == 2) {
                    return horario(time);
                } else {
                    return false;
                }
                break;
            case 2:
                if (plate == 3 || plate == 4) {
                    return horario(time);
                } else {
                    return false;
                }
                break;
            case 3:
                if (plate == 5 || plate == 6) {
                    return horario(time);
                } else {
                    return false;
                }
                break;
            case 4:
                if (plate == 7 || plate == 8) {
                    return horario(time);
                } else {
                    return false;
                }
                break;
            case 5:
                if (plate == 9 || plate == 0) {
                    return horario(time);
                } else {
                    return false;
                }
                break;
        }
    } else {
        return false;
    }
}

// SHOW NOTIFICATION BOX
function alert(btn, msg) {
    $(".customalert_text").html(msg);
    $(".customalert").animate({width: 'toggle'}, 600);
    $(btn).find(".beforeLoad,.loading_img").toggle();
}

// IS DATE VALID FORMAT?
function valid_date(date) {
    date = date.split('-');
    if (date[0] >= 1 && date[0] <= 9999
            && date[1] >= 1 && date[1] <= 12
            && date[2] >= 1 && date[2] <= 31) {
        return true;
    } else {
        return false;
    }
}

// IS TIME VALID FORMAT?
function valid_time(time) {
    time = time.split(':');
    if (time[0] >= 0 && time[0] <= 24
            && time[1] >= 0 && time[1] <= 59) {
        return true;
    } else {
        return false;
    }
}

// VERIFY THAT THE PLATE ENDS IN A NUMBER
function valid_plate(plate) {
    return !isNaN(parseFloat(plate)) && isFinite(plate);
}

// RETURN TRUE IF THE TIME IS WITHIN THE RANGE OF THE PICO Y PLACA
function horario(time) {
    time = time.split(':');
    if (time[0] >= 7 && time[0] <= 8) {
        return true;
    }
    if (time[0] >= 16 && time[0] <= 18) {
        return true;
    }
    if (time[0] == 9 || time[0] == 19) {
        if (time[1] >= 0 && time[1] <= 30) {
            return true;
        }
    }
    return false;
}
