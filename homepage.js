var myFuncCalls = 0;
function changeUp(){
    myFuncCalls++;
    var link = document.getElementById("pagestyle");

    switch(myFuncCalls) {
        case 0:
        link.setAttribute("href", "homepage.css");
        console.log("0");
        break;
        case 1:
        link.setAttribute("href", "homepage2.css");
        console.log("1");
        break;
        case 2:
        link.setAttribute("href", "homepage3.css");
        console.log("2");
        break;
        default:
        link.setAttribute("href", "homepage.css");
    }

    if (myFuncCalls == 3) {
        myFuncCalls = 0;
    }
}
