function upperFont(obj){
	lowerFont();
	var lienThis = obj.getElementsByTagName('a');
	lienThis[0].className = "big";
	var nextId = parseInt(obj.id.substring(4,5))+1;
	var prevId = obj.id.substring(4,5)-1;
	if(document.getElementById('menu'+nextId)){
		var lienNext = document.getElementById('menu'+nextId).getElementsByTagName('a');
		lienNext[0].className= "medium";
	}
	if(document.getElementById('menu'+prevId)){
		var lienPrev = document.getElementById('menu'+prevId).getElementsByTagName('a');
		lienPrev[0].className= "medium";
	}
}
function lowerFont(){
	var containers = document.getElementById('menu').getElementsByTagName('div');
	var nbContainers = containers.length;
	for(var i = 0; i < nbContainers; i++){
		containers[i].getElementsByTagName('a')[0].className ="" ;
	}
}  