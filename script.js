fetch("information.json").then((data) => {
    return data.json();
}).then((objectData) => {
    console.log(objectData.posts); let blogData = "";
    objectData.posts.map((value) => {
        blogData += ' <div class="culumn" id="blog">' +
            '<a href="content.html"><h3 class ="heading" id ="heading">' + value.title + '</h3></a>' +
            '<section id ="blogs-img '+value.id+'" class="blog-img"><a href="content.html"><img src="' + value.featured_image + '" /></a></section>' +
            /*'<div class="blog-container" id="blogs'+value.id+'" >' + value.content + '</div><br><br>'*/
        '</div>';
    });
    document.getElementById("posts").innerHTML = blogData;
}).catch((err) => {
    console.log(err);

});


/*$(document).ready(function(){
    $("#blogs").hide();

   if( $("#blogs-img").click(function () {
        $("$blogs").show();
    }));

});



const blogImage = document.querySelector(".blogs-img");
const blogContent = document.querySelector(".blog-container");

blogImage.addEventListener("click", () =>{
    blogContent.style.visibility = "visible";
})*/


    

/*$(document).ready(function () {
    $(".padded").click(function() {
        $("blogs-img").toggle();
        $("#blogs ").toggle();
    })
});*/



/*function show() {
 
  /* Access image by id and change
  the display property to block
  document.getElementById('blogs')
          .style.display = "blog-container";

  document.getElementById('blogs-img')
          .style.display = "blogs-img";
          var x = document.getElementById("padded");
if (x.style.display === "none") {
  x.style.display = "block";
} else {
  x.style.display = "none";
}*/


















/* let http = new XMLHttpRequestUpload();
http.open('get', 'information.json', true);
http.send();
http.onload = function () {
    if (this.readyState == 4 && this.status == 200) {
        let blog = JSON.parse(this.responseText);
        let results = "";

        for (let items of featured_image) {
            results += 
                <div class ="">
                    <img.src = "${blog.featured_image}"/>;
                    <p class="title">${blog.title}</p>;
                    <p class="description">${blog.content}</p>;
                
                </div>
            
        }
        document.querySelector(".append(" < img, src = " + value.featured_image + " > ")").innerHTML = results;
    }
}*/