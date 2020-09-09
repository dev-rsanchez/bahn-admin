$(document).ready(function() {
    const url = window.location;

    $('ul.nav-sidebar a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');

    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".sidebar-menu > .nav-treeview").addClass('menu-open');

    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).addClass('active');

    $('li.has-treeview a').filter(function() {
        return this.href == url;
    }).addClass('active');

    $('ul.nav-treeview a').filter(function() {
        return this.href == url;
    }).parentsUntil(".sidebar-menu > .nav-treeview").children(0).addClass('active');

});


$(function() {
    $('#fecha_nacimiento').on('change', calcularEdad);
});

function calcularEdad() {
    fecha = $(this).val();
    var hoy = new Date();
    var cumpleanos = new Date(fecha);
    var edad = hoy.getFullYear() - cumpleanos.getFullYear();
    var m = hoy.getMonth() - cumpleanos.getMonth();

    if (m < 0 || (m === 0 && hoy.getDate() < cumpleanos.getDate())) {
        edad--;
    }
    $('#edad').val(edad);
}