
fetch("information.json").then((data) => {
    return data.json();
}).then((objectData) => {
    console.log(objectData[0].title);
    let blogData = "";
    objectData.map((values) => {
        blogData +=  ' <div>
            '<h3>${values.title}</h3>' +
            '<section><img src="${values.image}" /></section>' +
            '<p>${values.content}</p>'
            '</div>'
    });
    document.getElementById("").innerHTML = blogData;
}).catch((err) => {
    console.log(err);
})
























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