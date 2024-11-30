function changeDiv(number) {

    const firstform = document.getElementById('firstform');
    const scndform = document.getElementById('scndform');
    const thirdform = document.getElementById('thirdform');

    switch(number) {
        case 1:
            firstform.style.display = "block";
            scndform.style.display = "none";
            thirdform.style.display = "none";
        break;
        case 2:
            firstform.style.display = "none";
            scndform.style.display = "block";
            thirdform.style.display = "none";
        break;
        case 3:
            firstform.style.display = "none";
            scndform.style.display = "none";
            thirdform.style.display = "block";
        break;
    }
}

function sendHost() {
    const hostname = document.getElementById('hostname').value;
    const hostInput = document.getElementById('host');
    hostInput.value = hostname;
}

var hmMembers = 3;

function createInput() {

    const memberlist = document.getElementById('memberlist');
    
    hmMembers++;

    const element = document.createElement('input');
    element.setAttribute('name','member' + hmMembers)
    element.setAttribute('id','member' + hmMembers)
    element.setAttribute('placeholder','Nome do membro ' + hmMembers)

    memberlist.appendChild(element);
}