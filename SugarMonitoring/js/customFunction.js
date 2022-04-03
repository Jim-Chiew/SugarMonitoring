$(document).ready(function () {
    let dataList;  //used to store retrieved reading list

    /*__________________ Get Reading on page start up __________________________*/
    $.ajax({
        url: "getReading.php",
        type: "GET",
        cache: false,
        dataType: "JSON",

        success: function(data){
            dataList = data;
            var table = "";

            for (i = 0 ; i < data.length ; i++) {
                table += "<tr><th class=\"text-center\" scope=\"row\">" + (i + 1) + "</th>" +
                    "<td>" + data[i].readingDate + "</td>" +
                    "<td>" + data[i].readingTimes + "</td>" +
                    "<td>" + data[i].readingLvl + "</td></tr>"
            }

            $('tbody').html(table);
        }
    });

    /* _______________ Filter List ____________________________*/
    $("#filter").change(function () {
        var filter = $(this).val();
        var table = "";

        if (filter === "high"){
            for (i = 0 ; i < dataList.length ; i++) {
                if (dataList[i].readingLvl > 11){
                    table += "<tr><th class=\"text-center\" scope=\"row\">" + (i + 1) + "</th>" +
                        "<td>" + dataList[i].readingDate + "</td>" +
                        "<td>" + dataList[i].readingTimes + "</td>" +
                        "<td>" + dataList[i].readingLvl + "</td></tr>"
                }
            }
        } else if (filter === "elevated"){
            for (i = 0 ; i < dataList.length ; i++) {
                if (dataList[i].readingLvl > 7.8 && dataList[i].readingLvl <= 11){
                    table += "<tr><th class=\"text-center\" scope=\"row\">" + (i + 1) + "</th>" +
                        "<td>" + dataList[i].readingDate + "</td>" +
                        "<td>" + dataList[i].readingTimes + "</td>" +
                        "<td>" + dataList[i].readingLvl + "</td></tr>"
                }
            }
        } else if (filter === "normal"){
            for (i = 0 ; i < dataList.length ; i++) {
                if (dataList[i].readingLvl < 7.9){
                    table += "<tr><th class=\"text-center\" scope=\"row\">" + (i + 1) + "</th>" +
                        "<td>" + dataList[i].readingDate + "</td>" +
                        "<td>" + dataList[i].readingTimes + "</td>" +
                        "<td>" + dataList[i].readingLvl + "</td></tr>"
                }
            }
        } else {
            for (i = 0 ; i < dataList.length ; i++) {
                table += "<tr><th class=\"text-center\" scope=\"row\">" + (i + 1) + "</th>" +
                    "<td>" + dataList[i].readingDate + "</td>" +
                    "<td>" + dataList[i].readingTimes + "</td>" +
                    "<td>" + dataList[i].readingLvl + "</td></tr>"
            }
        }

        $('tbody').html(table);
    });

    // -----  Inserting Reading alert massage ----
    $("form").submit(function () {
        var readingTimes = $("[name=readingTimes]").val();
        var readingLvl = parseFloat($("[name=readingLvl]").val());
        var message = "Your Reading entered after " + readingTimes +
            " is " + readingLvl + " mmol/L \nSugar Level is: ";

        if(readingLvl > 11){
            message += "High";
        } else if (readingLvl > 7.8){
            message += "Elevated"
        } else {
            message += "Normal"
        }

        message += "\nProceed to submit Reading?";
        return confirm(message);
    })
})