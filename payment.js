function validateName() {
    let nameInput = document.getElementById("name").value;
    let tst = tst_name(nameInput);
    
    if (tst) {
      console.log("Input is ok");
    } 
    else {
      alert("Pls enter alphabets only");
    }
}

function tst_name(namee) {
    var ok = namee.search(/^[a-zA-Z ]+$/);
     
    if (ok == 0)
        return true;
    else
        return false;
}

function validateEmail() {
    let emailInput = document.getElementById("email").value;

    if (!emailInput.includes("@"))
        alert("Pls enter a correct email")

    emailarray = emailInput.split('@');
    let result1 = tst_email(emailarray[0]);
    let result2 = tst_email2(emailarray[1]);
    
    if (result1 && result2) {
      console.log("Input is ok");
    } 
    else {
      alert("Pls enter a correct email");
    }
}

function tst_email(user) {
    var ok = user.search(/^[a-zA-Z-.]+$/);
     
    if (ok == 0) {
        console.log('correct username');
        return true; }
    else {
        console.log('username incorrect');
        return false; }
}

function tst_email2(domain) {
    var ok = domain.search(/^[a-zA-Z_0-9.]+$/)
    if (ok == 0) {
        list = domain.split(".")

        if (list.length > 4 || list.length < 2 || list.includes("")) {
            console.log('extension incorrect');
            return false; }

        if (list[list.length-1].length > 3 || list[list.length-1].length < 2) {
            console.log('last extension incorrect');
            return false; }

        else {
            console.log('correct domain');
            return true; }
    }
    else
        return false;
}

// function validateNumber() {
//     let numberInput = document.getElementById("number").value;
//     let tst = tst_number(numberInput);
    
//     if (tst) {
//       console.log("Input is ok");
//     } 
//     else {
//       alert("Pls enter 8 digits number only");
//     }
// }

// function tst_number(numberr) {
//     var ok = numberr.search(/\d{8}/);
     
//     if (ok == 0)
//         return true;
//     else
//         return false;
// }

function validateNumber() {
    let numberInput = document.getElementById("number").value;
    var pattern = /\d{8}/;
    if(numberInput.match(pattern))
    {
        //This code never executes
    }
    else
    {
        //This code is always executing
        alert('Pls enter 8 digits number only'); 
    }
}