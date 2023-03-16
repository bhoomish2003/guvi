function validateForm() {
    const userName = document.forms['form']['uname'];
    const firstName = document.forms['form']['fname'];
    const lastName = document.forms['form']['lname'];
    const email = document.forms['form']['email'];
    const password = document.forms['form']['password'];
    const passwordConformation = document.forms['form']['password_con'];

    if(userName === '') {
        alert('enter username')
    } else if(firstName === '') {
        alert('enter firstName');
    } else if(lastName === '') {
        alert('enter lastName');
    } else if(email === '') {
        alert('enter email');
    } else if(password === '') {
        alert('enter password');
    } else if(passwordConformation === '') {
        alert('enter confirm password');
    } else if(password !== passwordConformation) {
        alert('password and confirm password not matched');
    }

}
  
