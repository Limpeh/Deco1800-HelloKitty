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
class User{
	constructor(username,upassword){
		this.username = username;
		this.upassword = upassword;
	}
}
class student extends User{
	constructor(username,upassword,teacherID,favourites){
			super(username,upassword);
			this.teacherID=teacherID;
			this.favourites=favourites;
	}
}

class CardSet{
	constructor(topic,cardlist){
		this.topic=topic;
		this.cardlist=cardlist;
	}
	drawhand(num){
		int ran;
		var hand=[];
		for (int i=0; i<num; i++){
			ran = Math.floor(Math.random() * cardlist.length);
			hand.push(cardlist[ran]);
			cardlist.splice(ran,1);
		}
		return hand;
	}
}

