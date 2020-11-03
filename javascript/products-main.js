let log = console.log;
function GoTo(url)
{
    window.location.href = url;
}
function MostrarSubCategorias(element) {
    let categorias = document.getElementById(element).children;
    for (i = 0; i < categorias.length; i++) {
        if (categorias[i].id == "sub-link") {
            if (categorias[i].style.display == "") {
                categorias[i].style = "display: block";
            } 
            else {
                categorias[i].style = "display:";
            }
        }
    }
}
function MostrarCategoriasMobile()
{
    let barraCategorias = document.getElementById('link-barra-produtos');
    if(barraCategorias.style.display != "block")
    {
        barraCategorias.style = "display: block";
    }
    else{
        barraCategorias.style = "display:"
    }
}
function MostrarApenas(id) 
{
    let produtos = document.getElementsByClassName('box-produtos');
    for (i = 0; i < produtos.length; i++) 
    {
        if (id != 'todos') 
        {
            if (produtos[i].id != id) 
            {
                produtos[i].style = "display: none"
            } 
            else if (produtos[i].id == id) 
            {
                produtos[i].style = "display: inline-block"
            }
        }
        else
        {
            produtos[i].style = "display: inline-block"
        }
    }
}
function MostrarApenasSub(categoria, sub)
{
    let produtos = document.getElementsByClassName('box-produtos');
    log(produtos.length);
    for(i = 0; i < produtos.length; i++)
    {
        if(!produtos[i].classList.contains(sub))
        {
            produtos[i].style = "display: none";
        }
        else if(produtos[i].classList.contains(sub) && produtos[i].id == categoria){
            produtos[i].style = "display: inline-block";
        }
    }
}

function ChecarVazio()
{
    let promo = document.getElementsByClassName("promo");
    let atual = document.getElementsByClassName("preco-atual");
    for(i = 0; i< promo.length; i++)
    {
        if(promo[i].innerHTML == "<p></p>")
        {
            promo[i].style = "display: none";
            atual[i].style = "padding: .5vh 4.6vw;"
        }
    }
    let antigo = document.getElementsByClassName("preco-antigo");
    for(i = 0; i< antigo.length; i++)
    {
        if(antigo[i].innerHTML == "<p>&nbsp;</p>" || antigo[i].innerHTML == "&nbsp;")
        {
            antigo[i].style = "text-decoration: none";
        }
    }
}
ChecarVazio();