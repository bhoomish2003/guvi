function validateForm() {
    const email = document.forms['form']['email'];
    const password = document.forms['form']['password'];

    if(email === '') {
        alert('enter username')
        return ;
    } else if(password === '') {
        alert('enter firstName');
        return ;
    } 
    
    

}
