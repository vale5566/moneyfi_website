var xmlhttp = new XMLHttpRequest();
var url = "http://localhost:8080/feed/";

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
        var section = "";
        section += "<section class=\"feed\"><div class=\"row valign-wrapper feed-caption\"><div class=\"col feed-title\">"
        section += arr[i].title;
        section += "</div><div class=\"chip col feed-company\">"
        section += arr[i].company;
        section += "</div><div class=\"col feed-datum\">";
        section += arr[i].datum;
        section += "</div></div><p class=\"truncate feed-content\">";
        section += arr[i].content;
        section += "</p></section>";
        section += "<div class=\"divider\"></div>";
        out = section + out;
    }
    document.getElementById("feed").innerHTML = out;
    document.getElementById("feed-loader").classList.add("hide");
    document.getElementsByClassName("pagination").classList.remove("hide");
}

function updateFeed() {
    document.getElementById("feed-loader").classList.remove("hide");
    xmlhttp.open("GET", url, false);
    xmlhttp.send();
}

updateFeed();
setInterval("updateFeed()", 10000);