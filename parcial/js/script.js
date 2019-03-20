
var list = document.getElementById('lista');

var i = 1;
function add(){
    
    var hola = document.getElementById("texto").value;

    if(hola.length >= 1){
        var entry = document.createElement('li');
        var entry2 = document.createElement('input');
        var lab = document.createElement('label');
        var t = document.createTextNode(hola);
        lab.setAttribute("for",hola);
        lab.appendChild(t);

        entry2.setAttribute('type', 'radio');
        entry2.setAttribute('name', i);
        entry2.setAttribute('id',i);
        entry.setAttribute('value',i);

        entry.appendChild(entry2);
        entry.appendChild(lab);
        list.appendChild(entry);

        i++;
    } else {
        alert("Esta vacio");
    }
    
}

$(function(){
    var hola1 = document.querySelectorAll("input").click(function(){
      if (hola1.is(':checked'))
      {
        alert($(this).val());
      }
    });
  });