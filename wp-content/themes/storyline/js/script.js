function webOver()
{
    document.getElementById("web").style.display = "block";
}
function webOut()
{
    document.getElementById("web").style.display = "none";
}

function brandingOver()
{
    document.getElementById("branding").style.display = "block";
}
function brandingOut()
{
    document.getElementById("branding").style.display = "none";
}

function marketingOver()
{
    document.getElementById("marketing").style.display = "block";
}
function marketingOut()
{
    document.getElementById("marketing").style.display = "none";
}

function produccionOver()
{
    document.getElementById("produccion").style.display = "block";
}
function produccionOut()
{
    document.getElementById("produccion").style.display = "none";
}

$(document).on("ready",function()
{
    alert('entrando')
    $('.web').on('click',function()
    {
       alert('entro')
    });
    $('.web').on('mouseover',function()
    {
        $('.menu-web-y-app').removeClass('hidden');
    });
    $('.web').on('mouseout',function()
    {
        $('.menu-web-y-app').addClass('hidden');
    });

    $('.branding').on('mouseover',function()
    {
        $('.menu-branding').removeClass('hidden');
    });
    $('.branding').on('mouseout',function()
    {
        $('.menu-branding').addClass('hidden');
    });

    $('.marketing').on('mouseover',function()
    {
        $('.menu-marketing').removeClass('hidden');
    });
    $('.marketing').on('mouseout',function()
    {
        $('.menu-marketing').addClass('hidden');
    });

    $('.produccion').on('mouseover',function()
    {
        $('.menu-produccion').removeClass('hidden');
    });
    $('.produccion').on('mouseout',function()
    {
        $('.menu-produccion').addClass('hidden');
    });

});