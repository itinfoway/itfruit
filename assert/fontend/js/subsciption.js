var products = {};
    $(document).on("click", ".box", function () {
        $(".box").removeClass("active");
        $(this).addClass("active");
        var data = $(".box.active").data("daysof");
        if (data == '5d') {
            $(".week-days").addClass("active");
        } else {
            $(".week-days").removeClass("active");
        }
        $(".countr").find("span").text(0);
    });
    $(document).on("click", "#checkout", function () {
        var data = JSON.parse(getCookie("carte"));
        var flag = 0;
        console.log(data["d"]);
        if (data["d"] == "" || data["d"] == undefined) {
            flag = 1;
            toastr.error(error_2stblock);
        }
        if (data["df"] == "" || data["df"] == undefined) {
            flag = 1;
            toastr.error(error_1stblock);
        }
        if (data["p"] == "" || data["p"] == undefined) {
            flag = 1;
            toastr.error(fn_error_add_product);
        }
        if ((data["f"] == "" && data["t"] == "") || data["f"] == undefined || data["t"] == undefined) {
            flag = 1;
            toastr.error(error_select_date);
        }
        if (flag == 0) {
            window.location.href =checkout_url;
        }
    });
    $(document).on("click", ".week-days", function () {
        var data = $(".box.active").data("daysof");
        var count = 0;
        if (data == '5d') {
            $(".week-days").addClass("active");
        } else if (data == '2d') {
            $(".week-days.active").each(function () {
                count++
            });
            if (count == 2) {
                if ($(this).hasClass("active")) {
                    $(this).toggleClass("active");
                } else {
                    toastr.error(error_2stblock_2day);

                }
            } else {
                $(this).toggleClass("active");
            }
        } else if (data == '1d' || data == "1d2w") {
            $(".week-days.active").each(function () {
                count++
            });
            if (count == 1) {
                if ($(this).hasClass("active")) {
                    $(this).toggleClass("active");
                } else {
                    toastr.error(error_2stblock_1day);

                }
            } else {
                $(this).toggleClass("active");
            }
        } else {
            toastr.error(error_1stblock);
        }
        $(".countr").find("span").text(0);
    });
    function conCheck() {
        var data = $(".box.active").data("daysof");
        var count = 0;
        $(".week-days.active").each(function () {
            count++
        });
        if (data == '5d') {
            if (count == 5) {
                return true;
            }
        } else if (data == '2d') {
            if (count == 2) {
                return true;
            }
        } else if (data == '1d' || data == "1d2w") {
            if (count == 1) {
                return true;
            }
        }
        return false;
    }
    function productGet() {
        if (getCookie("carte") != "") {
            var data = JSON.parse(getCookie("carte"));
            $('.box[data-daysof="' + data["df"] + '"]').click();
            for (i in data["d"]) {
                $('.week-days[data-day="' + data["d"][i] + '"]').click();
            }
            for (i in data["p"]) {
                $('.countr[data-value="' + i + '"]').find("span").text(data["p"][i]['c']);
            }
            $("#thisto_datetime").val(data["t"]);
            $("#thisfrom_datetime").val(data["f"]);
            setDate();
        }
    }
    function getNiceTime(fromDate, toDate, levels, prefix) {
        var lang = {
            "date.future": "in {0}",
            "date.now": "now",
            "date.year": "{0} year",
            "date.years": "{0} years",
            "date.years.prefixed": "{0} years",
            "date.month": "{0} month",
            "date.months": "{0} months",
            "date.months.prefixed": "{0} months",
            "date.day": "{0} day",
            "date.days": "{0} days",
            "date.days.prefixed": "{0} days"
        },
        langFn = function (id, params) {
            var returnValue = lang[id] || "";
            if (params) {
                for (var i = 0; i < params.length; i++) {
                    returnValue = returnValue.replace("{" + i + "}", params[i]);
                }
            }
            return returnValue;
        },
                toDate = toDate ? toDate : new Date(),
                diff = fromDate - toDate,
                diff = diff < 0 ? diff * -1 : diff,
                date = new Date(new Date(1970, 0, 1, 0).getTime() + diff),
                returnString = '',
                count = 0,
                years = (date.getFullYear() - 1970);
        if (years > 0) {
            var langSingle = "date.year" + (prefix ? "" : ""),
                    langMultiple = "date.years" + (prefix ? ".prefixed" : "");
            returnString += (count > 0 ? ', ' : '') + (years > 1 ? langFn(langMultiple, [years]) : langFn(langSingle, [years]));
            count++;
        }
        var months = date.getMonth();
        if (count < levels && months > 0) {
            var langSingle = "date.month" + (prefix ? "" : ""),
                    langMultiple = "date.months" + (prefix ? ".prefixed" : "");
            returnString += (count > 0 ? ', ' : '') + (months > 1 ? langFn(langMultiple, [months]) : langFn(langSingle, [months]));
            count++;
        } else {
            if (count > 0)
                count = 99;
        }
        var days = date.getDate() - 1;
        if (count < levels && days > 0) {
            var langSingle = "date.day" + (prefix ? "" : ""),
                    langMultiple = "date.days" + (prefix ? ".prefixed" : "");
            returnString += (count > 0 ? ', ' : '') + (days > 1 ? langFn(langMultiple, [days]) : langFn(langSingle, [days]));
            count++;
        } else {
            if (count > 0)
                count = 99;
        }

        if (prefix) {
            if (returnString == "") {
                returnString = langFn("date.now");
            } else
                returnString = langFn("date.future", [returnString]);
        }
        return returnString;
    }
    function setDate() {
        if ($("#thisfrom_datetime").val() != "") {
            var df = new Date($("#thisfrom_datetime").val());
            products["f"] = df.toISOString().split('T')[0];
            if ($("#thisto_datetime").val() != "") {
                products["t"] = $("#thisto_datetime").val();
            } else {
                var d = new Date($("#thisfrom_datetime").val());
                var j = new Date();
                j.setDate(d.getDate() + 8);
                $("#thisto_datetime").val(j.toISOString().split('T')[0]);
                products["t"] = $("#thisto_datetime").val();
            }
            $("#SetDate").text(getNiceTime(new Date($("#thisto_datetime").val()), new Date($("#thisfrom_datetime").val()), 4, true));
            
        } else {
            toastr.error(error_select_date);
        }
    }
    $(document).ready(function () {
        productGet();
        $('#dateAndTime1').on('hide.bs.modal', function (e) {
            setDate();
        });
    });
    function productSet() {
        var dayof = $(".box.active").data("daysof");
        var day = [];
        var pro = {};
        $(".week-days.active").each(function (index) {
            day[index] = $(this).data("day");
        });
        $(".countr").each(function (index) {
            var c = parseInt($(this).find("span").text());
            if (c != 0) {
                var price = $(this).data("price");
                pro[$(this).data("value")] = {};
                pro[$(this).data("value")]["c"] = c;
                pro[$(this).data("value")]["p"] = price;
            }
        });
        products["d"] = day;
        products["df"] = dayof;
        products["p"] = pro;
        setCookie("carte", JSON.stringify(products));
    }
    $(document).on("click", ".plus", function () {
        if (conCheck()) {
            var plus = parseInt($(this).parent(".countr").find("span").text());
            $(this).parent(".countr").find("span").text(plus + 1);
            productSet();
        } else {
            $(".countr").find("span").text(0);
            toastr.error(error_2stblock);
        }
    });
    $(document).on("click", ".minus", function () {
        var minus = parseInt($(this).parent(".countr").find("span").text());
        if (minus != 0) {
            $(this).parent(".countr").find("span").text(minus - 1);
            productSet();
        }
    });
    $(".box:first").click();