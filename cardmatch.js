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

/****//****//****//****//****//****//****//****//****//****//****//***/
///////////////////////////////////////////////////////////////////////
/****//****//****//****//****//****//****//****//****//****//****//***/

	var loadedImages = [];
    var urlPatterns = ["flickr.com", "nla.gov.au", "artsearch.nga.gov.au", "recordsearch.naa.gov.au", "images.slsa.sa.gov.au"];
    var found = 0;
(function($){

	function waitForFlickr() {
		if(found == loadedImages.length) {
			printImages();
		} else {
			setTimeout(waitForFlickr, 250);
		}

	}

    $("form#searchTrove").submit(function(event) {
        event.preventDefault();

        loadedImages = [];
	found = 0;
        //get input values
        var searchTerm = $("#searchTerm").val().trim();
        searchTerm = searchTerm.replace(/ /g, "%20");
        var sortBy = $("#sortBy").val();
        var apiKey = "jsk1qqntnrj7qbvf";

        //create searh query
        var url = "http://api.trove.nla.gov.au/result?key=" + apiKey + "&l-availability=y%2Ff&encoding=json&zone=picture" + "&sortby=relevance&n=100&q=" + searchTerm + "&callback=?";

        //get the JSON information we need to display the images
        $.getJSON(url, function(data) {
            $('#output').empty();
            console.log(data);
            $.each(data.response.zone[0].records.work, processImages);
            //printImages();

	   waitForFlickr(); // Waits for the flickr images to load
        });
    });




    /*
     *   Depending where the image comes from, there is a special way to get that image from the website.
     *   This function works out where the image is from, and gets the image URL
     */
    function processImages(index, troveItem) {
        var imgUrl = troveItem.identifier[0].value;
        if (imgUrl.indexOf(urlPatterns[0]) >= 0) { // flickr
		found++;
            addFlickrItem(imgUrl, troveItem);

        } else if (imgUrl.indexOf(urlPatterns[1]) >= 0) { // nla.gov
		found++;
            loadedImages.push(
                imgUrl + "/representativeImage?wid=900" // change ?wid=900 to scale the image
            );

        } else if (imgUrl.indexOf(urlPatterns[2]) >= 0) { //artsearch
		found++;
            loadedImages.push(
                "http://artsearch.nga.gov.au/IMAGES/LRG/" + getQueryVariable("IRN", imgUrl) + ".jpg"
            );

        } else if (imgUrl.indexOf(urlPatterns[3]) >= 0) { //recordsearch
		found++;
            loadedImages.push(
                "http://recordsearch.naa.gov.au/NAAMedia/ShowImage.asp?T=P&S=1&B=" + getQueryVariable("Number", imgUrl)
            );

        } else if (imgUrl.indexOf(urlPatterns[4]) >= 0) { //slsa 
            found++;
            loadedImages.push(
                imgUrl.slice(0, imgUrl.length - 3) + "jpg"
		);
            
        } else { // Could not reliably load image for item
            // UNCOMMENT FOR DEBUG: 
	    // console.log("Not available: " + imgUrl);
        }
    }

    function addFlickrItem(imgUrl, troveItem) {
        var flickr_key = "a4d0bf2f4bde0595521b7bd8317ec428";
        var flickr_secret = "efc7221b694ff55e";
        var flickr_url = "https://api.flickr.com/services/rest/?method=flickr.photos.getSizes&api_key=" + flickr_key + "&photo_id=";
        var url_comps = imgUrl.split("/");
        var photo_id = url_comps[url_comps.length - 1];

        $.getJSON(flickr_url + photo_id + "&format=json&nojsoncallback=1", function(data) {
            if (data.stat == "ok") {
                var flickr_image_url = data.sizes.size[data.sizes.size.length - 1].source;
                loadedImages.push(
                    flickr_image_url
                );
            }
        });

    }

    function printImages() {
		var testcard = new Card(searchTerm,loadedImages[],"null","null");
		return testcard;
    }

    // from http://css-tricks.com/snippets/javascript/get-url-variables/
    function getQueryVariable(variable, url) {
        var query = url.split("?");
        var vars = query[1].split("&");
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split("=");
            if (pair[0] == variable) {
                return pair[1];
            }
        }
        return (false);
    }
    
    }(jQuery));

