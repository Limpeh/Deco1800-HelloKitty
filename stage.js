$(document).ready(function(){
		useid = parseInt($("#idnum").text());
		json = getCard(1);
		for (var i=0;i<json.cardset.length; i++){
			var image = new Image();
			image.src = json.cardset[i].imageurl;
			image.style.display = "inline-block";
			image.style.width = "10%";
			image.style.margin = "1%";
			image.style.verticalAlign = "top";
			$("#"+2*i).append(image);
			$("#"+2*i).append(json.cardset[i].excerpt);
		}
});