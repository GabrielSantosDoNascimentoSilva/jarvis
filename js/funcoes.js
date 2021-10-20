function validaSenha(){
    var s = document.FormCadastraEmpresa.HTML_senha.value;
    var cs = document.FormCadastraEmpresa.HTML_confirmar_senha.value;
    
    if(s !== cs){//se senha diferente de confirmar senha
        alert("Os campos de senha não conferem!");
        document.FormCadastraEmpresa.HTML_senha.focus();
        return false;//impede o submit
    }
       return true;         

    
}