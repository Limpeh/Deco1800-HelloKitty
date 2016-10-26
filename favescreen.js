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
				url:"favget.php",
				type: "POST",
				datatype: "JSON",
				data: {username: username},
				success: function(data) {
					json = JSON.parse(data);
					for (var i=0; i<json.length; i++){
							loadCard = new Card(json[i][0],json[i][2],json[i][4],json[i][3]);
							setcards.push(loadCard);
					}
					//json = new CardSet("politics",setcards);
					console.log(setcards);
					contdraw();
				},
				error: function() {
					console.log("an error occured");
				}
			});
			
	}
	
	$(document).ready(function(){
		username = $("#userwelcome").text();
		console.log(username);
		getCard(username);
	});
	
function contdraw(){	
	
	for (var i=0;i<json.length; i++){
			cards = setcards;
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
		}
	//	$("#outputImg").children().hide();
		//$("#outputArt").children().hide();
	};
    }(jQuery));

