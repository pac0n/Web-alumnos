
function Cle(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z^\s]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}




function Cn(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[0-9]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}




function Clnse(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z0-9^\p{Zs}]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


function Cl(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



function Clned(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z0-9^\s^#]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


function Clne(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z0-9^\s]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}


function Clnem(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z0-9^\w-^_^.^@^\w]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}



function Clnep(e) 
{
    tecla = (document.all) ? e.keyCode : e.which;

    
    if (tecla == 8) {
        return true;
    }

    
    patron = /[ñA-Za-z0-9^\s^:^,]/;
    tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}