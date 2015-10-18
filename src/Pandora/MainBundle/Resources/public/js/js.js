$(function () {

    $("body").data("toggler", { tm: 0 });
    $("#wrapper header .dropdown-menu").mouseout(function () { closemenu($(this).parent(".menu-item")); })
    $("#wrapper .top .menu-item").mouseover(function () { showmenu($(this)); }).mouseout(function () { closemenu($(this)); })
    $(".toggler").click(function () { $("#" + $(this).data("id")).toggleClass("hidden"); })
    
});

function showmenu(menuitem) {

    $("#wrapper header .dropdown-menu").stop().hide();
    $("#wrapper .menu-item").find("a.link-to-page").removeClass("hover");
    if ($("body").data("toggler").tm) clearTimeout($("body").data("toggler").tm);
    menuitem.find("a.link-to-page").addClass("hover");
    menuitem.find(".dropdown-menu").stop().show();
}

function closemenu(menuitem) {

    if ($("body").data("toggler").tm) clearTimeout($("body").data("toggler").tm);
    var menu = menuitem.find(".dropdown-menu");
    $("body").data("toggler").tm = setTimeout(function () { menuitem.find("a.link-to-page").removeClass("hover"); menu.stop().hide(); }, 500);

}
