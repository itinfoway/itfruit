var min_item = {};
var all_item = {};
var products = {};
$(document).ready(function () {
    var data = getCookie('carte');
    if (data != "") {
        products = JSON.parse(data);
        setOrder();
    }
});
$(document).on("change", ".form_datetime", function () {
    getTime();
});
$(document).on("click", ".date-part", function () {
    $(".date-part").removeClass("first-date-part");
    $(".date-part").find(".order").removeClass("first-order");
    var inputDate = $(this).data("date");
    $(".products").attr("data-order-id", inputDate);
    $("#orderbox").attr("data-link-field", inputDate);
    $(this).addClass("first-date-part");
    $(this).find(".order").addClass("first-order");
    productItem();
});
$("#savedate").click(function () {
    var inputDate = $("#orderbox").attr("data-link-field");
    var date = $(".form_datetime").val();
    date = date.split(" ");
    $("#orderbox" + inputDate).find(".order-date").text(date[0] + " " + date[1]);
    $("#orderbox" + inputDate).find(".order-year").text(date[2]);
    var time = $("#gettime").find("option:selected").text();
    var item = $("#gettime").find("option:selected").attr("data-item");
    var id = $("#gettime").val();
    id = date[0] + "_" + date[1] + "_" + date[2] + "_" + id;
    $(".first-date-part").attr("data-itme-value", id);
    min_item[id] = parseInt(item);
    all_item[id] = parseInt(0);
    products[id] = {};
    $("#orderbox" + inputDate).find(".order-time").text(time);
});
function setOrder() {
    var count = 1;
    $(".order-date").html("");
    $(".order-year").html("");
    $(".order-time").html("");
    $(".data-items").html("");
    $(".credit").hide();
    for (i in products) {
        var allitime = 0;
        $(".date-part").removeClass("first-date-part");
        $(".date-part").find(".order").removeClass("first-order");
        $("#orderbox" + count).find(".date-part").addClass("first-date-part");
        $("#orderbox" + count).find(".order").addClass("first-order");
        ;
        $("#orderbox" + count).find(".date-part").attr("data-itme-value", i);
        var date = i.split("_");
        $(".form_datetime").val(date[0] + " " + date[1] + " " + date[2]);
        $("#orderbox").val(date[0] + " " + date[1] + " " + date[2]);
        for (j in products[i]["p"]) {
            allitime = allitime + parseInt(products[i]["p"][j].ic);

        }
        $("#orderbox" + count).find(".order-date").text(date[0] + " " + date[1]);
        $("#orderbox" + count).find(".order-year").text(date[2]);
        $.when(getTime()).done(function () {
            $("#gettime").val(date[3]);
            var item = $("#gettime").find("option:selected").attr("data-item");
            var time = $("#gettime").find("option:selected").text();
            $("#orderbox" + count).find(".order-time").text(time);
            min_item[i] = parseInt(item);
            all_item[i] = parseInt(allitime);
            productItem();
            count++;
        });
    }
    credit();
}
function productItem() {
    var inputDate = $(".first-date-part").attr("data-itme-value");
    $(".first-date-part").find(".data-items").html("");
    $('.countr').find("span").text(0);
    if (products[inputDate]) {
        for (i in products[inputDate]["p"]) {
            $('div[data-value="' + i + '"]').find("span").text(products[inputDate]["p"][i].ic);
        }
    }

    orderItem();
}
function orderItem() {
    var inputDate = $(".first-date-part").attr("data-itme-value");
    $(".first-date-part").find(".data-items").html("");
    if (products[inputDate]) {
        for (i in products[inputDate]["p"]) {
            $(".first-date-part").find(".data-items").append("<p>" + products[inputDate]["p"][i].nm + " " + products[inputDate]["p"][i].ic + "</p>");
        }
        setCookie("carte", JSON.stringify(products));
    }
}
function credit() {
    var alltotal = 0
    for (i in products) {
        var id = $(".date-time").find('div[data-itme-value="' + i + '"]').parent("div").attr("id");
        var total = 0;
        for (j in products[i]["p"]) {
            total = total + products[i]["p"][j]["ic"] * products[i]["p"][j]["c"];
        }
        if (total != 0) {
            $("#" + id).find(".credit").find("span").text(total);
            alltotal = alltotal + total;
            $("#" + id).find(".credit").show();
        }
    }
    $(".date-time").find("#creditTotal").text(alltotal);
    if (getCookie("crt") != "")
    {
        $("#cart-notification").show();
        $("#cart-notification").text(getCookie("crt"));
    }
}
$(document).on("click", ".plus", function () {
    var inputDate = $(".first-date-part").attr("data-itme-value");
    var value = $(this).parent(".countr").data("value");
    var name = $(this).parent(".countr").attr("content");
    var cre = $(this).parent(".countr").data("credit");
    if (all_item[inputDate] < min_item[inputDate]) {
        var plus = parseInt($(this).parent(".countr").find("span").text());
        $(this).parent(".countr").find("span").text(plus + 1);
        if (products[inputDate]['p']) {
            if (products[inputDate]["p"].hasOwnProperty(value)) {
                products[inputDate]["p"][value].ic = plus + 1;
            } else {
                products[inputDate]["p"][value] = {};
                products[inputDate]["p"][value]["ic"] = plus + 1;
                products[inputDate]["p"][value]["nm"] = name;
                products[inputDate]["p"][value]["c"] = cre;

            }
        } else {
            var pro_data = {};
            pro_data[value] = {};
            pro_data[value]["ic"] = plus + 1;
            pro_data[value]["nm"] = name;
            pro_data[value]["c"] = cre;
            products[inputDate]['p'] = [];
            products[inputDate].p = pro_data;
        }
        all_item[inputDate]++;
        setCookie("crt", (getCookie("crt") != "") ? parseInt(getCookie("crt")) + 1 : 1);
        orderItem();
        credit();
    } else {
        toastr.error(error_order_carte_not_set);
    }

});
$(document).on("click", ".date-close", function () {
    var id = $(this).parent("div").find(".date-part").attr("data-itme-value");
    if (id != "") {
        delete products[id];
        setCookie("carte", JSON.stringify(products));
        setOrder();
    }
});
$(document).on("click", ".minus", function () {
    var inputDate = $(".first-date-part").attr("data-itme-value");
    var value = $(this).parent(".countr").data("value");
    var minus = parseInt($(this).parent(".countr").find("span").text());
    if (minus != 0) {
        $(this).parent(".countr").find("span").text(minus - 1);

        if (products[inputDate]["p"].hasOwnProperty(value)) {
            if (minus - 1 != 0) {
                products[inputDate]["p"][value].ic = minus - 1;
            } else {
                delete products[inputDate]["p"][value];
            }
        }
        orderItem();
        if (all_item[inputDate] != 0) {
            setCookie("crt", (getCookie("crt") != "") ? parseInt(getCookie("crt")) - 1 : 0);
            all_item[inputDate]--;
        } else {
            delete products[inputDate]["p"];
        }
        credit();
    }

});