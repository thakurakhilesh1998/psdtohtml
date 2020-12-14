function onSubmmited(e)
{
    let name=document.getElementById('aname');
    let email=document.getElementById('aemail');
    let number=document.getElementById('anumber');
    let address=document.getElementById('address');
    let program=document.getElementById('aprogram');
    if(number.value.length!=10)
    {
        number.style.border="1px solid red";
        number.value="10 digit number required";
        number.style.color="red";
        return false;
    }
    if(name.value=='' || email.value=='' || number.value==''|| address.value=='' || program.value==0)
    {
        alert("All fields are required");
        return false;
    }
    return true;
}
