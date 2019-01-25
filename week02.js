function addItem(item){
    $.ajax({
        url : "phpFunctions.php",
        type : "POST",
        data : {functionname : 'push', arguments: [item]}
    })
}

function onLoad(){
    $.ajax({
        url : "phpFunctions.php",
        type : "POST",
        data : {functionname : 'print'}
    })
}









/*var list = [];

function addItem(item){
    list.push(item);
    console.log(list);
    console.log(list.length);
    document.cookie = list;
}

function deleteCookies(){
    document.cookie = "username=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";
    console.log("deleting");
}

function goBack(){
    window.history.back();
}

function onLoad(){
    var x = document.cookie;
    console.log("here I am");
    console.log(x.length);
    console.log(x);
    var list2 = x.split(",");
    for (var i = 0; i < list2.length; ++i) {
        var node = document.createElement("LI");
        var textnode = document.createTextNode(list2[i]);
        node.appendChild(textnode);
        document.getElementById("container").appendChild(node);
        console.log(list2[i]);
    }
}*/