class Card{
	constructor(keyword,imageurl, articleurl,excerpt){
		this.keyword=keyword;
		this.imageurl=imageurl;
		this.articleurl=articleurl;
		this.excerpt=excerpt;
		//0=neither card is drawn, 1=article card only 2 = image card onlr 3 = both have been drawn
		this.check = 0;			
	}
	imagecard() {
		return [this.keyword, this.imageurl]
	}
	articlecard() {
		return [this.keyword, this.articleurl]
	}
	imageused(){
		if (this.check==1){this.check=3
		}else{this.check=2}
	}
	articleused(){
		if (this.check==2){this.check=3
		}else{this.check=1}
	}
}
$(document).ready(function(){
	$("#outputArt").click(function() {
		$("#outputArt").css("background-color", "blue");
	});
	$("#outputImg").click(function() {
		$("#outputImg").css("background-color", "blue");
	});
});


class CardSet{
	constructor(topic,cardlist){
		this.topic=topic;
		this.cardlist=cardlist;
	}
	drawhand(num){
		var ran;
		var hand=[];
		for (var i=0; i<num; i++){
			ran = Math.floor(Math.random() * this.cardlist.length);
			hand.push(this.cardlist[ran]);
			//console.log(this.cardlist);
			this.cardlist.splice(ran,1);
		}
		console.log(hand);
		return hand;
	}
}

var hid = 0;
var score = 3;
var cheque = 0;
var id = [];


/****//****//****//****//****//****//****//****//****//****//****//***/
///////////////////////////////////////////////////////////////////////
/****//****//****//****//****//****//****//****//****//****//****//***/
	var keywordcards=[];
	var loadedArt = [];
	var loadedImages = [];
	var loadedEx = [];
    var urlPatterns = ["flickr.com", "nla.gov.au", "artsearch.nga.gov.au", "recordsearch.naa.gov.au", "images.slsa.sa.gov.au"];
    var found = 0;
	var artic;
	var searchZone = "newspaper";
	var count=0;
	var cardnum=0;
	var newcard;
	var loadCard;
	var setcards = [];
	var num=5;
	var json;
	var check = 0;
	var useid;


(function($){
	function getCard(teachID){
			$.ajax({
				url:"cardget.php",
				type: "POST",
				datatype: "JSON",
				data: {teacherID: teachID},
				success: function(data) {
					json = JSON.parse(data);
					for (var i=0; i<json.length; i++){
							loadCard = new Card(json[i][0],json[i][2],json[i][4],json[i][3]);
							setcards.push(loadCard);
					}
					json = new CardSet("politics",setcards);
					json = json.drawhand(3);
					contdraw();
				},
				error: function() {
					console.log("an error occured");
				}
			});
			
	}
	
	
	
	$(document).ready(function(){
		useid = parseInt($("#idnum").text());
		console.log(useid);
		getCard(useid);
	$("#outputArt").children().hide();
	//$("#outputArt").append("<div class='front'>front</div>").append("<div class='back'>back</div>");
	$("#show").on("click","#outputArt",function(e) {
		if (hid<2){
			$(this).children().show();
			id[hid] = $(this).attr("class").substring(1);
			hid++;
			cheque++;
			console.log(id[hid-1]);
			if (hid==2){
			if (id[1]==id[0] && cheque == 1){
				console.log(score);
				$("."+id[0]).remove();
				$(".A"+id[0]).remove();
				score--;
				postCard(id[0]);
				$("#score").empty();
				$("#score").append(score);
			} else {
				$(this).children().show();
				hid=0;
				cheque = 0;
				id[0]=null;
				id[1]="eggsegs";
				$(this).children().delay(3000).fadeOut(500);
				$("#show").children().children().delay(3000).fadeOut(500);

			}}

		} else {
			$(this).children().show();
			hid=0;
			cheque = 0;
			id[0]=null;
			id[1]="eggsegs";
			$(this).children().delay(3000).fadeOut(500);
			$("#show").children().children().delay(3000).fadeOut(500);
			
	}
		if (score == 0){
			window.location='stagewin.php'
		}
		e.stopPropagation();
	});
//	$("#outputImg").append("<div class='front'>front</div>").append("<div class='back'>back</div>");
	$("#show").on("click","#outputImg",function(e) {
		if (hid<2){
			$(this).children().show();
			id[hid] = $(this).attr("class");
			hid++;
			console.log(id[hid-1]);
			if (hid==2){
			if (id[1]==id[0]&& cheque == 1){
					console.log(score);
					$("."+id[0]).remove();
					$(".A"+id[0]).remove();
					postCard(id[0]);
					score--;
					$("#score").empty();
					$("#score").append(score);
			} else {
			$(this).children().show();
			hid=0;
			cheque = 0;
			id[0]=null;
			id[1]="eggsegs";
			$(this).children().delay(3000).fadeOut(500);
			$("#show").children().children().delay(3000).fadeOut(500);
			}}
		} else {
			$(this).children().show();
			hid=0;
			cheque = 0;
			$(this).children().delay(3000).fadeOut(500);
			$("#show").children().children().delay(3000).fadeOut(500);
			id[0]=null;
			id[1]="eggsegs";
		}
		if (score == 0){
			window.location='stagewin.php'
		}
		e.stopPropagation();
	});
});
	
function contdraw(){	
	
	for (var i=0;i<json.length; i++){
			cards = json;
			console.log(cards);
			var image = new Image();
			image.src = cards[i].imageurl;
			image.style.display = "inline-block";
			image.style.width = "90%";
			image.style.margin = "1%";
			image.style.verticalAlign = "top";
			$("#show").append(" <div class = '"+cards[i].keyword+"'id='outputImg'></div>");
			$("."+cards[i].keyword).append(image);
			$("#show").append("<div class = 'A"+cards[i].keyword+"'id='outputArt'></div>");
			$(".A"+cards[i].keyword).append(cards[i].excerpt);
			$("."+cards[i].keyword).children().hide();
			$(".A"+cards[i].keyword).children().hide();
		}
	//	$("#outputImg").children().hide();
		//$("#outputArt").children().hide();
	};
	
		function postCard(keyword){
			console.log("hello sailor");
			
		for (var i=0; i<json.length; i++){
			console.log(json[i].keyword);
			if (keyword == json[i].keyword){
				loadCard= json[i];
				
			}
		}
		$.post("favepost.php", 
			{keyword: loadCard.keyword, imagea:loadCard.imageurl, texta: loadCard.excerpt, textlink: loadCard.articleurl},
			function(data){
				console.log(data);
			});
	}
    
    }(jQuery));

