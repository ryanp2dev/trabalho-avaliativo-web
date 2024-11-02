<?php 

// $nome ='Ryan';
// echo $nome;



function ola ($nome)
{
    echo "ola $nome";
}


function imprimiNome($minhaFuncao)
{
    if(!is_callable($minhaFuncao)) 
       $minhaFuncao("Ryan");
    else 
       echo "NAo e";
}


imprimiNome('ola');