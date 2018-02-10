var xmlhttp = new XMLHttpRequest();
var url = "http://localhost:8080/feed/";

var xmlaccept = new XMLHttpRequest();

var xmldeny = new XMLHttpRequest();

var username = "Jubeki";

xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var myArr = JSON.parse(this.responseText);
        displayFeeds(myArr);
    }
};

function displayFeeds(arr) {
    var out = "";
    var i;
    for(i = 0; i < arr.length; i++) {
        if(arr[i].ppldenied === null || contains(arr[i].ppldenied.split(";"), username) == false) {
        var section = "";
        section += "<section id=\"feed-";
        section += arr[i].id;
        section += "\" class=\"feed"
        if(arr[i].pplaccepted !== null && contains(arr[i].pplaccepted.split(";"), username)) {
            section += " green accent-1";
        }
        section += "\"><div class=\"row valign-wrapper\"><div class=\"col m8\"><div class=\"row valign-wrapper feed-caption\"><div class=\"col feed-title\">"
        section += arr[i].title;
        section += "</div><div class=\"chip col feed-company\">";
        section += arr[i].company;
        section += "</div><div class=\"col feed-datum\">";
        section += arr[i].datum + ", " + arr[i].timefrom + " - " + arr[i].timeuntil;
        section += "</div></div><div class=\"row\"><div class=\"col truncate feed-content\">";
        section += arr[i].content;
        section += "</div></div><div class=\"row\"><div class=\"col s4\">";
        section += "Bezahlung: " + arr[i].money;
        section += "</div><div class=\"col s2 offset-s4\">";
        section += arr[i].pplaccepted !== null ? arr[i].pplaccepted.split(";").length-1 : 0;
        section += "/";
        section += arr[i].pplwanted;
        section += "</div></div></div><div class=\"col m2\"><button onClick=\"acceptFeed(";
        section += arr[i].id;
        section += ")\" class=\"btn waves-effect waves-light green accent-4\" type=\"submit\" name=\"action\"><i class=\"material-icons\">check</i></button></div><div class=\"col m2\"><button onClick=\"denyFeed(";
        section += arr[i].id;
        section += ")\" class=\"btn waves-effect waves-light red\" type=\"submit\" name=\"action\"><i class=\"material-icons\">clear</i></button></div></div></section><div id=\"feed-";
        section += arr[i].id;
        section += "-divider\" class=\"divider\"></div>";
        out = section + out;
        }
    }
    document.getElementById("feed").innerHTML = out;
    document.getElementById("feed-loader").classList.add("hide");
    var x = document.getElementsByClassName("pagination");
    var i;
    for (i = 0; i < x.length; i++) {
        x[i].classList.remove("hide")
    }
}

function contains(list, str) {
    var i;
    for (i = 0; i < list.length; i++) {
        if(list[i] == str) return true;
    }
    return false;
}

function denyFeed(id) {
    xmldeny.open("GET", url + "denyuser?user=Jubeki&id=" + id, true);
    xmldeny.send();
    document.getElementById("feed-" + id).classList.add("hide");
    document.getElementById("feed-" + id + "-divider").classList.add("hide");
}

function acceptFeed(id) {
    xmlaccept.open("GET", url + "adduser?user=Jubeki&id=" + id, true);
    xmlaccept.send();
    document.getElementById("feed-" + id).classList.add("green");
    document.getElementById("feed-" + id).classList.add("accent-1");
}

function updateFeed() {
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}

// setTimeout("updateFeed()", 1000);
setInterval("updateFeed()", 1000);