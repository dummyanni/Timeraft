var boardName;
var boarddata = []; //siia salvestama boardide data, et popupi ajal kasutada

$(window).load(function() {
    loadBoard();
    submitNewBoard();
});

function loadBoard() {
    $.ajax({
        type: "GET",
        url: "/include/showboards.php",
        dataType: "json",
        success: function (data) {
            boarddata.length = 0;
            boarddata.push.apply(boarddata, data);
            sessionStorage.setItem("Boards", JSON.stringify(data));
            $("div.list").empty();
            $("div.maincontainer").empty();
            loadBoards(data);
        },
        error: function() {
            console.log("Olin nõme ja läksin errorisse.");
            data2 = JSON.parse(sessionStorage.getItem("Boards"));
            console.log("Data2: " , data2);
            loadBoards(data2);
        }
    });
}

function loadBoards(data) {
    if (data.length != 0) {
        for (var i = 0; i < data.length; i++) {
            var list = document.createElement("div");
            var boardpcontainer = document.createElement("div");
            var p = document.createElement("p");

            list.className = "list";
            boardpcontainer.className = "boardpcontainer";

            if (i < data.length / 2) {
                document.body.getElementsByClassName("maincontainer").item(0).appendChild(list);
                document.body.getElementsByClassName("list").item(i).appendChild(boardpcontainer);
                document.body.getElementsByClassName("boardpcontainer").item(i).appendChild(p);
            } else {
                document.body.getElementsByClassName("maincontainer").item(1).appendChild(list);
                document.body.getElementsByClassName("list").item(i).appendChild(boardpcontainer);
                document.body.getElementsByClassName("boardpcontainer").item(i).appendChild(p);
            }

            p.textContent = data[i]["Name"];
            p.id = "task" + i;

            function showBoardInfo(board) {
                var name;
                var desc;
                var n = document.getElementsByTagName("tr").item(0).childNodes[1];
                var d = document.getElementsByTagName("tr").item(1).childNodes[1];

                for (var i = 0; i < boarddata.length; i++) {
                    if (boarddata[i]["Name"] == board.replace(/[""]/g,'')) {
                        boardName = board.replace(/[""]/g,'');
                        if (!(typeof n == "undefined")) {
                            n.textContent = null;
                            d.textContent = null;

                            div_show();

                            n.textContent = boarddata[i]["Name"];
                            if (boarddata[i]["Description"] == "null") {
                                d.textContent = "";
                            }
                            else {
                                d.textContent = boarddata[i]["Description"];
                            }
                        }
                        else {
                            div_show();

                            name = document.createElement("td");
                            name.textContent = boarddata[i]["Name"];
                            desc = document.createElement("td");
                            if (boarddata[i]["Description"] == "null") {
                                desc.textContent = "";
                            }
                            else {
                                desc.textContent = boarddata[i]["Description"];
                            }

                            document.getElementsByTagName("tr").item(0).insertBefore(name, document.getElementsByTagName("tr").item(0).childNodes[1]);
                            document.getElementsByTagName("tr").item(1).insertBefore(desc, document.getElementsByTagName("tr").item(1).childNodes[1]);
                        }
                    }
                }
            }

            p.addEventListener("click", showBoardInfo.bind(null, p.textContent));
        }

        //lisamise nupp
        var list3 = document.createElement("div");
        var boardpcontainer3 = document.createElement("div");
        var p3 = document.createElement("p");

        list3.className = "listplus";
        boardpcontainer3.className = "boardpcontainerplus";

        p3.textContent = "+"; //kui veel ühtegi boardi pole tehtud
        p3.id = "pluss";
        p3.addEventListener("click", function () {
            document.getElementById("form_popup").style.display = "block";
            document.getElementById("popup_newdesc").style.display = "block";
        });

        if (document.body.getElementsByClassName("list").length % 2 == 0) {
            document.body.getElementsByClassName("maincontainer").item(0).appendChild(list3);

        }
        else {
            document.body.getElementsByClassName("maincontainer").item(1).appendChild(list3);

        }

        document.body.getElementsByClassName("listplus").item(0).appendChild(boardpcontainer3);

        document.body.getElementsByClassName("boardpcontainerplus").item(0).appendChild(p3);
    }
    else {
        var p2 = document.createElement("p");
        var list2 = document.createElement("div");
        var boardpcontainer2 = document.createElement("div");

        list2.className = "list";
        boardpcontainer2.className = "boardpcontainer";

        p2.textContent = "+"; //kui veel ühtegi boardi pole tehtud
        p2.id = "pluss";
        p2.addEventListener("click", function () {
            document.getElementById("form_popup").style.display = "block";
            document.getElementById("popup_newdesc").style.display = "block";
        });

        document.body.getElementsByClassName("maincontainer").item(0).appendChild(list2);
        document.body.getElementsByClassName("list").item(0).appendChild(boardpcontainer2);
        document.body.getElementsByClassName("boardpcontainer").item(0).appendChild(p2);
    }
}

function div_show() {
    document.getElementById("form_popup").style.display = "block";
    document.getElementById("popup_desc").style.display = "block";
}

function div_hide() {
    document.getElementById("form_popup").style.display = "none";
    document.getElementById("popup_desc").style.display = "none";
}

function div_hide_new() {
    document.getElementById("form_popup").style.display = "none";
    document.getElementById("popup_newdesc").style.display = "none";
}

function boardURL() {
    return boardName;
}

function submitNewBoard() {
    $('#form_newboard').submit(function (e) {
        e.preventDefault();

        var data = $(this).serialize();
        console.log("Data: " + data);
        console.log("E: " + e);
        var url = $(this).attr('action');

        $.ajax({
            type: 'POST',
            url: url,
            data: data,
            success: function () {
                document.getElementById("form_popup").style.display = "none";
                document.getElementById("popup_newdesc").style.display = "none";
            },
            error: function () {
                console.log("submitNewBoard.js viga.");
            }
        });
    });
}