$(document).ready(function(){
	useid = parseInt($("#idnum").text());
		setcard = getCard(useid);
		$("#show").empty();
		for (var i=0;i<setcard.length; i++){
			var image = new Image();
			image.src = setcard[i].imageurl;
			image.style.display = "inline-block";
			image.style.width = "10%";
			image.style.margin = "1%";
			image.style.verticalAlign = "top";
			$("."+i).remove();
			$("#show").append("<div class = '"+i+"'></div>");
					$("."+i).append(image);
		}
}