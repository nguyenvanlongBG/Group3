function setCookie(cname,cvalue,exdays) {
    const d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    let expires = "expires=" + d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    let name = cname + "=";
    let decodedCookie = decodeURIComponent(document.cookie);
    let ca = decodedCookie.split(';');
    for(let i = 0; i < ca.length; i++) {
      let c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  
  function checkCookie() {
    let blog = getCookie("blog");
    if (blog != "") {
        document.write("<h3>TITLE</h3>" +"<br>")
      document.writeln(blog + "<br>");
      }

      let blogContent = getCookie("blogContent");
    if (blog != "") {
        document.write("<h3>CONTENT</h3> " +"<br>")
      document.writeln(blogContent + "<br>");  
      }
  }
  function addBlog(){
    var formVal = document.getElementById("myForm");
    var formVal1 = document.getElementById("myForm1");
  
    setCookie("blog",formVal.value,1);
    setCookie("blogContent",formVal1.value,1);

    formVal.value = "";
    formVal1.value = "";
  }