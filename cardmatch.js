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
	addfav(fav){
		this.favourites.push(fav);
	}
}
class teacher extends User{
		constructor(username,upassword,teacherID){
			super(username,upassword);
			this.teacherID=teacherID;
			this.students=[];
			this.stages=[];
	}
	addstudent(student){
		this.students.push(student);
	}
	addstage(stage){
		this.stages.push(stage):
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
class game{
	constructor(student,cardset,pairs,timer){
		this.student=student;
		this.pairs=pairs;
		this.matches=0;
		this.hand=cardset.drawhand;
		this.cards=[];
		this.score=0;
		this.combo=0;
		this.timer=timer;
	}
	createcards(){
		for(int i=0;i<pairs;i++){
			this.cards.push(this.hand[i].articlecard());
			this.cards.push(this.hand[i].imageecard());
		}
	}
	matchscore(){
		this.score+=combo;
		this.combo++;
	}
	resetcombo(){
		this.combo=1;
	}
	checkmatch(a,b){
		if(cards[a][0]==cards[b][0]){
			matchscore();
			this.matches++;
			if (matches==pairs){
				return 2;
			} else{
				return 1;
			}
		} else{
			return 0;
		}
	}
	timedown(){
		timer=timer-1;
		if(timer==0){
			return 1;
		} else{
			timestop();
			return 0;
		}
	}
	timerun(){
		var mytime = setInterval(timedown(), 1000);
	}
	timestop(){
		clearInterval(mytime);
	}
}

