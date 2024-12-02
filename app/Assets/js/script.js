function validateForm(number) {
    let isValid = true;

    switch(number) {
        case 1:
            const hostname = document.getElementById('hostname').value;
            const groupname = document.getElementById('groupname').value;

            if (!hostname || !groupname) {
                alert("Por favor, preencha o nome do anfitrião e o nome do grupo!");
                isValid = false;
            }
            break;

        case 2:
            const celebrationdate = document.getElementById('celebrationdate').value;

            if (!celebrationdate) {
                alert("Por favor, preencha a data de celebração!");
                isValid = false;
            }
            break;
    }

    return isValid;
}

function changeDiv(form,number) {
    if (number > form && !validateForm(form)) {
        return;
    }

    const firstform = document.getElementById('firstform');
    const scndform = document.getElementById('scndform');
    const thirdform = document.getElementById('thirdform');

    switch(number) {
        case 1:
            firstform.setAttribute('class','visible-form');
            scndform.setAttribute('class','hidden-form');
            thirdform.setAttribute('class','hidden-form');
            break;

        case 2:
            firstform.setAttribute('class','hidden-form');
            scndform.setAttribute('class','visible-form');
            thirdform.setAttribute('class','hidden-form');
            break;

        case 3:
            firstform.setAttribute('class','hidden-form');
            scndform.setAttribute('class','hidden-form');
            thirdform.setAttribute('class','visible-form');
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
    element.setAttribute('name','member' + hmMembers);
    element.setAttribute('id','member' + hmMembers);
    element.setAttribute('placeholder','Nome do membro ' + hmMembers);

    memberlist.appendChild(element);
}
